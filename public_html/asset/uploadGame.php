<?php
//tysm - dimpersbumpers on discord for giving this public

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

$places = mysqli_query($conn, "SELECT * FROM games WHERE creator_id = {$_USER['id']}") or die(mysqli_error($conn));



$name = $_USER['username'] . "s Place Number: " . (mysqli_num_rows($places) + 1);

$place = mysqli_query($conn, "INSERT INTO games (name, description, creator_id) VALUES ('$name','hi guys','{$_USER['id']}')") or die(mysqli_error($conn));

$real = mysqli_insert_id($conn);

$robloxContents = file_get_contents('php://input');
$fix = zlib_decode($robloxContents);
// $fp = fopen("places/{$real}.rbxl", 'w'); // Commented out to prevent .rbxl file creation
// fwrite($fp, $fix);
// fclose($fp);

header("Location: /api/Rendering/Place.ashx?assetId=$real");
exit();
?>


