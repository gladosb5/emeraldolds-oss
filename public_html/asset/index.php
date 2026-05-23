<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
/*
header("Content-type: text/plain");
$id = (int)$_GET["id"];
if(file_exists(__DIR__."/assets/".$id.".php")) {
  // file exists REAL
  echo file_get_contents(__DIR__."/assets/".$id.".php");
} else {
  $a = curl_init('https://assetdelivery.roblox.com/v1/asset/?id=$id&version=1');
  curl_setopt($a, CURLOPT_RETURNTRANSFER, true);
  $result = str_replace('roblox.com','golder.xyz',curl_exec($a));
  //die(base64_decode($result));
  echo $result;
  file_put_contents(__DIR__."/assets/".$id.".php", $result);
  exit;
}*/

header("Content-type: application/x-www-url-encoded");
$id = (int)$_GET["id"];
$assetcheckq = mysqli_query($conn,"SELECT * FROM catalog WHERE id = $id") or die(mysqli_error($conn));
if(mysqli_num_rows($assetcheckq) == 1){
	$asset = mysqli_fetch_assoc($assetcheckq);
	if($logged == "yes"){
	    if($asset['pending'] == 1 && $_USER['administrator'] == "no"){
    		header("Content-type: application/json");
    	
    		// {"errors":[{"code":0,"message":"Request asset was not found"}]}
    		$error = [
    		"errors" => [
    		"code" => 0,
    		"message" => "You don't have permission to access this asset.",
    		]
    		];
    		
    		echo json_encode($error);
    	}else{
    		if(file_exists(__DIR__."/assets/".$id.".php")) {
    			echo str_replace("gchblox.tk", "emeraldolds.glados.pro", file_get_contents(__DIR__."/assets/".$id.".php"));
    			exit;
    		}else{
    			header("Content-type: application/json");
    			// {"errors":[{"code":0,"message":"Request asset was not found"}]}
    			$error = [
    			"errors" => [
    			"code" => 0,
    			"message" => "Request asset was found, but we couldn't find the asset file.",
    			]
    			];
    			
    			echo json_encode($error);
    		}
    	}
	}else{
	    if($asset['pending'] == 1){
    		header("Content-type: application/json");
    	
    		// {"errors":[{"code":0,"message":"Request asset was not found"}]}
    		$error = [
    		"errors" => [
    		"code" => 0,
    		"message" => "You don't have permission to access this asset.",
    		]
    		];
    		
    		echo json_encode($error);
    	}else{
    		if(file_exists(__DIR__."/assets/".$id.".php")) {
    			echo str_replace("gchblox.tk", "emeraldolds.glados.pro", file_get_contents(__DIR__."/assets/".$id.".php"));
    			exit;
    		}else{
    			header("Content-type: application/json");
    			// {"errors":[{"code":0,"message":"Request asset was not found"}]}
    			$error = [
    			"errors" => [
    			"code" => 0,
    			"message" => "Request asset was found, but we couldn't find the asset file.",
    			]
    			];
    			
    			echo json_encode($error);
    		}
    	}
	}
}else{
	header("Content-type: application/json");
	
	// {"errors":[{"code":0,"message":"Request asset was not found"}]}
	$error = [
	"errors" => [
	"code" => 0,
	"message" => "Request asset was not found",
	]
	];
	
	echo json_encode($error);
}


