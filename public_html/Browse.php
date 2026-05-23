<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

// Get the user ID from the URL parameter
$id = isset($_GET['ID']) ? (int)$_GET['ID'] : 0;

if($id < 1) {
    if($logged == "no") {
        header("Location: /Login/Default.aspx");
        exit;
    }
}

$searchusername = trim($_GET['Keyword'] ?? '');
$searchLike = $searchusername === '' ? '%' : '%' . $searchusername . '%';
$usersperpage = 10;

try {
    $countRow = $db->selectOne(
        'SELECT COUNT(*) AS total
         FROM users u
         LEFT JOIN bans b ON b.userid = u.id
         WHERE b.userid IS NULL
           AND u.username COLLATE armscii8_general_ci LIKE ?',
        's',
        [$searchLike],
        ['total' => 'int']
    );
    $usercount = (int)($countRow['total'] ?? 0);
} catch (Throwable $e) {
    error_log('[BROWSE_COUNT] ' . $e->getMessage());
    $usercount = 0;
}

$pages = max(1, (int)ceil($usercount / $usersperpage));

$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?? 1;
if ($page > $pages) {
    $page = $pages;
}

$offset = ($page - 1) * $usersperpage;

try {
    $userq = $db->select(
        'SELECT u.id, u.username, u.blurb, u.lastseen
         FROM users u
         LEFT JOIN bans b ON b.userid = u.id
         WHERE b.userid IS NULL
           AND u.username COLLATE armscii8_general_ci LIKE ?
         ORDER BY u.lastseen DESC
         LIMIT ?
         OFFSET ?',
        'sii',
        [$searchLike, $usersperpage, $offset],
        ['id' => 'int', 'lastseen' => 'int']
    );
} catch (Throwable $e) {
    error_log('[BROWSE_USERS] ' . $e->getMessage());
    $userq = [];
}
?>
<title>emeraldnews - accounts</title>
<style>
#Body {
    margin: 0;
    padding: 20px;
    background-color: #f5f5f5;
    min-height: 100vh;
}

#ctl00_cphRoblox_Panel1 {
    max-width: 1200px;
    margin: 0 auto;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
}

#CatalogContainer {
    background: #4a9eff;
    padding: 20px;
    color: white;
}

.SearchBar {
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: center;
    flex-wrap: wrap;
}

.SearchBox input {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    width: 300px;
    font-size: 14px;
}

.SearchButton input {
    padding: 8px 16px;
    background: #2c5aa0;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.SearchButton input:hover {
    background: #1e3d6f;
}

.SearchLinks {
    margin-left: 10px;
}

.SearchLinks a {
    color: white;
    text-decoration: none;
    font-size: 12px;
}

.SearchLinks a:hover {
    text-decoration: underline;
}

#BrowseContainer {
    padding: 20px;
}

.Grid {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.GridHeader {
    background: #e8f4f8;
    font-weight: bold;
}

.GridHeader th {
    padding: 12px;
    text-align: left;
    border-bottom: 2px solid #ddd;
}

.GridItem {
    border-bottom: 1px solid #eee;
    transition: background-color 0.2s;
}

.GridItem:hover {
    background-color: #f9f9f9;
}

.GridItem td {
    padding: 12px;
    vertical-align: top;
}

.GridItem a {
    color: #2c5aa0;
    text-decoration: none;
    font-weight: bold;
}

.GridItem a:hover {
    text-decoration: underline;
}

.GridItem span {
    font-size: 12px;
    color: #666;
}

.UserOnlineStatus {
    color: #28a745;
    font-weight: bold;
}

.UserOfflineStatus {
    color: #6c757d;
    font-weight: bold;
}

.GridPager {
    background: #f8f9fa;
    border-top: 2px solid #ddd;
}

.GridPager td {
    padding: 15px;
    text-align: center;
}

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    flex-wrap: wrap;
}

.pagination a {
    padding: 6px 12px;
    background: #e9ecef;
    color: #495057;
    text-decoration: none;
    border-radius: 4px;
    border: 1px solid #dee2e6;
    font-size: 14px;
}

.pagination a:hover {
    background: #dee2e6;
}

.pagination .current {
    background: #2c5aa0;
    color: white;
}

.no-results {
    text-align: center;
    padding: 40px;
    color: #666;
}

@media (max-width: 768px) {
    .SearchBox input {
        width: 100%;
        margin-bottom: 10px;
    }
    
    .SearchBar {
        flex-direction: column;
    }
    
    .Grid {
        font-size: 12px;
    }
    
    .GridHeader th,
    .GridItem td {
        padding: 8px;
    }
}
</style>

<div id="Body" style="min-height: 0vh;">
    <div id="ctl00_cphRoblox_Panel1">
        
        <div id="BrowseContainer">
            <?php if ($usercount > 0): ?>
                <div style="margin-bottom: 15px; color: #666; font-size: 14px;">
                    Showing <?= min($offset + 1, $usercount) ?> - <?= min($offset + $usersperpage, $usercount) ?> of <?= $usercount ?> users
                </div>
            <?php endif; ?>
<!--             same thing over here -->
            <table class="Grid" style="
    background-color: sandybrown;"
>
                
                <thead>
<!--                     look bro i kow this sucks because like its already up thre but i like dirty code.. not that kind bro -->
                    <tr class="GridHeader" style="color: green; background-color: yellow;">
                        <th style="width: 40%;">Name</th>
                        <th style="width: 20%;">Status</th>
                        <th style="width: 40%;">Last Seen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($usercount === 0 || empty($userq)): ?>
                        <tr><td colspan="3" class="no-results">No users found matching your search.</td></tr>
                    <?php else: ?>
                        <?php foreach ($userq as $row): ?>
                            <?php
                                $id = (int)($row['id'] ?? 0);
                                $name = htmlspecialchars((string)($row['username'] ?? ''), ENT_QUOTES, 'UTF-8');
                                $descriptionRaw = trim((string)($row['blurb'] ?? ''));
                                $description = $descriptionRaw !== '' ? htmlspecialchars($descriptionRaw, ENT_QUOTES, 'UTF-8') : '';
                                $lastseen = (int)($row['lastseen'] ?? 0);
                                $isOnline = ($lastseen + 300 >= time());
                                $lastSeenString = $isOnline ? 'Online' : date('d/m/Y g:i A', $lastseen);
                                $onlineStatus = $isOnline ? "<span class='UserOnlineStatus'>Online</span>" : "<span class='UserOfflineStatus'>Offline</span>";
                            ?>
                            <tr class="GridItem">
                                <td>
                                    <a href="/User.aspx?ID=<?=$id?>"><?=$name?></a>
                                    <?php if ($description !== ''): ?>
                                        <br><span><?=$description?></span>
                                    <?php endif; ?>
                                </td>
                                <td><?=$onlineStatus?></td>
                                <td><?=htmlspecialchars($lastSeenString, ENT_QUOTES, 'UTF-8')?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            
            <?php if ($pages > 1): ?>
            <div style="margin-top: 20px;">
                <div class="pagination">
                    <?php
                    // Previous page
                    if ($page > 1) {
                        echo "<a href='/Browse.aspx?page=".($page-1)."&Keyword=".urlencode($searchusername)."'>← Previous</a>";
                    }
                    
                    // Page numbers
                    $start = max(1, $page - 2);
                    $end = min($pages, $page + 2);
                    
                    if ($start > 1) {
                        echo "<a href='/Browse.aspx?page=1&Keyword=".urlencode($searchusername)."'>1</a>";
                        if ($start > 2) {
                            echo "<span>...</span>";
                        }
                    }
                    
                    for ($i = $start; $i <= $end; $i++) {
                        $class = ($i == $page) ? "current" : "";
                        echo "<a href='/Browse.aspx?page=$i&Keyword=".urlencode($searchusername)."' class='$class'>$i</a>";
                    }
                    
                    if ($end < $pages) {
                        if ($end < $pages - 1) {
                            echo "<span>...</span>";
                        }
                        echo "<a href='/Browse.aspx?page=$pages&Keyword=".urlencode($searchusername)."'>$pages</a>";
                    }
                    
                    // Next page
                    if ($page < $pages) {
                        echo "<a href='/Browse.aspx?page=".($page+1)."&Keyword=".urlencode($searchusername)."'>Next →</a>";
                    }
                    ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
function doSearch() {
    const searchValue = document.querySelector('input[name="Keyword"]').value;
    location.href = "Browse.aspx?Keyword=" + encodeURIComponent(searchValue);
}
</script>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
