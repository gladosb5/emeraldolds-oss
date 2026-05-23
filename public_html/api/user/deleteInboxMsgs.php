<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

session_start();

if(!$logged == "yes"){
	exit("You are not logged in.");
}

if(isset($_POST['delMsgs'])) {
    $selected = json_decode($_POST['delMsgs']);

    if($selected) {
        foreach($selected as $id) {
			
			$checkq = mysqli_query($conn,"SELECT * FROM messages WHERE user_to = '{$_USER['id']}' AND id = '$id'") or mysqli_error($query);
			
			if(mysqli_num_rows($checkq) > 0){
			
				$deletemsgsq = mysqli_query($conn,"UPDATE messages SET deleted = '1' WHERE id = '$id'") or mysqli_error($query);
			
			}else{
				exit("This message not yours.");
			}
        }
		exit("success");
    }else{
		exit("no post");
	}
}else{
	exit("no post");
}


