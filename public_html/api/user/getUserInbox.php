<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";


ob_start();
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

	session_start();
	
	if(!$logged == "yes"){
		exit("You are not logged in");
	}
	
$inboxq = mysqli_query($conn, "SELECT * FROM messages WHERE user_to='{$_USER['id']}' AND deleted = 0 ORDER by id DESC") or die(mysqli_error($conn));
if(mysqli_num_rows($inboxq) == 0){
	$emptymessage = "Looks like your inbox is empty.";
}
?>

				<div>
					<table cellspacing="0" cellpadding="3" border="0" style="border:1px solid black;width:726px;border-collapse:collapse;">
						<tbody><tr class="InboxHeader">
							<th align="left" scope="col">
								<input id="SelectAllCheckBox" type="checkbox" name="SelectAllCheckBox">
							</th>
							<th align="left" scope="col">
								<a>Subject </a>
							</th>
							<th align="left" scope="col">
								<a>From </a>
							</th>
							<th align="left" scope="col">
								<a>Date</a>
							</th>
						</tr>
						<?php while($row = mysqli_fetch_assoc($inboxq)) { 
						
						$subject = $ep->remove($row['subject']);
						
						$userq = mysqli_query($conn,"SELECT username,id FROM users WHERE id = {$row['user_from']}") or die(mysqli_error($conn));
						
						$user = mysqli_fetch_assoc($userq);
						
						$username = $ep->remove($user['username']);
						$id = (int)$user['id'];
						$time = date('d/m/Y g:i:s A', $row['datesent']);
						
						?>
						<tr class="InboxRow">
							<td>
								<span style="display:inline-block;width:25px;"><input id="<?=$row['id']?>" type="checkbox" class="DeleteCheckBox"></span>
							</td>
							<td align="left">
								<a href="/my/messages/inbox?msg=<?=$row['id']?>" style="display:inline-block;width:325px;"><?=$subject?></a>
							</td>
							<td align="left">
								<a id="Author" title="Visit <?=$username?>'s Home Page" href="/User.aspx?ID=<?=$id?>" style="display:inline-block;width:175px;"><?=$username?></a>
							</td>
							<td align="left">
								<?=$time?>
							</td>
						</tr>
						<?php } ?>
					</tbody></table>
				</div>
				<?php if(!empty($emptymessage)){ ?><p style="text-align:center;margin-top:0;border:1px solid black;width:724px;border-collapse:collapse;padding-top:5px;padding-bottom:5px"><?=$emptymessage?></p><?php } ?>
				<div class="Buttons">
					<input name="oof" id="DeleteMsgs" class="Button" value="Delete" type="submit">
					<a class="Button" href="/User.aspx">Cancel</a>
				</div>
				<script type="text/javascript">

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
								if (data === "success" || data === "no post"){
									getinbox(1)
								}else{
									$("#Inbox").empty();
									$("#Inbox").html(data);
								}
							})
							.fail(function() 
							{
								$("#Inbox").empty();
								$("#Inbox").html(data);
							});
						});
					});
				</script>


