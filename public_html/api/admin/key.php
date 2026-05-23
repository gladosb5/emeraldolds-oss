<?php
	ob_start();
	session_start();
	include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
	include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

	if($logged == "no"){
		die("You are not logged in!");
	}
	
	if($_USER['administrator'] == "no"){
		die("You don't have permission to see this page");
	} 
	
	$key = "emeraldnewsKEY_". generateRandomString();
	$keyq = mysqli_query($conn,"INSERT INTO gamekeys (gamekeys, used) VALUES ('$key', 0)") or die(mysqli_error($conn));
	
	if($keyq){
		die($key);
	}
	
	
	
	


