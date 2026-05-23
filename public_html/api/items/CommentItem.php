<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

// Verify login status properly
if($logged !== "yes"){
        die("You are not logged in!");
}

$id = (int)$_POST['item'];
$comment = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['content']));

if(strlen($comment) < 1 || strlen($comment) > 500){
	echo("Your comment is too long or too tiny. <a href='javascript:return false;' onclick='getComments(1, $id)'>Refresh Comments</a>");
	die();
}

$bypasscheck = str_replace(" ", "", $comment);

if(strlen($bypasscheck) < 1){
	echo("Your comment is too long or too tiny. <a href='javascript:return false;' onclick='getComments(1, $id)'>Refresh Comments</a>");
	die();
}

$checklatestcomment = mysqli_query($conn,"SELECT * FROM catalog_comments WHERE userid = '{$_USER['id']}' ORDER by id DESC LIMIT 1") or die(mysqli_error($conn));
if(mysqli_num_rows($checklatestcomment) == 1){
$ratelimit = mysqli_fetch_assoc($checklatestcomment);
	if(time() <= $ratelimit['timeout']){
		$ratelimited = true;
	}else{
		$ratelimited = false;
	}
}else{
	$ratelimited = false;
}

if($ratelimited){
	echo("You are being rate limited. <a href='javascript:return false;' onclick='getComments(1, $id)'>Refresh Comments</a>");
	die();
}

$time = time() + 15;
$comment = mysqli_query($conn,"INSERT INTO catalog_comments (userid,itemid,content,timeout) VALUES ('{$_USER['id']}','$id','$comment','$time')") or die(mysqli_error($conn));

exit("Success");


