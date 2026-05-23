<?php
/**
 * emerald_news_game_refactor_no_get_result.php
 *
 * Same UI/logic as before BUT rewritten to avoid mysqli_stmt::get_result()
 * (common cause of blank pages when mysqlnd isn't enabled). Uses bind_result
 * everywhere + adds a safe context::updated fallback.
 */

// --------------------------------------------------
// bootstrap
// --------------------------------------------------
include $_SERVER['DOCUMENT_ROOT'] . '/api/includes.php';

if ($logged === 'no') { header('Location: /Login/Default.aspx'); exit(); }
if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }
if (empty($_SESSION['csrf_token'])) { $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); }
$CSRF = $_SESSION['csrf_token'];

// --------------------------------------------------
// helpers
// --------------------------------------------------
function req_int(string $key): ?int {
    $val = filter_input(INPUT_GET, $key, FILTER_VALIDATE_INT);
    return $val !== false && $val !== null ? $val : null;
}
function h(?string $s): string { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function updated_fallback($ts) {
    if (class_exists('context') && method_exists('context','updated')) return context::updated($ts);
    // crude fallback: Y-m-d H:i
    $t = is_numeric($ts) ? (int)$ts : strtotime((string)$ts);
    if ($t <= 0) return 'unknown';
    return date('Y-m-d H:i', $t);
}
//gonna add comments because cannot meh and i gotta understand it faster
function sanitize_description_inline_p(string $raw): string {
  // decode stored &lt;...&gt; into real tags
  $html = html_entity_decode($raw, ENT_QUOTES | ENT_HTML5, 'UTF-8');

  // normalize and strip obvious script vectors
  $html = str_replace(["\r\n", "\r"], "\n", $html);
  $html = preg_replace('/\son[a-z]+\s*=\s*("[^"]*"|\'[^\']*\')/i', '', $html);   // remove on*=
  $html = preg_replace('/javascript\s*:/i', '', $html);                           // kill javascript: anywhere

  // allow a small set of tags (now includes <img>)
  $allowed = '<b><strong><i><em><u><p><br><ul><ol><li><a><span><img>';
  $html = strip_tags($html, $allowed);

  // collapse paragraph boundaries so they read “connected”
  $html = preg_replace('/<\/p>\s*<p(\s[^>]*)?>/i', '', $html);

  // sanitize <a> tags: keep only safe hrefs + text attrs
  $html = preg_replace_callback('/<a\b[^>]*>/i', function($m) {
    $tag = $m[0];
    $href = '';
    if (preg_match('/href\s*=\s*([\'"])(.*?)\1/i', $tag, $h)) $href = $h[2];
    // only allow http(s), mailto, #, or relative
    if ($href !== '' && !preg_match('#^(https?:|mailto:|/|\\.|#)#i', $href)) $href = '#';
    $safe = '<a href="'.htmlspecialchars($href, ENT_QUOTES).'" rel="nofollow noopener" target="_blank">';
    return $safe;
  }, $html);

  // sanitize <img>: keep only http(s) or data:image sources, add lazy+responsive
  $html = preg_replace_callback('/<img\b[^>]*>/i', function($m) {
    $tag = $m[0];
    if (!preg_match('/src\s*=\s*([\'"])(.*?)\1/i', $tag, $s)) return ''; // no src → drop
    $src = $s[2];
    if (!preg_match('#^(https?:|data:image/)#i', $src)) return '';       // disallow weird schemes
    $alt = '';
    if (preg_match('/alt\s*=\s*([\'"])(.*?)\1/i', $tag, $a)) $alt = $a[2];
    // optional title
    $title = '';
    if (preg_match('/title\s*=\s*([\'"])(.*?)\1/i', $tag, $t)) $title = $t[2];
    return '<img src="'.htmlspecialchars($src, ENT_QUOTES).'"'.
           ($alt !== '' ? ' alt="'.htmlspecialchars($alt, ENT_QUOTES).'"' : ' alt=""').
           ($title !== '' ? ' title="'.htmlspecialchars($title, ENT_QUOTES).'"' : '').
           ' loading="lazy" decoding="async" referrerpolicy="no-referrer" '.
           'style="max-width:100%;height:auto;border-radius:8px;">';
  }, $html);

  return $html;
}


// --------------------------------------------------
// input
// --------------------------------------------------
$id = req_int('ID');
if (!$id) { header('Location: /Error.aspx'); exit(); }
$viewerId = (int)($_USER['id'] ?? 0);

// --------------------------------------------------
// queries (WITHOUT get_result)
// --------------------------------------------------
$game = null; $creator = null; $totalFavs = 0; $viewerFavorited = false; $isFriend = false;

// game + creator
if ($stmt = $conn->prepare('SELECT g.id, g.name, g.creator_id, g.creation_date, g.copy, g.description, u.username FROM games g INNER JOIN users u ON u.id = g.creator_id WHERE g.id = ? LIMIT 1')) {
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows === 1) {
        $stmt->bind_result($g_id,$g_name,$g_creator_id,$g_creation_date,$g_copy,$g_desc,$u_username);
        $stmt->fetch();
        $game = [
            'id'=>$g_id,
            'name'=>$g_name,
            'creator_id'=>$g_creator_id,
            'creation_date'=>$g_creation_date,
            'copy'=>$g_copy,
            'description'=>$g_desc,
        ];
        $creator = ['id'=>$g_creator_id,'username'=>$u_username];
    }
    $stmt->close();
}
if (!$game) { header('Location: /Error.aspx'); exit(); }

// favorites count
if ($stmt = $conn->prepare('SELECT COUNT(*) FROM games_favorites WHERE game = ?')) {
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $stmt->bind_result($c); $stmt->fetch();
    $totalFavs = (int)$c; $stmt->close();
}

// viewer favorited
if ($viewerId && ($stmt = $conn->prepare('SELECT 1 FROM games_favorites WHERE userid=? AND game=? LIMIT 1'))) {
    $stmt->bind_param('ii',$viewerId,$id);
    $stmt->execute(); $stmt->store_result();
    $viewerFavorited = $stmt->num_rows > 0; $stmt->close();
}

// friendship either direction
if ($stmt = $conn->prepare('SELECT 1 FROM friends WHERE user_from=? AND user_to=? AND arefriends=1 LIMIT 1')) {
    $stmt->bind_param('ii',$creator['id'],$viewerId);
    $stmt->execute(); $stmt->store_result();
    $isFriend = $stmt->num_rows>0; $stmt->close();
}
if (!$isFriend && ($stmt = $conn->prepare('SELECT 1 FROM friends WHERE user_to=? AND user_from=? AND arefriends=1 LIMIT 1'))) {
    $stmt->bind_param('ii',$creator['id'],$viewerId);
    $stmt->execute(); $stmt->store_result();
    $isFriend = $stmt->num_rows>0; $stmt->close();
}

$copyOpen = ($game['copy'] === 'on');
$descriptionHtml = sanitize_description_inline_p((string)$game['description']);
$pageTitle = $game['name'] . ' by ' . $creator['username'] . ' • Emerald News';

// --------------------------------------------------
// view
// --------------------------------------------------
include $_SERVER['DOCUMENT_ROOT'] . '/api/WebsiteBuild/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/api/WebsiteBuild/navbar.php';
?>

<?php
$themeVars = $dataSavingModeEnabled
    ? [
        'bg' => '#f5f7fa',
        'card' => '#ffffff',
        'cardShadow' => '0 6px 20px rgba(15,23,42,.08)',
        'muted' => '#4a5568',
        'text' => '#0f172a',
        'brand' => '#2563eb',
        'brand2' => '#38b2ac',
        'danger' => '#dc2626',
        'ok' => '#16a34a',
        'border' => '#d1d5db',
        'pillBg' => '#f1f5f9',
        'pillText' => '#475569',
        'buttonBg' => '#f8fafc',
        'buttonHover' => '#e2e8f0',
        'buttonText' => '#0f172a',
        'ghostBg' => '#eef2ff',
        'badgeBg' => '#f8fafc',
        'description' => '#334155',
        'commentsBg' => '#ffffff',
        'dialogBg' => '#ffffff',
        'dialogBorder' => '#d1d5db',
        'backdrop' => 'rgba(148,163,184,.35)',
        'primaryBtnBg' => 'linear-gradient(90deg, #38bdf8, #6366f1)',
        'primaryBtnText' => '#ffffff',
        'ghostBtnBg' => '#eef2ff',
        'link' => '#2563eb',
    ]
    : [
        'bg' => '#0b0e11',
        'card' => 'linear-gradient(180deg,rgba(255,255,255,.02),rgba(255,255,255,0))',
        'cardShadow' => '0 10px 30px rgba(0,0,0,.35)',
        'muted' => '#8b98a5',
        'text' => '#e7eef6',
        'brand' => '#4fd1c5',
        'brand2' => '#8b5cf6',
        'danger' => '#ef4444',
        'ok' => '#22c55e',
        'border' => '#1f2937',
        'pillBg' => '#0e1319',
        'pillText' => '#8b98a5',
        'buttonBg' => '#0f141a',
        'buttonHover' => '#111823',
        'buttonText' => '#e7eef6',
        'ghostBg' => '#0c1117',
        'badgeBg' => '#0e1319',
        'description' => '#dfe7ef',
        'commentsBg' => '#0c1117',
        'dialogBg' => '#0d1218',
        'dialogBorder' => '#1f2937',
        'backdrop' => 'rgba(0,0,0,.5)',
        'primaryBtnBg' => 'linear-gradient(90deg, #aaff00, #00ff2a)',
        'primaryBtnText' => '#0b0e11',
        'ghostBtnBg' => '#0c1117',
        'link' => '#4fd1c5',
    ];
?>
<style>
:root{
  --bg: <?=$themeVars['bg']?>;
  --card: <?=$themeVars['card']?>;
  --card-shadow: <?=$themeVars['cardShadow']?>;
  --muted: <?=$themeVars['muted']?>;
  --text: <?=$themeVars['text']?>;
  --brand: <?=$themeVars['brand']?>;
  --brand-2: <?=$themeVars['brand2']?>;
  --danger: <?=$themeVars['danger']?>;
  --ok: <?=$themeVars['ok']?>;
  --border: <?=$themeVars['border']?>;
  --pill-bg: <?=$themeVars['pillBg']?>;
  --pill-text: <?=$themeVars['pillText']?>;
  --button-bg: <?=$themeVars['buttonBg']?>;
  --button-hover: <?=$themeVars['buttonHover']?>;
  --button-text: <?=$themeVars['buttonText']?>;
  --ghost-bg: <?=$themeVars['ghostBg']?>;
  --badge-bg: <?=$themeVars['badgeBg']?>;
  --description: <?=$themeVars['description']?>;
  --comments-bg: <?=$themeVars['commentsBg']?>;
  --dialog-bg: <?=$themeVars['dialogBg']?>;
  --dialog-border: <?=$themeVars['dialogBorder']?>;
  --backdrop: <?=$themeVars['backdrop']?>;
  --primary-btn-bg: <?=$themeVars['primaryBtnBg']?>;
  --primary-btn-text: <?=$themeVars['primaryBtnText']?>;
  --ghost-btn-bg: <?=$themeVars['ghostBtnBg']?>;
  --link: <?=$themeVars['link']?>;
}
*{box-sizing:border-box}
body{background:var(--bg);color:var(--text);font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,Helvetica,Arial}
.container{max-width:1100px;margin:24px auto;padding:0 16px}
.grid{display:grid;grid-template-columns:1.2fr .8fr;gap:16px}
@media(max-width:900px){.grid{grid-template-columns:1fr}}
.card{background:var(--card);border:1px solid var(--border);border-radius:14px;box-shadow:var(--card-shadow);overflow:hidden}
.header{padding:18px 20px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--border)}
.header h1{font-size:1.25rem;line-height:1.2;margin:0}.header .subtitle{font-size:.9rem}
.content{padding:18px 20px}
.meta{
  display:flex;
  justify-content:center;
  align-items:center;
  gap:12px;
  margin:14px 0 6px;
  flex-wrap:wrap;
}
.meta .pill{
  background:var(--pill-bg);
  border:1px solid var(--border);
  color:var(--pill-text);
  padding:8px 10px;
  border-radius:999px;
  font-size:.85rem;
  text-align:center;
  white-space:nowrap;
}
.actions{display:flex;flex-wrap:wrap;gap:10px;margin-top:14px}
.btn{appearance:none;border:1px solid var(--border);background:var(--button-bg);color:var(--button-text);padding:10px 14px;border-radius:10px;cursor:pointer;font-weight:600;transition:transform .05s ease,background .2s ease}
.btn:hover{background:var(--button-hover)}.btn:active{transform:translateY(1px)}
.btn.primary{background:var(--primary-btn-bg);border:none;color:var(--primary-btn-text)}.btn.ghost{background:var(--ghost-btn-bg)}
.badge{display:inline-flex;align-items:center;gap:6px;font-size:.85rem;padding:6px 10px;border-radius:999px;background:var(--badge-bg);border:1px solid var(--border);color:var(--muted)}
.badge .dot{width:8px;height:8px;border-radius:50%}
.description{line-height:1.55;color:var(--description)}.kv{color:var(--muted)}
/* hide legacy blocks if present */
#ItemContainer,#Item,#TabbedInfo{display:none}
/* Comments */
.comments-card .content{padding-top:8px}#CommentsContainer{background:var(--comments-bg);border:1px solid var(--border);border-radius:10px;padding:12px;min-height:80px}
/* Modal */
.dialog-backdrop{position:fixed;inset:0;background:var(--backdrop);display:none;align-items:center;justify-content:center;z-index:1000}
.dialog{width:min(520px,92vw);background:var(--dialog-bg);border:1px solid var(--dialog-border);border-radius:12px;overflow:hidden}
.dialog .dialog-hd{padding:14px 16px;border-bottom:1px solid var(--dialog-border);display:flex;justify-content:space-between;align-items:center}
.dialog .dialog-bd{padding:16px}.spinner{width:22px;height:22px;border:3px solid #233042;border-top-color:var(--brand);border-radius:50%;animation:spin .8s linear infinite;display:inline-block;vertical-align:middle}
@keyframes spin{to{transform:rotate(360deg)}}.small{font-size:.9rem;color:var(--muted)}
    .header--commentary { display:block; }
.header--commentary .header-col { display:grid; grid-template-columns: 1fr; }
.header--commentary .subnote{
/*   color:var(--muted); */
  font-size:.9rem;
  text-align:right; /* right-align the note under the title */
  margin-top:4px;
}
.header .subtitle a{color:var(--link);text-decoration:none;font-weight:600}
.header .subtitle a:hover{text-decoration:underline}

</style>

<div class="container">
  <div class="grid">
    <section class="card">
      <div class="header" style="justify-content: center;">
        <div>
          <h1><?= h($game['name']) ?></h1>
          <div class="subtitle">by <a href="/User.aspx?ID=<?= (int)$creator['id'] ?>" class="subtitle-link"><?= h($creator['username']) ?></a></div>
        </div>
      </div>
      <div class="content">
        <div class="meta">
          <div class="pill">Updated: <?= h(updated_fallback($game['creation_date'])) ?></div>
          <div class="pill" id="favCount">Favorited: <?= (int)$totalFavs ?></div>
        </div>
        <div class="description" id="Description"><?= $descriptionHtml ?: '<span class="kv">No description.</span>' ?></div>
        <div class="actions">
          <button class="btn ghost" id="btnFavorite" aria-pressed="<?= $viewerFavorited ? 'true' : 'false' ?>">
            <span class="fav-label"><?= $viewerFavorited ? 'Favorited' : 'Favorite' ?></span>
          </button>
        </div>
      </div>
    </section>
    <aside class="card comments-card">
      <div class="header header--commentary">
          <div class="header-col">
            <h2 style="margin:0;font-size:1rem;">Commentary</h2>
            <div class="subnote">Share your thoughts about this news post.</div>
          </div>
        </div>
        <div class="content">
          <div id="CommentsContainer">Loading comments…</div>
        </div>
    </aside>
  </div>
</div>

<div id="joinDialog" class="dialog-backdrop" role="dialog" aria-modal="true" aria-labelledby="joinTitle">
  <div class="dialog">
    <div class="dialog-hd"><strong id="joinTitle">Joining game…</strong><button class="btn" id="joinClose" aria-label="Close">Close</button></div>
    <div class="dialog-bd"><div id="joinState"><span class="spinner"></span> <span class="small">Requesting server…</span></div></div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script>if(typeof window.jQuery==='undefined'){document.write('<script src="/js/jquery-3.6.0.min.js"><\\/script>')}</script>

<script>
(() => {
  'use strict';
  const state = { itemId: <?= (int)$id ?>, viewerId: <?= (int)$viewerId ?>, csrf: '<?= h($CSRF) ?>', joiningPollUrl: null };
  const $join = { backdrop: document.getElementById('joinDialog'), close: document.getElementById('joinClose'), state: document.getElementById('joinState') };
  function openJoin(msg='Requesting server…'){ $join.state.innerHTML = '<span class="spinner"></span> <span class="small">'+msg+'</span>'; $join.backdrop.style.display='flex'; }
  function closeJoin(){ $join.backdrop.style.display='none'; state.joiningPollUrl=null; }
  async function favoriteToggle(){
    const btn = document.getElementById('btnFavorite'); const label = btn.querySelector('.fav-label'); btn.disabled=true;
    try{
      const res = await fetch(`/api/Favorites/FavoriteGame.php?id=${state.itemId}`,{ method:'POST', headers:{'X-CSRF-Token': state.csrf} });
      if(!res.ok) throw new Error('Favorite failed');
      const favored = btn.getAttribute('aria-pressed') !== 'true';
      btn.setAttribute('aria-pressed', String(favored));
      label.textContent = favored ? 'Favorited' : 'Favorite';
      const countEl=document.getElementById('favCount'); const m=/([0-9]+)/.exec(countEl.textContent); if(m){ let c=parseInt(m[1],10); c=favored?c+1:Math.max(0,c-1); countEl.textContent='Favorited: '+c; }
    }catch(e){ alert('Could not favorite right now, or you already favourited it.'); console.error(e); } finally{ btn.disabled=false; }
  }
  async function joinGame(serverId=0){
    openJoin();
    try{
      const form=new URLSearchParams(); form.set('placeId', String(state.itemId)); form.set('serverId', String(serverId));
      const res=await fetch('/api/beta/requestgame',{ method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body: form.toString() });
      const text=await res.text(); if(!res.ok) throw new Error(text||'Request failed');
      if(/^Success/.test(text)){ window.location.href = '/api/beta/startgame.php?id='+state.itemId; setTimeout(closeJoin,1500); return; }
      if(/^https?:\/\//.test(text)){ state.joiningPollUrl=text; pollJoin(); } else { $join.state.innerHTML='<span class="small">'+text+'</span>'; }
    }catch(e){ console.error(e); $join.state.innerHTML='<span class="small">Something went wrong, try again later.</span>'; }
  }
  async function pollJoin(){ if(!state.joiningPollUrl) return; try{ const res=await fetch(state.joiningPollUrl,{headers:{'Accept':'application/json'}}); const data=await res.json(); $join.state.innerHTML='<span class="small">'+(data.msg||'Waiting…')+'</span>'; if(data&&data.token){ window.location.href=String(data.token); setTimeout(closeJoin,1500);} else if(data&&data.check===true){ setTimeout(pollJoin,800);} } catch(e){ console.error(e); $join.state.innerHTML='<span class="small">Server not ready yet…</span>'; setTimeout(pollJoin,1200);} }
  async function routeEditor(mode){ try{ const res=await fetch('/api/games/launch.php',{ method:'POST', headers:{'Content-Type':'application/json','X-CSRF-Token': state.csrf }, body: JSON.stringify({ gameId: state.itemId, mode }) }); if(!res.ok) throw new Error('Launch failed'); const {url}=await res.json(); if(url) window.location.href=url; }catch(e){ alert('Unable to launch editor right now'); console.error(e);} }
  function getComments(page=1,item=state.itemId,type='comments'){ $.post('/api/items/getCommentsGame.php',{page,item,type}).done(html=>{$('#CommentsContainer').html(html);}).fail(()=>{$('#CommentsContainer').html('Failed to get comments');}); }
  $(function(){ getComments(1); document.getElementById('btnPlay')?.addEventListener('click',()=>joinGame(0)); document.getElementById('btnFavorite')?.addEventListener('click',favoriteToggle); document.getElementById('btnEdit')?.addEventListener('click',()=>routeEditor('host')); document.getElementById('btnSolo')?.addEventListener('click',()=>routeEditor('playsolo')); $join.close.addEventListener('click',closeJoin); });
  window.setReply = function(id){ console.log('Reply to', id); }
})();
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/api/WebsiteBuild/footer.php'; ?>
