<?php
include $_SERVER['DOCUMENT_ROOT'] . '/api/includes.php';

if ($logged === 'no') {
    header('Location: /Login/Default.aspx');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /games/create_basic.php');
    exit();
}

$title = trim($_POST['name'] ?? '');
$description = trim($_POST['description'] ?? '');
$thumbnail = (int)($_POST['thumbnail'] ?? 0);

if ($title === '') {
    echo 'Missing title.';
    exit();
}

if ($thumbnail !== 0 && $thumbnail !== 1 && $thumbnail !== 2) {
    echo 'Invalid thumbnail.';
    exit();
}

$safeTitle = mysqli_real_escape_string($conn, $title);
$safeDescription = mysqli_real_escape_string($conn, $description);
$token = generateRandomString(128);
$userId = (int)$_USER['id'];

$insert = mysqli_query(
    $conn,
    "INSERT INTO games (name, description, creator_id, secretkey) VALUES ('$safeTitle', '$safeDescription', $userId, '$token')"
);

if (!$insert) {
    echo 'Failed to create news.';
    exit();
}

$newsId = mysqli_insert_id($conn);

if ($thumbnail === 0) {
    $sourceBig = $_SERVER['DOCUMENT_ROOT'] . '/images/HappyHomeBig.png';
    $sourceSmall = $_SERVER['DOCUMENT_ROOT'] . '/images/HappyHomeSmall.png';
} elseif ($thumbnail === 1) {
    $sourceBig = $_SERVER['DOCUMENT_ROOT'] . '/images/BrickBattleBigNew.png';
    $sourceSmall = $_SERVER['DOCUMENT_ROOT'] . '/images/BrickBattleSmall.png';
} else {
    $sourceBig = $_SERVER['DOCUMENT_ROOT'] . '/images/EmptyBaseBig.png';
    $sourceSmall = $_SERVER['DOCUMENT_ROOT'] . '/images/BaseplateSmall.png';
}

$destBig = $_SERVER['DOCUMENT_ROOT'] . '/Thumbs/PlaceAssetCache/' . $newsId . '.png';
$destSmall = $_SERVER['DOCUMENT_ROOT'] . '/Thumbs/PlaceAssetCache/' . $newsId . '-small.png';

if (!copy($sourceBig, $destBig)) {
    echo 'Failed to copy big thumbnail.';
    exit();
}

if (!copy($sourceSmall, $destSmall)) {
    echo 'Failed to copy small thumbnail.';
    exit();
}

header('Location: /my/Place.aspx?ID=' . $newsId);
exit();
