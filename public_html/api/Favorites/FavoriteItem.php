<?php

require $_SERVER['DOCUMENT_ROOT']."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if(isset($_GET['id'])) {
    $real = mysqli_real_escape_string($conn, $_GET['id']);
    $look = mysqli_query($conn, "SELECT * FROM catalog_favorites WHERE userid = {$_USER['id']} AND item = '$real'");
    
    if(mysqli_num_rows($look) == 0) {
        $checkCatalog = mysqli_query($conn, "SELECT * FROM catalog WHERE id = '$real'");
        $item = mysqli_fetch_assoc($checkCatalog);
        if($item) {
            $type = $item['type'];
            $type2 = 10;
            if($type == "hat") {
                $type2 = 10;
            } elseif($type == "decals") {
                $type2 = 14;
            } elseif($type == "head") {
                $type2 = 69;
            } elseif($type == "face") {
                $type2 = 5;
            } elseif($type == "shirt") {
                $type2 = 8;
            } elseif($type == "pants") {
				$type2 = 9;
			} elseif($type == "tshirt") {
				$type2 = 7;
			} elseif($type == "model") {
				$type2 = 11;
			} else {
			    exit();
			}
            mysqli_query($conn, "INSERT INTO catalog_favorites (userid, item, type) VALUES ('{$_USER['id']}', '$real', $type2)");
        }
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}


