<?php
// File: /api/items/getCommentsGame.php
include $_SERVER['DOCUMENT_ROOT'] . '/api/includes.php';
header('Content-Type: text/html; charset=UTF-8');

// CONFIG — use the same table chosen above
$TABLE = 'games_comments'; // fallback to 'comments' if needed

$item = isset($_POST['item']) ? (int)$_POST['item'] : (isset($_GET['item']) ? (int)$_GET['item'] : 0);
$page = isset($_POST['page']) ? (int)$_POST['page'] : (isset($_GET['page']) ? (int)$_GET['page'] : 1);
$per  = 15;
$off  = max(0, ($page - 1) * $per);

function h(?string $s){ return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

if ($item <= 0) { echo '<div>Invalid item.</div>'; exit; }

// Build SQL and graceful fallback if table name is different
$sql = "SELECT c.id, c.user_id, c.content, c.reply_to, c.created_at, u.username FROM `$TABLE` c INNER JOIN users u ON u.id = c.user_id WHERE c.item_id = '$item' ORDER BY c.id DESC LIMIT $off,$per";
$res = mysqli_query($conn, $sql);
if (!$res && mysqli_errno($conn) == 1146) { // table missing → try 'comments'
    $TABLE = 'comments';
    $sql = "SELECT c.id, c.user_id, c.content, c.reply_to, c.created_at, u.username FROM `$TABLE` c INNER JOIN users u ON u.id = c.user_id WHERE c.item_id = '$item' ORDER BY c.id DESC LIMIT $off,$per";
    $res = mysqli_query($conn, $sql);
}
if (!$res) { echo '<div>DB error: ' . h(mysqli_error($conn)) . '</div>'; exit; }

?>
<style>
  .commentary-form textarea { width: 100%; border: 1px solid var(--border, #d1d5db); border-radius: 8px; padding: 10px; color: var(--text, #1f2937); background: var(--card, #f8fafc); }
  .commentary-form textarea:focus { outline: 2px solid var(--brand, #4fd1c5); }
  .commentary-form .actions { display: flex; gap: 8px; justify-content: flex-end; margin-top: 8px; }
  .commentary-form button { border: 1px solid var(--border, #d1d5db); background: var(--button-bg, #e5e7eb); color: var(--button-text, #1f2937); padding: 8px 12px; border-radius: 8px; cursor: pointer; font-weight: 600; }
  .commentary-form button:hover { background: var(--button-hover, #d1d5db); }
  .commentary-form .reply-indicator { display: none; color: var(--muted, #475569); margin-top: 6px; font-size: 0.9rem; }
  .commentary-list { margin-top: 12px; display: flex; flex-direction: column; gap: 10px; }
  .commentary-item { border: 1px solid var(--border, #d1d5db); border-radius: 10px; padding: 10px 12px; background: var(--ghost-bg, #f8fafc); color: var(--text, #1f2937); }
  .commentary-meta { font-size: 0.9rem; color: var(--muted, #475569); margin-bottom: 6px; display: flex; gap: 6px; flex-wrap: wrap; align-items: center; }
  .commentary-meta a { color: var(--text, #1f2937); font-weight: 700; text-decoration: none; }
  .commentary-meta a:hover { text-decoration: underline; }
  .commentary-meta button { border: 1px solid var(--border, #d1d5db); background: var(--button-bg, #e5e7eb); color: var(--button-text, #1f2937); padding: 4px 10px; border-radius: 8px; cursor: pointer; }
  .commentary-meta button:hover { background: var(--button-hover, #d1d5db); }
  .commentary-body { white-space: pre-wrap; line-height: 1.4; }
</style>
<div class="comments">
  <form id="commentForm" class="commentary-form" onsubmit="return postComment(event)">
    <textarea id="comment" name="comment" rows="3" placeholder="Write a comment…"></textarea>
    <input type="hidden" id="replyto" value="">
    <div class="actions">
      <button type="button" onclick="clearReplyUI()">Cancel</button>
      <button type="submit">Post</button>
    </div>
    <div id="replyIndicator" class="reply-indicator"></div>
  </form>

  <div class="commentary-list">
    <?php while ($row = mysqli_fetch_assoc($res)): ?>
      <div class="commentary-item">
        <div class="commentary-meta">
          <a href="/User.aspx?ID=<?= (int)$row['user_id'] ?>"><?= h($row['username']) ?></a>
          <span aria-hidden="true">•</span>
          <span><?= h($row['created_at']) ?></span>
          <button type="button" onclick="setReplyUI(<?= (int)$row['id'] ?>)">Reply</button>
        </div>
        <div class="commentary-body"><?= nl2br(h($row['content'])) ?></div>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<script>
function setReplyUI(id){
  document.getElementById('replyto').value = String(id);
  const ind = document.getElementById('replyIndicator');
  ind.textContent = 'Replying to comment #' + id + ' — Post to confirm or Cancel to dismiss.';
  ind.style.display = 'block';
  document.getElementById('comment').focus();
}
function clearReplyUI(){
  document.getElementById('replyto').value = '';
  document.getElementById('replyIndicator').style.display = 'none';
}
async function postComment(e){
  e.preventDefault();
  const content = document.getElementById('comment').value.trim();
  if(!content) return false;
  const reply_to = document.getElementById('replyto').value.trim();
  try{
    const body = new URLSearchParams();
    body.set('content', content);
    body.set('item', '<?= (int)$item ?>');
    if (reply_to) body.set('reply_to', reply_to);
    const res = await fetch('/api/items/CommentGame.php', { method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body: body.toString() });
    const text = await res.text();
    if(text.trim() === 'Success'){
      // reload comments
      fetch('/api/items/getCommentsGame.php', { method:'POST', headers:{'Content-Type':'application/x-www-form-urlencoded'}, body: new URLSearchParams({ item: '<?= (int)$item ?>', page: '1' }).toString() })
        .then(r=>r.text()).then(html=>{ document.getElementById('CommentsContainer').innerHTML = html; });
    } else {
      alert(text);
    }
  }catch(err){
    alert('Failed to post comment');
    console.error(err);
  }
  return false;
}
</script>
