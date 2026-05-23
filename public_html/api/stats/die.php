<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("content-type: text/plain; charset=utf-8");

if(isset($_GET['key'])) {
    $key = $_GET['key'];
    if($key == "MugnyRailedSw0rd") {
        $killer = mysqli_real_escape_string($conn, $_GET['killer']);
        $victim = mysqli_real_escape_string($conn, $_GET['victim']);
        $getKiller = mysqli_query($conn, "SELECT * FROM users WHERE username = '$victim'");
        if($getKiller) {
            $killer = mysqli_fetch_assoc($getKiller);
            if($killer) {
                $newKnockout = $killer['Wipeouts'] + 1;
                $real = mysqli_query($conn, "UPDATE users SET Wipeouts = $newKnockout WHERE id = {$killer['id']}");
            }
        }
    } else {
        echo 'get outta here loser';
    }
} else {
    echo 'tf r u doing';
}
?>



