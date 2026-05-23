<?php
// Set the content type to PNG
error_reporting(0);
header('Content-Type: image/png');
$assetId = (int)$_GET['assetId'];
$isSmall = (int)$_GET['isSmall'];

if(!isset($assetId) || empty($assetId)){
	exit("no assetid provided.");
}
	

if(!isset($isSmall) || empty($isSmall)){
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/Thumbs/AdCache/".$assetId.".png")){
		readfile($_SERVER['DOCUMENT_ROOT']."/Thumbs/AdCache/".$assetId.".png");
	}else{
		readfile($_SERVER['DOCUMENT_ROOT']."/Thumbs/AdCache/Default.png");
	}
}else{
	if(file_exists($_SERVER["DOCUMENT_ROOT"]."/Thumbs/AdCache/".$assetId."-small.png")){
		readfile($_SERVER['DOCUMENT_ROOT']."/Thumbs/AdCache/".$assetId."-small.png");
	}else{
		readfile($_SERVER['DOCUMENT_ROOT']."/Thumbs/AdCache/Default-small.png");
	}
}
?>
