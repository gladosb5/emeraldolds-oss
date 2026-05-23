<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$renderFriendsError = static function (): void {
    ?>
    <div id="Body">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h2 style="text-align: center">An Error occured! We're sorry.</h2>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; exit();
};

$userid = filter_input(INPUT_GET, 'UserID', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?? 0;
if ($userid < 1) {
    $renderFriendsError();
}

try {
    $item = $db->selectOne(
        'SELECT id, username FROM users WHERE id = ? LIMIT 1',
        'i',
        [$userid],
        ['id' => 'int']
    );
} catch (Throwable $e) {
    error_log('[FRIENDS_USER] ' . $e->getMessage());
    $item = null;
}

if ($item === null) {
    $renderFriendsError();
}

$friendsPerPage = 12;

try {
    $friendCountRow = $db->selectOne(
        'SELECT COUNT(*) AS total
         FROM friends
         WHERE arefriends = 1
           AND (user_from = ? OR user_to = ?)',
        'ii',
        [$userid, $userid],
        ['total' => 'int']
    );
    $friendcount = (int)($friendCountRow['total'] ?? 0);
} catch (Throwable $e) {
    error_log('[FRIENDS_COUNT] ' . $e->getMessage());
    $friendcount = 0;
}

$pages = max(1, (int)ceil($friendcount / $friendsPerPage));
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?? 1;
if ($page > $pages) {
    $page = $pages;
}

$offset = ($page - 1) * $friendsPerPage;

$friends = [];

if ($friendcount > 0) {
    try {
        $friends = $db->select(
            'SELECT fe.friend_id, fe.edge_id, u.username, u.lastseen
             FROM (
                 SELECT
                     CASE WHEN f.user_from = ? THEN f.user_to ELSE f.user_from END AS friend_id,
                     f.id AS edge_id
                 FROM friends f
                 WHERE f.arefriends = 1
                   AND (f.user_from = ? OR f.user_to = ?)
                 ORDER BY f.id DESC
                 LIMIT ?
                 OFFSET ?
             ) AS fe
             INNER JOIN users u ON u.id = fe.friend_id
             ORDER BY fe.edge_id DESC',
            'iiiii',
            [$userid, $userid, $userid, $friendsPerPage, $offset],
            [
                'friend_id' => 'int',
                'edge_id' => 'int',
                'lastseen' => 'int',
            ]
        );
    } catch (Throwable $e) {
        error_log('[FRIENDS_LIST] ' . $e->getMessage());
        $friends = [];
    }
}
?>
<title><?=$item['username']?>'s Friends</title>
<div id="Body">
<div id="FriendsContainer">
  <div id="Friend">
    <style>
    body {
        font: normal 8pt/normal 'Comic Sans MS',Verdana,sans-serif;
        margin-top: 0;
        text-transform: none;
        text-decoration: none;
    }
    h4 {
        font-size: 10pt;
        font-weight: bold;
        line-height: 1em;
        margin-bottom: 5px;
        margin-top: 5px;
    }
    .FriendPager a {
        margin: 0 8px;
    }
    </style>
        <h4><?=$item['username']?>'s Friends<?= $friendcount > 0 ? " ({$friendcount})" : '' ?></h4>
    <div align="center"></div>
    <table cellspacing="0" border="0" align="Center">
      <tbody>
        <?php if ($friendcount === 0 || empty($friends)): ?>
          <tr>
            <td colspan="3"><p style="padding: 10px 10px 10px 10px;">This person doesn't have any emeraldnews friends.</p></td>
          </tr>
        <?php else: ?>
          <?php foreach (array_chunk($friends, 3) as $chunk): ?>
            <tr>
              <?php foreach ($chunk as $friend): ?>
                <?php
                    $friendId = (int)($friend['friend_id'] ?? 0);
                    $friendName = htmlspecialchars((string)($friend['username'] ?? ''), ENT_QUOTES, 'UTF-8');
                    $friendLastSeen = (int)($friend['lastseen'] ?? 0);
                    $friendOnline = ($friendLastSeen + 300 >= time());
                    $statusIcon = $friendOnline ? '/images/OnlineStatusIndicator_IsOnline.gif' : '/images/OnlineStatusIndicator_IsOffline.gif';
                ?>
                <td>
                  <div class="Friend">
                    <div class="Avatar">
                      <a title="<?=$friendName?>" href="/User.aspx?ID=<?=$friendId?>" style="display:inline-block;max-height:100px;max-width:100px;cursor:pointer;">
                        <img height="100" width="100" src="/Thumbs/Avatar.ashx?assetId=<?=$friendId?>&isSmall=1" style="border-width:0px;" />
                      </a>
                    </div>
                    <div class="Summary">
                      <span class="OnlineStatus"><img src="<?=$statusIcon?>" style="border-width:0px;" /></span>
                      <span class="Name"><a href="/User.aspx?ID=<?=$friendId?>"><?=$friendName?></a></span>
                    </div>
                  </div>
                </td>
              <?php endforeach; ?>
              <?php for ($i = count($chunk); $i < 3; $i++): ?>
                <td></td>
              <?php endfor; ?>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
    <?php if ($pages > 1): ?>
      <div class="FriendPager" style="margin-top: 15px; text-align: center;">
        <?php if ($page > 1): ?>
          <a href="/Friends.aspx?UserID=<?=$userid?>&page=<?=($page - 1)?>"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a>
        <?php endif; ?>
        <span style="margin: 0 10px;">Page <?=$page?> of <?=$pages?></span>
        <?php if ($page < $pages): ?>
          <a href="/Friends.aspx?UserID=<?=$userid?>&page=<?=($page + 1)?>">Next <span class="NavigationIndicators">&gt;&gt;</span></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<div style="clear:both"></div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
