<?php

require $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if(!$logged == "yes"){
	die("You are not logged in!");
}

$getItems = mysqli_query($conn,"SELECT * FROM wear WHERE userid = {$_USER['id']}");
if(mysqli_num_rows($getItems) <= 0) {
    echo '<p class="nocl">You are not wearing any items from your wardrobe.<p>';
} else {
while($row = mysqli_fetch_assoc($getItems)) {
    $getOwnedItem = mysqli_query($conn, "SELECT * FROM owned_items WHERE id = {$row['item']}");
    $item = mysqli_fetch_assoc($getOwnedItem);
    $getOwnedCatalogItem = mysqli_query($conn, "SELECT * FROM catalog WHERE id = {$item['itemid']}");
    $item2 = mysqli_fetch_assoc($getOwnedCatalogItem);
    $getCreator = mysqli_query($conn, "SELECT * FROM users WHERE id = {$item2['creatorid']}");
    $creator = mysqli_fetch_assoc($getCreator);
    
    $id = $ep->remove($item['itemid']);
    $id2 = $ep->remove($row['item']);
    $type = $ep->remove($item2['type']);
    $name = $ep->remove($item2['name']);
    $creatorname = $ep->remove($creator['username']);
    $creatorid = $ep->remove($creator['id']);
    if($type == "tshirt") {
            $type = "T-Shirt";
        }
       elseif($type == "hat") {
            $type = "Hat";
       }
            elseif($type == "face") {
            $type = "Face";
            }
            elseif($type == "shirt") {
            $type = "Shirt";
            }
            elseif($type == "head") {
            $type = "Head";
            }
            elseif($type == "pants") {
            $type = "Pants";
            }
    
    echo '<div class="clothe" style="font-size:10.85px; display:inline-block; *display:inline; margin:5px; display: inline-block; display: -moz-inline-stack; *display: inline; vertial-align:top;">
				<div id="w1204" class="imgc" style="cursor:pointer;"><img class="img" src="/Thumbs/Asset.ashx?assetId='.$id.'">
					<div class="fixed" onclick="unwear('.$id2.')">[ remove ]</div>
				</div>
				<a class="name" href="https://emeraldolds.glados.pro/Item.aspx?ID='.$id.'">'.$name.'</a><br>
				Type: '.$type.'<br>
				Creator: <a href="https://emeraldolds.glados.pro/User.aspx?ID='.$creatorid.'">'.$creatorname.'</a>
			</div>' . '
			&nbsp;&nbsp;';
}
}


