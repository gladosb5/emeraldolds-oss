<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Content-type: text/plain");
$key = $_GET['key'];
$padding = $_GET['padding'];
$id = $_GET['id'];
if($key == "ihatwatrabihessolazy") {
$real = mysqli_query($conn,"SELECT * FROM games WHERE id = $id");
$row = mysqli_fetch_assoc($real);
$token = $row['secretkey'];
exit(file_get_contents("http://emeraldolds.glados.pro/asset/places/$token.rbxl?padding=$padding"));

}


