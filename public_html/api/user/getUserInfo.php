<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

$real = mysqli_real_escape_string($conn, $_GET['name']);

$userq = mysqli_query($conn, "SELECT * FROM users WHERE username = '$real'");
$user = mysqli_fetch_assoc($userq);

if($user) {

    $data = array(
        'id' => htmlspecialchars($user['id']),
        'username' => htmlspecialchars($user['username']),
        'blurb' => htmlspecialchars($user['blurb']),
        'robux' => htmlspecialchars($user['robux']),
        'tix' => htmlspecialchars($user['tix']),
    );
    
    $json = json_encode($data);
    
    header('Content-Type: application/json');
    
    echo $json;

}


