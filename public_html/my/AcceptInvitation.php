<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}

$id = (int)$_GET['ID'] ?? header("Location: /");

$checkq = mysqli_query($conn,"SELECT * FROM friends WHERE user_from = '$id' AND user_to = '{$_USER['id']}' AND arefriends = '0'") or mysqli_error($conn);

if(mysqli_num_rows($checkq) == 0){
	?> <div id="Body">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center">An Error occured! We're sorry.</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
				</div> <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
				die();
}

$friendq = mysqli_query($conn,"UPDATE friends SET arefriends = 1 WHERE user_from = '$id' AND user_to = '{$_USER['id']}' AND arefriends = '0'") or mysqli_error($conn);
$userq = mysqli_query($conn,"SELECT username,id FROM users WHERE id = $id") or die(mysqli_error($conn));
$friendnew = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = $id AND `arefriends`='1') OR (`user_to` = $id AND `arefriends`='1')") or die(mysqli_error($conn));
$friendnew2 = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = {$_USER['id']} AND `arefriends`='1') OR (`user_to` = {$_USER['id']} AND `arefriends`='1')") or die(mysqli_error($conn));

if(mysqli_num_rows($friendnew) > 19) {context::awardbadge(6,$id,$conn);}
if(mysqli_num_rows($friendnew2) > 19) {context::awardbadge(6,$_USER['id'],$conn);}
$user = mysqli_fetch_assoc($userq);
$content = $_USER['username']." accepted your friend request.";
context::sendMessageWithBotAccount("Friend request accepted.", $content, $id, true, null, 0);

$removemessageq = mysqli_query($conn,"DELETE FROM messages WHERE user_from = '{$user['id']}' AND user_to = '{$_USER['id']}' AND isfriendreq = 1") or die(mysqli_error($conn));

?>
	<div id="Body">
					
	<div class="MessageContainer">
        <div id="MessagePane">
			<div id="ctl00_cphRoblox_pConfirmation">
				<div id="Confirmation">
					<h3>Friend Request Accepted</h3>
					<div id="Message"><span id="ctl00_cphRoblox_lConfirmationMessage">The request from <?=$user['username']?> has been accepted.</span></div>
					<div class="Buttons"><a id="ctl00_cphRoblox_lbContinue" class="Button" href="/my/messages/inbox">Continue</a></div>
				</div>
			
</div>
		</div>
		<div style="clear: both;"></div>
	</div>

				</div>
	<?php
	include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
	die();


