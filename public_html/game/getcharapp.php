<?php

require $_SERVER['DOCUMENT_ROOT']."/api/database/connect.php";

$assetId = (int)$_GET['assetId'];

$userq = mysqli_query($conn,"SELECT * FROM users WHERE id = '$assetId'") or mysqli_error($conn);
if(mysqli_num_rows($userq) < 1){
exit("this user doesn't exist.");	
}
$user = mysqli_fetch_assoc($userq);
$assetId = $user['id'];
$a = array();
$items = "";

$check = mysqli_query($conn,"SELECT * FROM wear WHERE userid = '$assetId'") or die(mysqli_error());

while($row = mysqli_fetch_assoc($check)) {
	
	$itemq = mysqli_query($conn,"SELECT * FROM owned_items WHERE id = {$row['item']}");
	
	if(mysqli_num_rows($itemq) < 1){
		return null;
	}
	
	$item = mysqli_fetch_assoc($itemq);
	
	$a[] = $item['itemid'];
}

echo 'http://www.emeraldolds.glados.pro/game/getbodycolors.php?id=' . $assetId . '&v='.time().';';
$lastItem = end($a);

foreach ($a as $key => $item) {
    $items .= "http://www.emeraldolds.glados.pro/asset/?id=" . $item;
    
    if ($item !== $lastItem) {
        $items .= ";";
    }
}
header("Content-type: text/plain");
echo $items;


