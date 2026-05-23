<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the necessary files
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

// Validate and sanitize input
$pid = isset($_GET['pid']) ? (int)$_GET['pid'] : 0;

if (!$pid) {
    error_log('Invalid place ID.');
    echo 'Invalid place ID.';
    exit();
}

// Check if user is logged in
if (!isset($_USER['id'])) {
    error_log('$_USER is not set.');
    echo 'User is not logged in or not found.';
    exit();
}

// Fetch the place from the database
$places = mysqli_query($conn, "SELECT * FROM games WHERE creator_id = {$_USER['id']} AND id = $pid");
if (!$places) {
    error_log('MySQL Error: ' . mysqli_error($conn));
    echo 'An error occurred while querying the database.';
    exit();
}

// Update the place's creation date
$updateTime = mysqli_query($conn, "UPDATE games SET creation_date = NOW() WHERE creator_id = {$_USER['id']} AND id = $pid");
if (!$updateTime) {
    error_log('MySQL Error: ' . mysqli_error($conn));
    echo 'An error occurred while updating the creation date.';
    exit();
}

$newplace = mysqli_fetch_assoc($places);
if (!$newplace) {
    error_log('Place not found.');
    echo 'FRAKING STUPID IOITSd';
    exit();
}

// Process the incoming data
$robloxContents = file_get_contents('php://input');
$fix = zlib_decode($robloxContents);
if ($fix === false) {
    error_log('Failed to decode zlib data.');
    echo 'Data decoding error. Raw data: ' . htmlspecialchars(bin2hex($robloxContents));
    
    exit();
}

// Write the file to the places directory
// $fp = fopen("places/{$newplace['secretkey']}.rbxl", 'w'); // Commented out to prevent .rbxl file creation
// if ($fp === false) {
//     error_log('Failed to open file for writing.');
//     echo 'File writing error.';
//     exit();
// }
// fwrite($fp, $fix);
// fclose($fp);

// Redirect to the rendering URL
header("Location: /api/Rendering/Place.ashx?assetId={$pid}");
exit();
?>
