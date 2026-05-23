<?php
//tysm - dimpersbumpers on discord for giving this public

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

$name = mysqli_real_escape_string($conn, $_GET['name']);
$description = mysqli_real_escape_string($conn, $_GET['description']);
$sale = mysqli_real_escape_string($conn, $_GET['sale']);

if($sale == "true") {
    $sale = 1;
} else {
    $sale = 0;
}

$places = mysqli_query($conn, "SELECT * FROM catalog WHERE creatorid = {$_USER['id']}") or die(mysqli_error($conn));

if($name == null) {
    $name = $name = $_USER['username'] . "s Model Number: " . (mysqli_num_rows($places) + 1);
}
$place = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, type, sale) VALUES ('$name','$description','{$_USER['id']}','model','$sale')") or die(mysqli_error($conn));

$real = mysqli_insert_id($conn);

$placeow = mysqli_query($conn, "INSERT INTO owned_items (itemid, ownerid, type) VALUES ('$real','{$_USER['id']}','model')") or die(mysqli_error($conn));

$robloxContents = file_get_contents('php://input');
$fix = zlib_decode($robloxContents);
$fp = fopen("assets/{$real}.php", 'w');
fwrite($fp, $fix);
fclose($fp);

header("Location: /api/Rendering/Asset.ashx?assetId=$real");
exit();
?>


