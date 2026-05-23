<?php
    include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

    $plr = mysqli_real_escape_string($conn, $_GET['plr']);
    $sess = mysqli_real_escape_string($conn, $_GET['sessid']);
    
    $getSess = mysqli_query($conn, "SELECT * FROM servers WHERE session = '$sess'");
    if(mysqli_num_rows($getSess) > 0) {
        $server = mysqli_fetch_assoc($getSess);
        $removePlayer = mysqli_query($conn, "DELETE FROM playing WHERE sessid = $sess AND userid = $plr");
    } else {
        echo 'indev srry watrabi';
        exit();
    }
?>


