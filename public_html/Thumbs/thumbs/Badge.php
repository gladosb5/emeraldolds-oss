<?php
error_reporting(0);
header('Content-Type: image/png');
$assetId = (int)$_GET['assetId'];

if(!isset($assetId) || empty($assetId)){
	readfile($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/Default.png");
}

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/Thumbs/BadgeCache/".$assetId.".jpg")){
	readfile($_SERVER['DOCUMENT_ROOT']."/Thumbs/BadgeCache/".$assetId.".jpg");
} else{
	readfile($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/Default.png");
}