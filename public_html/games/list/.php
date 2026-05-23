<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
$id = isset($_GET['ID']) ? (int)$_GET['ID'] : 0;
$imageUrl = 'https://emeraldolds.glados.pro/api/Rendering/Avatar.ashx?assetId=' . $_USER['id'];
$base64Image = file_get_contents($imageUrl);

// Check if the image was successfully fetched
if ($base64Image === FALSE) {
    // Handle the error
    echo "Failed to fetch the image.";
    $base64Image = ''; // Ensure $base64Image is defined
}
?>
<title>glados - mobile</title>
<h1>whatsup 
<img src="<?= $base64Image ?>"></img>