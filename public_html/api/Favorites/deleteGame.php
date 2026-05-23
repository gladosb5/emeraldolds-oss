<?php

require $_SERVER['DOCUMENT_ROOT']."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if(isset($_GET['id'])) {
    $real = mysqli_real_escape_string($conn, $_GET['id']);
    $type = mysqli_real_escape_string($conn, $_GET['type']);
    if($type == 0) {mysqli_query($conn, "DELETE FROM games_favorites WHERE game = $real AND userid = {$_USER['id']}");}
    else {mysqli_query($conn, "DELETE FROM catalog_favorites WHERE item = $real AND userid = {$_USER['id']}");}
} else {
    echo 'tf';
}



