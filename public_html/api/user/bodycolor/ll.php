<?php
require $_SERVER['DOCUMENT_ROOT']."/api/database/connect.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

$assetId=(int)$_GET['assetId'];
$userq=mysqli_query($conn,"SELECT * FROM users WHERE id = $assetId");
if(mysqli_num_rows($userq) < 1){
exit("this user doesn't exist.");	
}
$user = mysqli_fetch_assoc($userq);
header("Content-type: text/plain");
echo $user['LL'];


