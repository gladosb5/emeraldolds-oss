<?php

session_start();

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

if(!$logged == "yes"){
		header("Location: /Login/Default.aspx");
	}

$myid = $_USER['id'];
		$banq = mysqli_query($conn,"SELECT * FROM bans WHERE userid = $myid") or die(mysqli_error($conn));
		if(mysqli_num_rows($banq) == 1){
			$banrow = mysqli_fetch_assoc($banq);
			
			
			
			if($banrow['time'] <= time() || $banrow['type'] == '0'){
				$unbanq = mysqli_query($conn,"DELETE FROM bans WHERE userid = $myid") or die(mysqli_error($conn));
				header("Location: /Default.aspx");
			}else{
				header("Location: /Error.aspx");
			}
		}else{
			header("Location: /Error.aspx");
		}
		

?>


