<?php
require $_SERVER['DOCUMENT_ROOT']."/api/database/connect.php";

$assetId = (int)$_GET['id'];

$userq = mysqli_query($conn,"SELECT * FROM users WHERE id = '$assetId'") or mysqli_error($conn);
if(mysqli_num_rows($userq) < 1){
exit("this user doesn't exist.");	
}
$user = mysqli_fetch_assoc($userq);
$assetId = $user['id'];

$head = htmlspecialchars($user['Head']);
$ra = htmlspecialchars($user['RA']);
$torso = htmlspecialchars($user['Torso']);
$la = htmlspecialchars($user['LA']);
$rl = htmlspecialchars($user['RL']);
$ll = htmlspecialchars($user['LL']);

header('Content-Type:text/plain');
?>

<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.emeraldolds.glados.pro/roblox.xsd" version="4">
	<External>null</External>
	<External>nil</External>
	<Item class="BodyColors" referent="RBX0">
		<Properties>
			<int name="HeadColor"><?=$head?></int>
			<int name="LeftArmColor"><?=$la?></int>
			<int name="LeftLegColor"><?=$ll?></int>
			<string name="Name">Body Colors</string>
			<int name="RightArmColor"><?=$ra?></int>
			<int name="RightLegColor"><?=$rl?></int>
			<int name="TorsoColor"><?=$torso?></int>
			<bool name="archivable">true</bool>
		</Properties>
	</Item>
</roblox>


