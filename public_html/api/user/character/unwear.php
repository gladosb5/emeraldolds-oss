<?php

header("Content-type:text/plain");

require $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if(!$logged == "yes"){
	die("You are not logged in!");
}


$itemid = (int)$_POST['oid'];

$checkownedq = mysqli_query($conn,"SELECT * FROM owned_items WHERE id = '$itemid' AND ownerid = '{$_USER['id']}'") or die(mysqli_error($conn));

if(mysqli_num_rows($checkownedq) < 1){
	die("You don't own this item.");
}

$owned = mysqli_fetch_assoc($checkownedq);

$checkwearq = mysqli_query($conn,"SELECT * FROM wear WHERE item = '{$owned['id']}' AND userid = '{$_USER['id']}'") or die(mysqli_error($conn));

if(mysqli_num_rows($checkwearq) < 1){
	die("You already not wearing this item.");
}

$wearq = mysqli_query($conn,"DELETE FROM wear WHERE item = '{$owned['id']}' AND userid = '{$_USER['id']}'") or die(mysqli_error($conn));

die("Success");


