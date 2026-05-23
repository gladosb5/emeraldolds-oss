<?php 

session_start();

require $_SERVER["DOCUMENT_ROOT"]."/api/database/connect.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if (!isset($_POST['placeId'])) {
    die("No gameid set.");
}

$gameid = intval($_POST['placeId']);

// if exist check
$checkGame = mysqli_query($conn, "SELECT * FROM servers WHERE game_id = '$gameid' LIMIT 1");

if (mysqli_num_rows($checkGame) == 0) {
    $insertQuery = mysqli_query($conn, "INSERT INTO servers (game_id, players) VALUES ('$gameid', 1)");

    if ($insertQuery) {
        echo "<p style="color: black;">upvoted the news!</p>";
        exit;
    } else {
        echo "<p style="color: black;">failed to upvote the news pls dont try again.</p>";
        exit;
    }
} else {
    //if exist then add 1 to the existing thingmajig or wahtever
    $updateQuery = mysqli_query($conn, "UPDATE servers SET players = players + 1 WHERE game_id = '$gameid'");

    if ($updateQuery) {
        echo "<p style="color: black;">upvoted the news!</p>";
        exit;
    } else {
        echo "<p style="color: black;">failed to upvote the news pls dont try again.</p>";
        exit;
    }
}
