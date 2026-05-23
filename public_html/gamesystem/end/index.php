<?php

require $_SERVER["DOCUMENT_ROOT"]."/api/database/connect.php";

$session = $_GET['sessid'];

$check = mysqli_query($conn,"SELECT * FROM servers WHERE session = '$session'");

if(mysqli_num_rows($check) == 1){

$query = mysqli_query($conn,"UPDATE servers SET game_id = '0' WHERE session = '$session'");
$removePlayer = mysqli_query($conn, "DELETE FROM playing WHERE sessid = $session");

if($query){
echo "done";
}

}else{
echo "cannot find session";
}


