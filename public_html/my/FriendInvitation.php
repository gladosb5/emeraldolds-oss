<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}

$id = (int)$_GET['RecipientID'] ?? header("Location: /");

$checkq2 = mysqli_query($conn,"SELECT * FROM friends WHERE user_from = '$id' AND user_to = '{$_USER['id']}' AND arefriends = '1'") or mysqli_error($conn);

$friendnew = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = {$id} AND `arefriends`='1') OR (`user_to` = {$id} AND `arefriends`='1')") or die(mysqli_error($conn));
$friendnew2 = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = {$_USER['id']} AND `arefriends`='1') OR (`user_to` = {$_USER['id']} AND `arefriends`='1')") or die(mysqli_error($conn));

$checkq3 = mysqli_query($conn,"SELECT * FROM messages WHERE user_from = '$id' AND user_to = '{$_USER['id']}' AND isfriendreq = '1'") or mysqli_error($conn);
if (mysqli_num_rows($checkq3) > 0) {
    echo 'kys';
    exit();
}
if (mysqli_num_rows($checkq2) > 0) {
  ?> <div id="Body">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center">An Error occured! We're sorry.</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
				</div> <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
				die();
}

$userq = mysqli_query($conn, "SELECT username, id FROM users WHERE id='$id'") or die(mysqli_error($conn));

if (mysqli_num_rows($userq) < 1 or $id == $_USER['id']) {
  ?> <div id="Body">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center">An Error occured! We're sorry.</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
				</div> <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
				die();
}else{
	$user = mysqli_fetch_assoc($userq);
}


if(isset($_POST['Send'])){
	$oldsubject = $_POST['MsgSubject'];
	$oldcontent = $_POST['MsgBody'];
	
	$subject = $ep->remove($oldsubject);
	$content = $ep->remove($oldcontent);
	
	$checkq = mysqli_query($conn,"SELECT * FROM friends WHERE (user_from = '{$_USER['id']}' AND user_to = '$id') OR (user_from = '$id' AND user_to = '{$_USER['id']}')") or die(mysqli_error($conn));

	if(mysqli_num_rows($checkq) == 1){
		?>
	<div id="Body">
					
	<div class="MessageContainer">
        <div id="MessagePane">
			<div id="ctl00_cphRoblox_pConfirmation">
				<div id="Confirmation">
					<h3>Message Sent</h3>
					<div id="Message"><span id="ctl00_cphRoblox_lConfirmationMessage">Your message has been sent to <?=$user['username']?>.</span></div>
					<div class="Buttons"><a id="ctl00_cphRoblox_lbContinue" class="Button" href="/User.aspx?ID=<?=$user['id']?>">Continue</a></div>
				</div>
			
</div>
		</div>
		<div style="clear: both;"></div>
	</div>

				</div>
	<?php
	include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
	die();
	}else{
	
	//if(empty($subject)){
		$subject = "Friend Request From {$_USER['username']}";
	//}
	
	//if(empty($content)){
		$content = "Hello! I am requesting to be your friend in emeraldnews! If you would like to accept this request, please click the 'Accept' button below. Thank you!";
	//}
	
	$currenttimelol = time();
	$uid = $id;
	
	context::sendMessageWithBotAccount($subject, $content, $uid, false, $_USER['id'], 1);
	
	/*$stmt = "INSERT INTO `messages` (`id`,`user_from`, `user_to`, `subject`, `content`, `datesent`) VALUES (NULL,'1','$uid','$subject','$content','$currenttimelol')";

	$q = mysqli_query($conn,$stmt) or die(mysqli_error($conn));*/

	$user_from = $_USER['id'];
	$user_to = intval($_GET['RecipientID']);

	if ($user_to < 1) {
	  die ("Invalid ID.");
	}
	
	  $arefriends = 0;
	  $hash = md5($user_from.$user_to.$arefriends);
	  $query = mysqli_query($conn, "INSERT INTO  `friends` (
	`id` ,
	`user_from` ,
	`user_to` ,
	`arefriends` ,
	`hash`
	)
	VALUES (
	NULL ,  '$user_from',  '$user_to',  '0',  '$hash'
	);")  or die(mysqli_error($conn));
	
	?>
	<div id="Body">
					
	<div class="MessageContainer">
        <div id="MessagePane">
			<div id="ctl00_cphRoblox_pConfirmation">
				<div id="Confirmation">
					<h3>Message Sent</h3>
					<div id="Message"><span id="ctl00_cphRoblox_lConfirmationMessage">Your message has been sent to <?=$user['username']?>.</span></div>
					<div class="Buttons"><a id="ctl00_cphRoblox_lbContinue" class="Button" href="/User.aspx?ID=<?=$user['id']?>">Continue</a></div>
				</div>
			
</div>
		</div>
		<div style="clear: both;"></div>
	</div>

				</div>
	<?php
	include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
	die();
	}
	
}

?>
<div id="Body">
<div class="MessageContainer">

	<div id="MessagePane">
		<form method="POST" action="">
			<h3>Your Message</h3>
			<div id="MessageEditorContainer">  
				<div class="MessageEditor">
					<table width="100%">
						<tbody><tr valign="top">
							<td style="width:12em">
								<div id="From">
									<span class="Label">
										<span id="MsgFrom">From:</span>
									</span> 
									<span class="Field">
										<span id="MsgAuthor"><?=$_USER['username']?></span>
									</span>
								</div>
								<div id="To">
									<span class="Label">
										<span id="MsgTo">Send To:</span>
									</span> 
									<span class="Field">
										<span id="MsgRecipient"><?=$user['username']?></span>
									</span>
								</div>
															</td>
							<td style="padding:0 24px 6px 12px">
								<div id="Subject">
									<div class="Label">
										<label id="MsgSubjectText">Subject:</label>
									</div>
									<div class="Field">
										<input name="MsgSubject" type="text" id="MsgSubject" class="TextBox" style="width:100%;" value="Friend Request From <?=$_USER['username']?>">
									</div>
								</div>
								<div class="Body">
									<div class="Label">
										<label id="MsgBodyTitle">Message:</label></div>
									<textarea name="MsgBody" rows="2" cols="20" id="MsgBody" class="MultilineTextBox" style="width:100%;max-width:528px;">Hello! I am requesting to be your friend in emeraldnews! If you would like to accept this request, please click the 'Accept' button below. Thank you!</textarea>
								</div> 
								<!--p>This feature is in currently development and not available, you can still send the friend request, but not send the message. Please can try again later.</p-->
								<p style="font-size: medium; color: red"><b>Remember, emeraldnews staff will never ask you for your password.<br>People who ask for your password are trying to steal your account.</b></p>
							</td>
						</tr>
					</tbody></table>
				</div>
				<div style="clear:both"></div>
			</div>
			<div class="Buttons">
				<input name="Send" value="Send" id="Send" class="Button" type="submit">
			</div>
		</form>
	</div>
	<div style="clear: both;"></div>
</div>
				</div>
                                <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


