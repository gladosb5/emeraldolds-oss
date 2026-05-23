<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}
$userIdToDisplay = $_USER['id'];
$msg = (int)$_GET['msg'];

if(!isset($msg) || empty($msg)){

$emptymessage;
$inboxq = mysqli_query($conn, "SELECT * FROM messages WHERE user_to='{$_USER['id']}' ORDER by id DESC") or die(mysqli_error($conn));
if(mysqli_num_rows($inboxq) == 0){
	$emptymessage = "Looks like your inbox is empty.";
}

$inboxhome = true;
}else{
$id = $msg;
$msgq = mysqli_query($conn, "SELECT * FROM messages WHERE id='$id' ORDER by id DESC") or die(mysqli_error($conn));
if(mysqli_num_rows($msgq) !== 1){
	?> <div id="Body">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center">An Error occured! We're sorry.</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
				</div> <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
				die();
}
$msg2 = mysqli_fetch_assoc($msgq);
$inboxhome = false;	
$userq = mysqli_query($conn,"SELECT username,id FROM users WHERE id = {$msg2['user_from']}") or die(mysqli_error($conn));
						
$user = mysqli_fetch_assoc($userq);

$readq = mysqli_query($conn,"UPDATE messages SET reada = '1' WHERE id = '$id'") or die(mysqli_error($conn));


}
?>
<title>emeraldnews - Inbox</title> 
<?php if($inboxhome){ ?>
<script type="text/javascript">

					function getinbox(page,event) 
					{
						if(page == undefined){ page = 1; }
						if(event != undefined){ event.preventDefault(); }
						$.post("/api/user/getUserInbox", {page:page}, function(data) 
						{
							$("#Inbox").empty();
							$("#Inbox").html(data);
						})
						.fail(function() 
						{
							$("#Inbox").html("Failed to get inbox");
						});
					}

					$(document).ready(function() {
						$("#SelectAllCheckBox").change(function() {
							$("input:checkbox").prop('checked', $(this).prop("checked"));
						});
						$("#DeleteMsgs").click(function() {
							var selected = [];
							$('tr input:checked:not("#SelectAllCheckBox")').each(function() {
								selected.push($(this).attr('id'));
							});
							$.post("/api/user/deleteInboxMsgs", {delMsgs: JSON.stringify(selected)}, function(data) 
							{
								if (data === "success"){
									getinbox(1)
								}else{
									$("#Inbox").html("Failed to delete messages");
								}
							})
							.fail(function() 
							{
								$("#Inbox").html("Failed to delete messages");
							});
						});
					});
					
					getinbox(1)
				</script>
<div id="Body">
	<div id="InboxContainer" style="float:left;">
		<div id="InboxPane">
			<h2>Inbox</h2>
			<div id="Inbox" style="border: 0px;">
				
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
<div style="clear: both;">
</div>
</div>
<?php }elseif(!$inboxhome){ 

if($msg2['user_to'] != $_USER['id']){ header("Location: /my/messages/inbox"); }

if(isset($_POST['delete'])){
	$deletemsgsq = mysqli_query($conn,"UPDATE messages SET deleted = '1' WHERE id = '{$msg2['id']}'") or mysqli_error($query);
	header("Location: /my/messages/inbox");
}

?>
<div id="Body">
	
	<div class="MessageContainer" style="float:left;">
		<div id="MessagePane">
			<h3>Private Message</h3>
			<div class="MessageReaderContainer">
				<div id="Message">
					<table width="100%">
						<tbody><tr valign="top">
							<td style="width: 10em">
								<div id="DateSent"><?=date('d/m/Y g:i:s A', $msg2['datesent'])?></div>
								<div id="Author">
									<a id="Avatar" disabled="disabled" title="<?=$user['username']?>" onclick="return false"></a><br>
									<a id="AuthorLink" title="Visit <?=$user['username']?>'s Home Page" href="/User.aspx?ID=<?=$user['id']?>"><?=$user['username']?></a>
								</div>
								<div id="Subject">
									<?php echo htmlspecialchars($msg2['subject']) ?>
									<br>
									<br>
								</div>
							</td>
							<td style="padding: 0 10px 0 10px; width:100%;">
								<div class="Body2" style="width:100%;">
									<div class="MultilineTextBox" style="height:250px;overflow-y:scroll;width:100%;">
										<?php echo nl2br(htmlspecialchars($msg2['content'])) ?>
									</div>
								</div>
							</td>
						</tr>
					</tbody></table>
				</div>
				<div style="clear:both"></div>
			</div>
			<?php if($msg2['isfriendreq']){ ?>
			<div class="Buttons">
				<a id="ctl00_cphRoblox_lbCancel" class="Button" href="/my/messages/inbox">Cancel</a>
				<a id="ctl00_cphRoblox_lbDecline" class="Button" href="/my/DeclineInvitation.aspx?ID=<?=$user['id']?>">Decline</a>
				<a id="ctl00_cphRoblox_lbAccept" class="Button" href="/my/AcceptInvitation.aspx?ID=<?=$user['id']?>">Accept</a>
			</div>
			<?php }else{ ?>
			<div class="Buttons">
				<a id="Cancel" class="Button" href="/my/messages/inbox">Cancel</a>
				<form method="post">
					<input name="delete" value="Delete" class="Button" type="submit">
				</form>
				<a href="/my/PrivateMessage?RecipientID=<?=$msg2['user_from']?>&msg=<?=$msg2['id']?>&amp;reply" id="reply" class="Button">Reply</a>
			</div>
			<?php } ?>
			<div style="clear:both"></div>
	</div>
</div>
<div style="clear: both;">
</div>
</div>
<?php } ?>
                                <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
                                <title>emeraldnews - Inbox</title>


