<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}

$s = "";

if(isset($_POST['Update'])){
	$idkblurb = $ep->remove($_POST['Blurb']);
	$blurb = mysqli_real_escape_string($conn, $idkblurb);
	
	if(strlen($blurb) < 1){
		$s = "You may not have a empty blurb.";
	}else{
		$blurbq = mysqli_query($conn,"UPDATE users SET blurb = '$blurb' WHERE id = '{$_USER['id']}'") or die(mysqli_error($conn));
		
		header("Location: /User.aspx");
	}
}

?>
<title>emeraldnews: A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics</title> 
<div id="Body">
<form method="post">
	<div id="EditProfileContainer">
		<h2>Edit Profile</h2>
		<div id="ResetPassword">
			<fieldset title="Reset your password">
				<legend>change your username</legend>
				<div class="Suggestion">Click the button below to change your username!</div>
				<div class="ResetPasswordRow">
					&nbsp;<a href="/Login/ChangeUsername.aspx">change username</a>
		    	</div>
			</fieldset>
		</div>
		<div id="Blurb">
			<fieldset title="Update your personal blurb">
				<legend>Update your personal blurb</legend>
				<div class="Suggestion">Describe yourself here (max. 1000 characters). Make sure not to provide any details that can be used to identify you outside emeraldnews.</div>
				<div class="Suggestion" style="color:RED"><?=$s?></div>
				<div class="BlurbRow">
					<textarea name="Blurb" rows="12" cols="20" id="Blurb" class="MultilineTextBox" style="max-width: 211px;"><?php echo $ep->remove($_USER['blurb']); ?></textarea>
				</div>
			</fieldset>
		</div>
				<div class="Buttons">
			<input name="Update" id="Update" tabindex="4" class="Button" type="submit" value="Update">&nbsp;<a id="Cancel" tabindex="5" class="Button" href="/User.aspx">Cancel</a>
		</div>
	</div>
</form>
				</div>
				<style>
				#EditProfileContainer {
    background-color: #eeeeee;
    border: 1px solid #000;
    color: #555;
    margin: 0 auto;
    width: 620px;
}
#EditProfileContainer #AgeGroup, #EditProfileContainer #ChatMode, #EditProfileContainer #PrivacyMode, #EditProfileContainer #EnterEmail, #EditProfileContainer #ResetPassword, #EditProfileContainer #Blurb {
    margin: 0 auto;
    width: 60%;
}
				</style>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


