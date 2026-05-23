<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

error_reporting(0);
session_start();

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}

header("Content-type: application/json");

$token = generateRandomString(30);
$placeId = (int)$_GET['id'] or header("Location: /Error.aspx");

$placeq = mysqli_query($conn,"SELECT * FROM games WHERE id = '$placeId'") or header("Location: /Error.aspx");
if(mysqli_num_rows($placeq) < 1){
	header("Location: /Error.aspx");
}
$tokenq = mysqli_query($conn,"UPDATE users SET token = '$token' WHERE id = '{$_USER['id']}'") or header("Location: /Error.aspx");
//$script = base64_encode('-script "wait(); dofile(\'http://gchblox.tk/game/join.ashx?placeId='.$placeId.'&token='.$token.'\')"');
$script = "$token;$placeId;play";
header("Location: emeraldnews:$script");
?>


