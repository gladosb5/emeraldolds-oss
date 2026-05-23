<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if(!$logged == "yes"){
	die("You are not logged in!");
}

$checklatestcomment = mysqli_query($conn,"SELECT * FROM reports WHERE userid = '{$_USER['id']}' ORDER by id DESC LIMIT 1") or die(mysqli_error($conn));
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

if($ratelimited && $_USER['administrator'] == 'no'){
	echo("You are being rate limited.");
	die();
}

$otheruser = mysqli_real_escape_string($conn, $_GET['id']);
$type = mysqli_real_escape_string($conn, $_GET['type']);

if($type == 3) {
    $getOtherUserData = mysqli_query($conn, "SELECT * FROM users WHERE id = $otheruser");
    $otheruser2 = mysqli_fetch_assoc($getOtherUserData);
    $username2 = htmlspecialchars(mysqli_real_escape_string($conn, $otheruser2['username']));
    $link2 = "http://emeraldolds.glados.pro/User.aspx?ID=" . $otheruser2['id'];
    $goofystring = "bro if you think that ".$username2." is weird then feel free to report him below.";
    if(mysqli_num_rows($getOtherUserData) < 1 || $otheruser == $_USER['id']) {
        echo '<h1>im pretty sure that the owner of this website doesnt need to be reported.</h1>';
        exit();
    }

} elseif($type == 4) {
    $getOtherUserData = mysqli_query($conn, "SELECT * FROM games WHERE id = $otheruser");
    $otheruser2 = mysqli_fetch_assoc($getOtherUserData);
    $getOtherUserData3 = mysqli_query($conn, "SELECT * FROM users WHERE id = {$otheruser2['creator_id']}");
    $otheruser3 = mysqli_fetch_assoc($getOtherUserData3);
    
    $username2 = htmlspecialchars(mysqli_real_escape_string($conn, $otheruser2['name']));
    $username3 = htmlspecialchars($otheruser3['username']);
    
    $link2 = "http://emeraldolds.glados.pro/PlaceItem.aspx?ID=" . $otheruser2['id'];
    $goofystring = "If you feel the game created by ".$username3." contains profanity or other forms of abuse then click the button below.";
    if(mysqli_num_rows($getOtherUserData) < 1 || $otheruser == $otheruser2['creator_id']) {
        echo 'sob';
        exit();
    }
} elseif($type == 2) {
    $getOtherUserData = mysqli_query($conn, "SELECT * FROM catalog WHERE id = $otheruser");
    $otheruser2 = mysqli_fetch_assoc($getOtherUserData);
    $getOtherUserData3 = mysqli_query($conn, "SELECT * FROM users WHERE id = {$otheruser2['creatorid']}");
    $otheruser3 = mysqli_fetch_assoc($getOtherUserData3);
    
    $username2 = htmlspecialchars(mysqli_real_escape_string($conn, $otheruser2['name']));
    $username3 = htmlspecialchars($otheruser3['username']);
    
    $link2 = "http://emeraldolds.glados.pro/Item.aspx?ID=" . $otheruser2['id'];
    $goofystring = "If you feel the item created by ".$username3." contains profanity or other forms of abuse then click the button below.";
    if(mysqli_num_rows($getOtherUserData) < 1 || $otheruser == $otheruser2['creatorid'] || $otheruser3['id'] == "1") {
        echo 'grrr cant report that';
        exit();
    }
} elseif($type == 0) {
    $getOtherUserData = mysqli_query($conn, "SELECT * FROM forum WHERE id = $otheruser");
    $otheruser2 = mysqli_fetch_assoc($getOtherUserData);
    $getOtherUserData3 = mysqli_query($conn, "SELECT * FROM users WHERE id = {$otheruser2['author']}");
    $otheruser3 = mysqli_fetch_assoc($getOtherUserData3);
    
    $username2 = htmlspecialchars(mysqli_real_escape_string($conn, $otheruser2['title']));
    $username3 = htmlspecialchars($otheruser3['username']);
    if($otheruser2['reply_to'] == 0) {
        $link2 = "https://emeraldolds.glados.pro/Forum/ShowPost.aspx?ID=" . $otheruser2['id'];
    } else {
        $link2 = "https://emeraldolds.glados.pro/Forum/ShowPost.aspx?ID=" . $otheruser2['reply_to'];
    }
    $goofystring = "if ".$username3." is weird then report.";
    if(mysqli_num_rows($getOtherUserData) < 1 || $otheruser3['id'] == $_USER['id']) {
        echo 'grrr cant report that';
        exit();
    }
} else {
    echo 'wtf';
    exit();
}


if(isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $user = mysqli_real_escape_string($conn, $_USER['username']);
    
    $time = time() + 15;
    $comment = mysqli_query($conn,"INSERT INTO reports (userid,itemid,content,timeout) VALUES ('{$_USER['id']}','$otheruser','$comment','$time')") or die(mysqli_error($conn));
    
    //webhook stuff from gaygpt
    
    $webhookUrl = getenv('DISCORD_WEBHOOK_URL_REPORT') ?: '';
    if (!empty($webhookUrl)) {
        $reason = $_POST['comment'];
        $embed = ["title" => "Report", "description" => "User [$user](http://emeraldolds.glados.pro/User.aspx?ID={$_USER['id']}) reported [$username2]($link2) for: \n$reason", "color" => hexdec("FF0000")];
        $data = ["embeds" => [$embed]];
        $options = [CURLOPT_URL => $webhookUrl, CURLOPT_POST => 1, CURLOPT_POSTFIELDS => json_encode($data), CURLOPT_HTTPHEADER => ["Content-Type: application/json"], CURLOPT_RETURNTRANSFER => true];
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        curl_close($ch);
    }
    
    header("Location: ../Default.aspx");
}
?>
<title>Report Abuse</title>
<div id="Body">
<div style="margin: 150px auto 150px auto; width: 500px; border: black thin solid; padding: 22px;">
    <?=$goofystring?>
    <br>
    <div style="margin: 12px">
        <div>
            <p style="color:red;"></p>
            <label style="width: 4em; float: left; text-align: right; margin-right: 0.5em">reason and why:</label>
            <form method="post" style="width:20.5em">
                <textarea name="comment" rows="4" cols="20" style="width:15em;"></textarea>
                <div style="float: right; padding: 0.5em">
                    <input type="submit" name="ok" value="yup" style="width:5em;">
                    <input type="button" value="no" onclick="location.href='../'" style="width:5em;">
                </div>
            </form>
        </div>
    </div>
</div>
				</div>
                                <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


