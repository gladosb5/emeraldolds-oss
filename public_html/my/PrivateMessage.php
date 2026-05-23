<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}

$id = (int)$_GET['RecipientID'] ?? header("Location: /");
$msg = (int)$_GET['msg'];
$reply = $_GET['reply'];

$userq = mysqli_query($conn, "SELECT username, id FROM users WHERE id='$id'") or die(mysqli_error($conn));

if (mysqli_num_rows($userq) < 1 or $id == $_USER['id']) {
  ?> <div id="Body">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center">you cannot send yourself a message goofy...</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
				</div> <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
				die();
}else{
	$user = mysqli_fetch_assoc($userq);
}

$s = "";

if(isset($_POST['Send'])){
	$oldsubject = $_POST['MsgSubject'];
	$oldcontent = $_POST['MsgBody'];
	
	$subject = mysqli_real_escape_string($conn, $ep->remove($oldsubject));
	$content = mysqli_real_escape_string($conn, $ep->remove($oldcontent));

	if(empty($subject)){
		$s = "You must have a subject.";
	}else{
	
		if(empty($content)){
			$s = "You must have a content.";
		}else{
		
			$currenttimelol = time();
			$uid = $id;
			
			context::sendMessageWithBotAccount($subject, $content, $uid, false, $_USER['id'], 0);
			
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
	
}

?>
<title>emeraldnews - Private Message</title>
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
							<p style="color:red"><?=$s?></p>
							<?php
							$subjecttest = "";
							$bodytest = "";
							if(isset($msg) and isset($reply)) {
							    $msgq = mysqli_query($conn, "SELECT * FROM messages WHERE id='$msg' ORDER by id DESC") or die(mysqli_error($conn));
							    while ($row = mysqli_fetch_assoc($msgq)) {
							        if ($row['user_from'] == $user['id'] and $row['user_to'] == $_USER['id']) {
							            $subjecttest = "RE: " . $row['subject'];
							            $bodytest = "\n\n\n------------------------------\nOn " . date('d/m/Y', $msg2['datesent']) . " at " . date('g:i A', $msg2['datesent']) . " " . htmlspecialchars($user['username']) . " wrote:\n\n" . htmlspecialchars($row['content']);
							        }
							    }
							}
							
							
							echo '
								<div id="Subject">
									<div class="Label">
										<label id="MsgSubjectText">Subject:</label>
									</div>
									<div class="Field">
										<input name="MsgSubject" value="'.$subjecttest.'" type="text" id="MsgSubject" class="TextBox" style="width:100%;">
									</div>
								</div>
								<div class="Body">
<div class="Label">
    <label id="MsgBodyTitle">Message:</label>
</div>
<textarea name="MsgBody" rows="2" cols="20" id="MsgBody" class="MultilineTextBox" style="width:100%; max-width: 414px;">'.$bodytest.'</textarea>

								'?>
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


