<?php
//tysm - dimpersbumpers on discord for giving this public

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

$pid = (int)$_GET['pid'];

$places = mysqli_query($conn, "SELECT * FROM catalog WHERE creatorid = {$_USER['id']} AND id = $pid AND type = 'model'") or die(mysqli_error($conn));
$newplace = mysqli_fetch_assoc($places);

if(!$newplace) {
    echo 'FRAKING STUPID IOITSd <script>alert("grrr error 1");</script>';
    exit();
}

$file_path = "assets/$pid.php";
if (file_exists($file_path)) {
    unlink($file_path);
} else {
    echo "wtf.";
    exit();
}
$robloxContents = file_get_contents('php://input');
$fix = zlib_decode($robloxContents);
$fp = fopen("assets/$pid.php", 'w');
fwrite($fp, $fix);
fclose($fp);

header("Location: /api/Rendering/Asset.ashx?assetId={$pid}");
exit();
?>


