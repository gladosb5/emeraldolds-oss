<?php

require $_SERVER["DOCUMENT_ROOT"]."/api/database/connect.php";

$session = $_GET['sessionid'];

$check = mysqli_query($conn,"SELECT * FROM servers WHERE session = '$session'");

if(mysqli_num_rows($check) == 1){

$query = mysqli_fetch_array($check);

echo $query["game_id"];

}else{
echo "cannot find session";
}


