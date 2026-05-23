<?php

session_start();

require $_SERVER["DOCUMENT_ROOT"]."/api/database/connect.php";

$gameid = $_GET['id'];

$check = mysqli_query($conn,"SELECT * FROM servers WHERE game_id = '0' LIMIT 1");

$check2 = mysqli_query($conn,"SELECT * FROM servers WHERE game_id = $gameid LIMIT 1");

if(mysqli_num_rows($check2) != 1){

if(mysqli_num_rows($check) == 1){

    $sadjias = mysqli_fetch_array($check);

    $session = $sadjias['id'];
	
    $query = mysqli_query($conn,"UPDATE servers SET game_id = '$gameid' WHERE id = '$session'");

    if($query){
        echo "We are hosting the game for you.";
		exit;
    }else{
        echo "Cannot set variables. The game isn't playable.";
		exit;
    }

}else{
	echo "No gameservers available.";
	exit;
}
}else{
	echo "The game is already being hosted.";
	exit;
}
	


