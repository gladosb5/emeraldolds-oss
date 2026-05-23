<?php
require $_SERVER["DOCUMENT_ROOT"]."/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php";
require $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

$assetId = (int)$_GET['assetId'];
$places = mysqli_query($conn, "SELECT * FROM games WHERE creator_id = {$_USER['id']} AND id = $assetId") or die(mysqli_error($conn));

$newplace = mysqli_fetch_assoc($places);

include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if($logged == "no"){
	exit('no thank u');
}

if(!isset($assetId) || empty($assetId)){
	exit("no assetid provided.");
}

require $_SERVER['DOCUMENT_ROOT']."/api/database/connect.php";


$script1 = 'game:Load("http://emeraldolds.glados.pro/asset/places/'.$newplace['secretkey'].'.rbxl")
local result = game:GetService("ThumbnailGenerator"):Click("PNG", 1920, 1080, false)
return result';
$script2 = 'game:Load("http://emeraldolds.glados.pro/asset/places/'.$newplace['secretkey'].'.rbxl")
local result = game:GetService("ThumbnailGenerator"):Click("PNG", 1280, 720, false)
return result';
$render = $RCCServiceSoap->execScript($script1, rand(1,getrandmax()), 15);
$smallrender = $RCCServiceSoap->execScript($script2, rand(1,getrandmax()), 15);

if(!empty($render) && !empty($smallrender)){
	/*$image = base64_decode($render);
	$smallimage = base64_decode($smallrender);
	
	$location = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/AvatarCache/".$assetId.".png";
	$location2 = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/AvatarCache/".$assetId."-small.png";
	
	file_put_contents($location, $image);
	file_put_contents($location2, $smallimage);
	
	*/
	
	$location = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/PlaceAssetCache/".$assetId.".png";
	$location2 = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/PlaceAssetCache/".$assetId."-small.png";
	
	$imageData = base64_decode($render);

	// Create an image resource from the binary data
	$image = imagecreatefromstring($imageData);

	// Get the original dimensions
	$originalWidth = imagesx($image);
	$originalHeight = imagesy($image);

	// Calculate the new dimensions
	$newWidth = 420;
	$newHeight = 230;

	// Create a new image resource for the resized image (with transparent background)
	$resizedImage = imagecreatetruecolor($newWidth, $newHeight);
	imagealphablending($resizedImage, false);
	imagesavealpha($resizedImage, true);
	$transparent = imagecolorallocatealpha($resizedImage, 0, 0, 0, 127);
	imagefilledrectangle($resizedImage, 0, 0, $newWidth, $newHeight, $transparent);

	// Resize the image
	imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

	// Save the resized image as base64
	ob_start();
	imagepng($resizedImage, $location);
	$resizedImageData = ob_get_clean();
	$resizedBase64String = base64_encode($resizedImageData);
	
	$imageData2 = base64_decode($smallrender);
	
	// Create an image resource from the binary data
	$smallimage = imagecreatefromstring($imageData2);

	// Get the original dimensions
	$originalWidth2 = imagesx($smallimage);
	$originalHeight2 = imagesy($smallimage);

	// Calculate the new dimensions
	$newWidth2 = 160;
	$newHeight2 = 100;

	// Create a new image resource for the resized image (with transparent background)
	$resizedImage2 = imagecreatetruecolor($newWidth2, $newHeight2);
	imagealphablending($resizedImage2, false);
	imagesavealpha($resizedImage2, true);
	$transparent2 = imagecolorallocatealpha($resizedImage2, 0, 0, 0, 127);
	imagefilledrectangle($resizedImage2, 0, 0, $newWidth2, $newHeight2, $transparent2);

	// Resize the image
	imagecopyresampled($resizedImage2, $smallimage, 0, 0, 0, 0, $newWidth2, $newHeight2, $originalWidth2, $originalHeight2);

	// Save the resized image as base64
	ob_start();
	imagepng($resizedImage2, $location2);
	$resizedImageData2 = ob_get_clean();
	$resizedBase64String2 = base64_encode($resizedImageData2);
	
	imagedestroy($smallimage);
	imagedestroy($resizedImage2);
	imagedestroy($image);
	imagedestroy($resizedImage);
	
    header("Location: /News.aspx");
}else{
	exit("Something went wrong.");
}


