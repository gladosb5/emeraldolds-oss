<?php

require $_SERVER["DOCUMENT_ROOT"] . "/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if (!$logged == "yes") {
    die("You are not logged in!");
}

if (!isset($_POST['page']) || (int)$_POST['page'] < 1) {
    $page = (int)1;
} else {
    $page = (int)$_POST['page'];
}

if (!isset($_POST['type']) || (int)$_POST['type'] < 1) {
    $type = (int)1;
} else {
    $type = (int)$_POST['type'];
}

if ($type == 2) {
    $categoryName = "tshirt";
} elseif ($type == 3) {
    $categoryName = "shirt";
} elseif ($type == 4) {
    $categoryName = "pants";
} elseif ($type == 5) {
    $categoryName = "hat";
} elseif ($type == 6) {
    $categoryName = "face";
} elseif ($type == 69) {
    $categoryName = "head";
} else {
    $categoryName = "hat";
    $type = 5;
}

$resultsperpage = 8;
$check = mysqli_query($conn, "SELECT * FROM owned_items WHERE ownerid = '{$_USER['id']}' AND type = '$categoryName'");
$usercount = mysqli_num_rows($check);

$numberofpages = ceil($usercount / $resultsperpage);

$thispagefirstresult = ($page - 1) * $resultsperpage;

$check = mysqli_query($conn, "SELECT * FROM owned_items WHERE ownerid = '{$_USER['id']}' AND type = '$categoryName' ORDER BY id DESC LIMIT " . $thispagefirstresult . "," . $resultsperpage);

if ($usercount > 0) {
    while ($row = mysqli_fetch_assoc($check)) {
        $id = $row['itemid'];

        $itemq = mysqli_query($conn, "SELECT * FROM catalog WHERE id = '$id'") or die(mysqli_error($conn));
        $item = mysqli_fetch_assoc($itemq);

        $name = $ep->remove($item['name']);

        $wearid = $row['id'];
        $wearq = mysqli_query($conn, "SELECT * FROM wear WHERE item = $wearid AND userid = {$_USER['id']};") or die(mysqli_error($conn));
        if (mysqli_num_rows($wearq) == 1) {
            $weartext = '';
        } else {
            $weartext = '<div class="fixed" onclick="wear(' . $wearid . ')">[ wear ]</div>';
        }

        $creatorId = $item['creatorid'];
        $creatorQuery = mysqli_query($conn, "SELECT username FROM users WHERE id = $creatorId");
        $creatorData = mysqli_fetch_assoc($creatorQuery);
        $creatorUsername = $creatorData['username'];

        ?>
        <div class="clothe" style="font-size:10.85px; display:inline-block; *display:inline; margin:5px; display: inline-block; display: -moz-inline-stack; *display: inline; vertial-align:top; padding-bottom:15px;">
            <div id="w1326" class="imgc" style="cursor:pointer;"><img class="img" src="/Thumbs/Asset.ashx?assetId=<?= $id ?>">
                <?= $weartext ?>
            </div>
            <a class="name" href="/Item.aspx?ID=<?= $id ?>"><?= $name ?></a><br>
            <b>Creator: </b><a href="/User.aspx?ID=<?= $creatorId ?>"><?= $creatorUsername ?></a>
        </div>
        &nbsp;&nbsp;
    <?php }
} else {
    echo "No results found.";
}
?>
<div class="tablebody" style="font-size:12px; text-align: center; border-top: 1px solid black; padding: 5px 0;">
    <a onclick="getWardrobe(<?= $type ?>)">First</a>
    <a onclick="getWardrobe(<?= $type ?><?php if ($page > 1) {
        echo "," . $page - 1;
    } ?>)">Previous</a>
    <a onclick="getWardrobe(<?= $type ?><?php if ($page < $numberofpages) {
        echo "," . $page + 1;
    } ?>)">Next</a>
    <a onclick="getWardrobe(<?= $type ?>,<?= $numberofpages ?>)">Last</a>
</div>



