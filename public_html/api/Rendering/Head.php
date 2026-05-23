<?php
require $_SERVER["DOCUMENT_ROOT"]."/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if($logged == "no"){
	exit('no thank u');
}

$assetId = (int)$_GET['assetId'];

if(!isset($assetId) || empty($assetId)){
	exit("no assetid provided.");
}

if($_USER['administrator'] == "no") {
    exit("bitch");
}

$userq = mysqli_query($conn,"SELECT * FROM catalog WHERE id = '$assetId'") or die(mysqli_error($conn));
if(mysqli_num_rows($userq) == 1){
$user = mysqli_fetch_assoc($userq);
}else{
	die("invalid assetId");
}


if($user['type'] == "head"){
$script1 = '
local heaa = game:GetObjects("http://emeraldolds.glados.pro/asset/?id=1392&amp;a='.rand(1,getrandmax()).'")
heaa[1].Parent = workspace
heaa[2].Parent = workspace
local head = heaa[1]
local item = game:GetObjects("http://emeraldolds.glados.pro/asset/?id='.($assetId - 2).'&amp;a='.rand(1,getrandmax()).'")
item[1].Parent = head
local face = heaa[2]
local item2 = game:GetObjects("http://emeraldolds.glados.pro/asset/?id='.($assetId - 1).'&amp;a='.rand(1,getrandmax()).'")
item2[1].Parent = face
item2[1].Scale = Vector3.new(1.05,1.05,1.05,1.05)
item2[1].TextureId = "http://emeraldolds.glados.pro/asset/?id=1185"
local result = game:GetService("ThumbnailGenerator"):Click("PNG", 500, 500, true)
return result';
$script2 = '
local heaa = game:GetObjects("http://emeraldolds.glados.pro/asset/?id=1392&amp;a='.rand(1,getrandmax()).'")
heaa[1].Parent = workspace
heaa[2].Parent = workspace
local head = heaa[1]
local item = game:GetObjects("http://emeraldolds.glados.pro/asset/?id='.($assetId - 2).'&amp;a='.rand(1,getrandmax()).'")
item[1].Parent = head
local face = heaa[2]
local item2 = game:GetObjects("http://emeraldolds.glados.pro/asset/?id='.($assetId - 1).'&amp;a='.rand(1,getrandmax()).'")
item2[1].Parent = face
item2[1].Scale = Vector3.new(1.05,1.05,1.05,1.05)
item2[1].TextureId = "http://emeraldolds.glados.pro/asset/?id=1185"
local result = game:GetService("ThumbnailGenerator"):Click("PNG", 500, 500, true)
return result';
$render = $RCCServiceSoap->execScript($script1, rand(1,getrandmax()), 15);
$smallrender = $RCCServiceSoap->execScript($script2, rand(1,getrandmax()), 15);
$redirect = "/Admin/UploadHat.aspx";
}elseif($user['type'] == "shirt" or $user['type'] == "pants"){
$script1 = 'game:GetService("ScriptContext").ScriptsDisabled = true

local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()

local item = game:GetObjects("http://emeraldolds.glados.pro/asset/?id='.$assetId.'&amp;a='.rand(1,getrandmax()).'")
item[1].Parent = plr.Character
local result = game:GetService("ThumbnailGenerator"):Click("PNG", 500, 500, true)
return result';
$script2 = 'game:GetService("ScriptContext").ScriptsDisabled = true

local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()

local item = game:GetObjects("http://emeraldolds.glados.pro/asset/?id='.$assetId.'&amp;a='.rand(1,getrandmax()).'")
item[1].Parent = plr.Character
local result = game:GetService("ThumbnailGenerator"):Click("PNG", 500, 500, true)
return result';
$render = $RCCServiceSoap->execScript($script1, rand(1,getrandmax()), 15);
$smallrender = $RCCServiceSoap->execScript($script2, rand(1,getrandmax()), 15);	
$redirect = "/Admin/UploadClothing.aspx";
} elseif ($user['type'] == "tshirt") {
    // Define the directory to save the images
    $saveDirectory = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/AssetCache/";

    // Download tshirt image from URL
    $tshirtImageUrl = "http://emeraldolds.glados.pro/asset/?id=" . ($assetId - 1);
    $tshirtImageData = file_get_contents($tshirtImageUrl);

    if ($tshirtImageData !== false) {
        // Save the downloaded tshirt image
        file_put_contents($saveDirectory . $assetId . "-tshirt.png", $tshirtImageData);

        // Large version
        $tshirtTemplate = imagecreatefrompng($_SERVER["DOCUMENT_ROOT"] . "/images/tshirt.png");
        $tshirtImage = imagecreatefromstring($tshirtImageData);

        // Resize tshirt image to fit on template
        $desiredSize = 128; // Desired size for the square image
        $tshirtImageResized = imagescale($tshirtImage, $desiredSize, $desiredSize);

        // Calculate positions for overlaying tshirt image on template
        $xPosition = 60;
        $yPosition = 45;

        // Overlay tshirt image onto template with preserving alpha channel
        imagealphablending($tshirtTemplate, true);
        imagesavealpha($tshirtTemplate, true);
        imagecopy($tshirtTemplate, $tshirtImageResized, $xPosition, $yPosition, 0, 0, imagesx($tshirtImageResized), imagesy($tshirtImageResized));

        // Save large version
        imagepng($tshirtTemplate, $saveDirectory . $assetId . ".png");

        // Free memory
        imagedestroy($tshirtTemplate);
        imagedestroy($tshirtImage);
        imagedestroy($tshirtImageResized);

        // Small version
        // Create smaller version (half size) of the large version
        $smallTshirtTemplate = imagecreatetruecolor(imagesx($tshirtTemplate) / 2, imagesy($tshirtTemplate) / 2);
        imagealphablending($smallTshirtTemplate, false);
        imagesavealpha($smallTshirtTemplate, true);
        $transparent = imagecolorallocatealpha($smallTshirtTemplate, 0, 0, 0, 127);
        imagefill($smallTshirtTemplate, 0, 0, $transparent);
        imagecopyresampled($smallTshirtTemplate, $tshirtTemplate, 0, 0, 0, 0, imagesx($tshirtTemplate) / 2, imagesy($tshirtTemplate) / 2, imagesx($tshirtTemplate), imagesy($tshirtTemplate));

        // Save small version
        imagepng($smallTshirtTemplate, $saveDirectory . $assetId . "-small.png");

        // Free memory
        imagedestroy($smallTshirtTemplate);

        echo "Tshirt images processed successfully.";
        header("Location: $redirect");
    } else {
        echo "Failed to download the tshirt image from the URL.";
    }
} else {
    die("invalid type");
}

if(!empty($render) && !empty($smallrender)){
	/*$image = base64_decode($render);
	$smallimage = base64_decode($smallrender);
	
	$location = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/AvatarCache/".$assetId.".png";
	$location2 = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/AvatarCache/".$assetId."-small.png";
	
	file_put_contents($location, $image);
	file_put_contents($location2, $smallimage);
	
	*/
	
	$location = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/AssetCache/".$assetId.".png";
	$location2 = $_SERVER["DOCUMENT_ROOT"]."/Thumbs/AssetCache/".$assetId."-small.png";
	
	$imageData = base64_decode($render);

	// Create an image resource from the binary data
	$image = imagecreatefromstring($imageData);

	// Get the original dimensions
	$originalWidth = imagesx($image);
	$originalHeight = imagesy($image);

	// Calculate the new dimensions
	$newWidth = 250;
	$newHeight = 250;

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
	$newWidth2 = 120;
	$newHeight2 = 120;

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
	
	header("Location: $redirect");
}else{
	exit("Something went wrong.");
}


