<?php
// Suppress error reporting
error_reporting(0);

// Set the header to indicate the content type is plain text
header('Content-Type: text/plain');

// Retrieve and validate parameters
$assetId = isset($_GET['assetId']) ? (int)$_GET['assetId'] : null;
$isSmall = isset($_GET['isSmall']) ? (int)$_GET['isSmall'] : 0;
$isSquare = isset($_GET['isSquare']) ? (int)$_GET['isSquare'] : 0;

// Set default image paths
$defaultImage = $_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AvatarCache/Default.png";
$defaultSmallImage = $_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AvatarCache/Default-small.png";

// Determine the image path based on the parameters
if (!isset($assetId) || empty($assetId)) {
    $imagePath = $defaultImage;
} else {
    $imagePath = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/AvatarCache/" . $assetId . ".png";
    $smallImagePath = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/AvatarCache/" . $assetId . "-small.png";
    $squareImagePath = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/AvatarCache/" . $assetId . "-square.png";

    if ($isSquare == 1) {
        $imagePath = file_exists($squareImagePath) ? $squareImagePath : $defaultImage;
    } elseif ($isSmall == 1) {
        $imagePath = file_exists($smallImagePath) ? $smallImagePath : $defaultSmallImage;
    } elseif (!file_exists($imagePath)) {
        $imagePath = $defaultImage;
    }
}

// Read the image data
$imageData = file_get_contents($imagePath);

// Encode the image data as base64
$base64 = 'data:image/png;base64,' . base64_encode($imageData);

// Output the base64 encoded image data
echo $base64;
?>
