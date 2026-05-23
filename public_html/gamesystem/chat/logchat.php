<?php
    // Set error reporting to display errors on the page
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('log_errors', 0);

    include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

    $plr = mysqli_real_escape_string($conn, $_GET['plr']);
    $sess = mysqli_real_escape_string($conn, $_GET['sessid']);
    $msg = mysqli_real_escape_string($conn, $_GET['msg']);
    
    $getSess = mysqli_query($conn, "SELECT * FROM servers WHERE session = '$sess'");
    if(mysqli_num_rows($getSess) > 0) {
        $server = mysqli_fetch_assoc($getSess);
        $addPlayer = mysqli_query($conn, "INSERT INTO chatlogs (gameid, userid, msg) VALUES ('{$server['game_id']}', '$plr', '$msg')");
        if (!$addPlayer) {
            echo "Failed to insert chat log: " . mysqli_error($conn);
        }
    } else {
        echo 'indev srry watrabi';
        exit();
    }
?>



