<?php

require $_SERVER["DOCUMENT_ROOT"]."/api/database/connect.php";

$session = rand(10000,10000000);

$query = mysqli_query($conn,"INSERT INTO servers (session,port,game_id) VALUES ('$session',0,0)");

if($query){
echo $session;
}


