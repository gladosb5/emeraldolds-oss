<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

$uid = filter_input(INPUT_POST, 'uid', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?? 0;
$page = filter_input(INPUT_POST, 'page', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?? 1;
$type = filter_input(INPUT_POST, 'type', FILTER_VALIDATE_INT) ?? 0;

if ($uid < 1) {
    exit;
}

$limit = 6;
$page = max(1, $page);
$offset = ($page - 1) * $limit;

try {
    $userRow = $db->selectOne('SELECT username FROM users WHERE id = ? LIMIT 1', 'i', [$uid]);
    $targetUsername = $userRow['username'] ?? 'This user';
} catch (Throwable $e) {
    error_log('[FAVOURITES_USER] ' . $e->getMessage());
    $targetUsername = 'This user';
}

try {
    if ($type === 0) {
        $countRow = $db->selectOne(
            'SELECT COUNT(*) AS total FROM games_favorites WHERE userid = ?',
            'i',
            [$uid],
            ['total' => 'int']
        );
    } else {
        $countRow = $db->selectOne(
            'SELECT COUNT(*) AS total FROM catalog_favorites WHERE userid = ? AND type = ?',
            'ii',
            [$uid, $type],
            ['total' => 'int']
        );
    }
    $totalFavorites = (int)($countRow['total'] ?? 0);
} catch (Throwable $e) {
    error_log('[FAVOURITES_COUNT] ' . $e->getMessage());
    $totalFavorites = 0;
}

if ($totalFavorites === 0) {
    echo '<div id="ctl00_cphRoblox_rbxFavoritesPane_NoResultsPanel" class="NoResults">';
    echo '<span id="ctl00_cphRoblox_rbxFavoritesPane_NoResultsLabel" class="NoResults">' . htmlspecialchars($targetUsername, ENT_QUOTES, 'UTF-8') . " doesnt have any news favourited.</span>";
    echo '</div>';
    exit;
}

$numberOfPages = max(1, (int)ceil($totalFavorites / $limit));
if ($page > $numberOfPages) {
    $page = $numberOfPages;
    $offset = ($page - 1) * $limit;
}

try {
    if ($type === 0) {
        $favorites = $db->select(
            'SELECT gf.game AS item_id, g.name, g.creator_id, u.username AS creator_name
             FROM games_favorites gf
             INNER JOIN games g ON g.id = gf.game
             INNER JOIN users u ON u.id = g.creator_id
             WHERE gf.userid = ?
             ORDER BY gf.id DESC
             LIMIT ?
             OFFSET ?',
            'iii',
            [$uid, $limit, $offset],
            [
                'item_id' => 'int',
                'creator_id' => 'int',
            ]
        );
    } else {
        $favorites = $db->select(
            'SELECT cf.item AS item_id, c.name, c.creatorid AS creator_id, u.username AS creator_name
             FROM catalog_favorites cf
             INNER JOIN catalog c ON c.id = cf.item
             INNER JOIN users u ON u.id = c.creatorid
             WHERE cf.userid = ? AND cf.type = ?
             ORDER BY cf.id DESC
             LIMIT ?
             OFFSET ?',
            'iiii',
            [$uid, $type, $limit, $offset],
            [
                'item_id' => 'int',
                'creator_id' => 'int',
            ]
        );
    }
} catch (Throwable $e) {
    error_log('[FAVOURITES_LIST] ' . $e->getMessage());
    $favorites = [];
}

if (empty($favorites)) {
    echo '<script>getFavs(' . (int)$type . ', ' . max(1, $page - 1) . ', event);</script>';
    exit;
}

$baseLink = $type === 0 ? '/PlaceItem.aspx?ID=' : '/Item.aspx?ID=';
$thumbBase = $type === 0 ? '/Thumbs/PlaceAsset.ashx?assetId=' : '/Thumbs/Asset.ashx?assetId=';
$safePage = (int)$page;

$renderPager = function (int $currentPage, int $pagesTotal, int $favType, bool $top = true): void {
    if ($pagesTotal < 2) {
        return;
    }

    echo $top ? '<div class="FooterPager">' : '<div class="HeaderPager">';

    if ($currentPage > 1) {
        $prev = $currentPage - 1;
        echo '<a href="#" onclick="getFavs(' . $favType . ', ' . $prev . ', event)"><span class="NavigationIndicators">&lt;&lt;</span>Previous</a>';
    }

    echo '<span>Page ' . $currentPage . ' of ' . $pagesTotal . ': </span>';

    if ($currentPage < $pagesTotal) {
        $next = $currentPage + 1;
        echo '<a href="#" onclick="getFavs(' . $favType . ', ' . $next . ', event)">Next <span class="NavigationIndicators">&gt;&gt;</span></a>';
    }

    echo '</div>';
};

$renderPager($safePage, $numberOfPages, (int)$type, true);

echo '<table cellspacing="0" border="0" style="margin:auto;">';
echo '<tbody><tr>';

$counter = 0;
foreach ($favorites as $favorite) {
    $itemId = (int)($favorite['item_id'] ?? 0);
    $name = htmlspecialchars($favorite['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $creatorId = (int)($favorite['creator_id'] ?? 0);
    $creatorName = htmlspecialchars($favorite['creator_name'] ?? '', ENT_QUOTES, 'UTF-8');

    echo '<td class="Asset" valign="top">';
    echo '<div style="padding:5px">';
    echo '<div class="AssetThumbnail" style="position: relative;">';
    if (isset($_USER['id']) && (int)$_USER['id'] === $uid && $type === 0) {
        echo '<a onclick="deleteGame(' . $itemId . ')" id="deleteFavorite">[ delete ]</a>';
    }
    echo '<a title="' . $name . '" href="' . $baseLink . $itemId . '" style="display:inline-block;cursor:pointer;">';
    echo '<img src="' . $thumbBase . $itemId . '&amp;isSmall=1" width="110" height="110" border="0" alt="' . $name . '">';
    echo '</a>';
    echo '</div>';
    echo '<div class="AssetDetails">';
    echo '<div class="AssetName"><a href="' . $baseLink . $itemId . '">' . $name . '</a></div>';
    echo '<div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a href="User.aspx?ID=' . $creatorId . '">' . $creatorName . '</a></span></div>';
    echo '</div>';
    echo '</div>';
    echo '</td>';

    $counter++;
    if ($counter === 3) {
        echo '</tr><tr>';
        $counter = 0;
    }
}

if ($counter !== 0) {
    while ($counter < 3) {
        echo '<td></td>';
        $counter++;
    }
}

echo '</tr></tbody></table>';

$renderPager($safePage, $numberOfPages, (int)$type, false);
?>
<script>
    function deleteGame(id) {
        fetch(`/api/Favorites/deleteGame.php?id=${id}&type=<?=$type;?>`, {
            method: 'POST',
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('just doesnt like you ig');
            }
            getFavs(<?=(int)$type;?>, <?=$safePage;?>, event);
        })
        .catch(error => {
            console.error('grrr ', error);
        });
    }
</script>
