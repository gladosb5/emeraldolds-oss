<?php

require $_SERVER['DOCUMENT_ROOT']."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if(isset($_GET['id'])) {
    $real = mysqli_real_escape_string($conn, $_GET['id']);
    $look = mysqli_query($conn, "SELECT * FROM games_favorites WHERE userid = {$_USER['id']} AND game = '$real'");
    
    if(mysqli_num_rows($look) == 0) {
        mysqli_query($conn, "INSERT INTO games_favorites (userid, game) VALUES ('{$_USER['id']}', '$real')");
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}



