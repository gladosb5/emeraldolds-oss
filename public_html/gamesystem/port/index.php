<?php

require $_SERVER["DOCUMENT_ROOT"]."/api/database/connect.php";

$session = $_GET['sessid'];

$port = $_GET['port'];

$check = mysqli_query($conn,"SELECT * FROM servers WHERE session = '$session'");

if(mysqli_num_rows($check) == 1){

$query = mysqli_query($conn,"UPDATE servers SET port = '$port' WHERE session = '$session'");

if($query){
echo $port;
}

}else{
echo "cannot find this session";
}


