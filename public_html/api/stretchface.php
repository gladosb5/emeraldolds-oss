<?php
$id = (int)$_GET['id'];
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

$imageUrl = "http://emeraldolds.glados.pro/asset/?id=$id";

list($width, $height) = getimagesize($imageUrl);

$newWidth = 170;
$newHeight = 70;

$resizedImage = imagecreatetruecolor($newWidth, $newHeight);

$sourceImage = imagecreatefrompng($imageUrl);

imagealphablending($resizedImage, false);
imagesavealpha($resizedImage, true);
$transparent = imagecolorallocatealpha($resizedImage, 255, 255, 255, 127);
imagefilledrectangle($resizedImage, 0, 0, $newWidth, $newHeight, $transparent);

imagecopyresampled($resizedImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

$newImage = imagecreatetruecolor(128, 128);

imagealphablending($newImage, false);
imagesavealpha($newImage, true);
$transparent = imagecolorallocatealpha($newImage, 255, 255, 255, 127);
imagefilledrectangle($newImage, 0, 0, 128, 128, $transparent);

imagecopy($newImage, $resizedImage, -22, 24, 0, 0, $newWidth, $newHeight);

header('Content-Type: image/png');
imagepng($newImage);

imagedestroy($resizedImage);
imagedestroy($sourceImage);
imagedestroy($newImage);
?>



