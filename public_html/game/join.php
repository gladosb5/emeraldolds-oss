<?php
require $_SERVER['DOCUMENT_ROOT']."/api/includes.php";
if(isset($_GET['token']) and isset($_GET['placeId'])) {
$token = mysqli_real_escape_string($conn,$_GET['token']);
$pid = mysqli_real_escape_string($conn,$_GET['placeId']);




$realqueryscream = mysqli_query($conn,"SELECT * FROM users WHERE token = '$token'");
$realqueryscream2 = mysqli_query($conn, "UPDATE games SET visits = visits + 1 WHERE id = $pid");
$user = mysqli_fetch_assoc($realqueryscream);

$getservers = mysqli_query($conn,"SELECT * FROM servers WHERE game_id = '$pid'");
$serverinfo = mysqli_fetch_assoc($getservers);

$token2 = generateRandomString(30);

$tokenq = mysqli_query($conn,"UPDATE users SET token = '$token2' WHERE id = '{$_USER['id']}'") or header("Location: /Error.aspx");

$places = mysqli_query($conn, "SELECT visits, creator_id FROM games WHERE id = $pid");

$totalVisits = 0;
$ownerid = 0;
while ($row = mysqli_fetch_assoc($places)) {
    $totalVisits += $row['visits'];
    $ownerid = $row['creator_id'];
}
if($totalVisits >= 100) {
    context::awardbadge(4,$ownerid,$conn);
}
if($totalVisits >= 1000) {
    context::awardbadge(5,$ownerid,$conn);
}
/*
$a = array();

$check = mysqli_query($conn,"SELECT * FROM wear WHERE userid = '$assetId'") or die(mysqli_error());

while($row = mysqli_fetch_assoc($check)) {
	
	$itemq = mysqli_query($conn,"SELECT * FROM owned_items WHERE id = {$row['item']}");
	
	if(mysqli_num_rows($itemq) < 1){
		return null;
	}
	
	$item = mysqli_fetch_assoc($itemq);
	
	$a[] = $item['itemid'];
}

$lastItem = end($a);

foreach ($a as $key => $item) {
    $items .= "http://www.emeraldolds.glados.pro/asset/?id=" . $item;
    
    if ($item !== $lastItem) {
        $items .= ";";
    }
}

$gameid = (int)$_GET['placeId'];

$check = mysqli_query($conn,"SELECT * FROM servers WHERE game_id = '0' LIMIT 1");

$check2 = mysqli_query($conn,"SELECT * FROM servers WHERE game_id = $gameid LIMIT 1");

if(mysqli_num_rows($check2) != 1){

if(mysqli_num_rows($check) == 1){

    $sadjias = mysqli_fetch_array($check);

    $session = $sadjias['id'];
	
    $query = mysqli_query($conn,"UPDATE servers SET game_id = '$gameid' WHERE id = '$session'");

    if(!$query){
        echo "Something went wrong.";
		exit;
    }

}else{
	echo "No gameservers available.";
	exit;
}
}
*/
header('Content-Type: text/plain');

echo '-- functions --------------------------
function onPlayerAdded(player)
	-- override
end
-- arguments ---------------------------------------
local threadSleepTime = ...
if threadSleepTime==nil then
	threadSleepTime = 15
end
local test = true
print("! Joining place -1 at localhost")
game:GetService("ChangeHistoryService"):SetEnabled(false)
game:GetService("ContentProvider"):SetThreadPool(16)
game:GetService("InsertService"):SetBaseCategoryUrl("emeraldolds.glados.pro/Game/Tools/InsertAsset.php?nsets=10&type=base")
game:GetService("InsertService"):SetUserCategoryUrl("emeraldolds.glados.pro/Game/Tools/InsertAsset.php?nsets=20&type=user&userid=%d")
game:GetService("InsertService"):SetCollectionUrl("emeraldolds.glados.pro/Game/Tools/InsertAsset.php?sid=%d")
game:GetService("InsertService"):SetAssetUrl("emeraldolds.glados.pro/Asset/?id=%d")
game:GetService("InsertService"):SetAssetVersionUrl("emeraldolds.glados.pro/Asset/?assetversionid=%d")
-- game:GetService("InsertService"):SetTrustLevel(0)
game:GetService("InsertService"):SetAdvancedResults(true)
-- Bubble chat.  This is all-encapsulated to allow us to turn it off with a config setting
pcall(function() game:GetService("Players"):SetChatStyle(Enum.ChatStyle.ClassicAndBubble) end)
local waitingForCharacter = false
pcall( function()
	if settings().Network.MtuOverride == 0 then
		settings().Network.MtuOverride = 1400
	end
end)
-- globals -----------------------------------------
client = game:GetService("NetworkClient")
visit = game:GetService("Visit")
-- functions ---------------------------------------
function setMessage(message)
	-- todo: animated "..."
	if not false then
		game:SetMessage(message)
	else
		-- hack, good enought for now
		game:SetMessage("Teleporting ...")
	end
end
function showErrorWindow(message)
	game:SetMessage(message)
end
function reportError(err)
	print("***ERROR*** " .. err)
	if not test then visit:SetUploadUrl("") end
	client:Disconnect()
	wait(4)
	showErrorWindow("Error: " .. err)
end
-- called when the client connection closes
function onDisconnection(peer, lostConnection)
	if lostConnection then
		showErrorWindow("You have lost the connection to the game")
	else
		showErrorWindow("This game has shut down")
	end
end
function requestCharacter(replicator)
	
	-- prepare code for when the Character appears
	local connection
	connection = player.Changed:connect(function (property)
		if property=="Character" then
			game:ClearMessage()
			waitingForCharacter = false
			
			connection:disconnect()
		end
	end)
	
	setMessage("Requesting character")
	local success, err = pcall(function()	
		replicator:RequestCharacter()
		setMessage("Waiting for character")
		waitingForCharacter = true
	end)
	if not success then
		reportError(err)
		return
	end
end
-- called when the client connection is established
function onConnectionAccepted(url, replicator)
	local waitingForMarker = true
	
	local success, err = pcall(function()	
		if not test then 
		    visit:SetPing("", 300) 
		end
		
		if not false then
			game:SetMessageBrickCount()
		else
			setMessage("Teleporting ...")
		end
		replicator.Disconnection:connect(onDisconnection)
		
		-- Wait for a marker to return before creating the Player
		local marker = replicator:SendMarker()
		
		marker.Received:connect(function()
			waitingForMarker = false
			requestCharacter(replicator)
		end)
	end)
	
	if not success then
		reportError(err)
		return
	end
	
	-- TODO: report marker progress
	
	while waitingForMarker do
		workspace:ZoomToExtents()
		wait(0.5)
	end
end
-- called when the client connection fails
function onConnectionFailed(_, error)
	showErrorWindow("Failed to connect to the Game. (ID=" .. error .. ")")
end
-- called when the client connection is rejected
function onConnectionRejected()
	connectionFailed:disconnect()
	showErrorWindow("This game is not available. Please try another")
end
idled = false
function onPlayerIdled(time)
	if time > 20*60 then
		showErrorWindow(string.format("You were disconnected for being idle %d minutes", time/60))
		client:Disconnect()	
		if not idled then
			idled = true
		end
	end
end
-- main ------------------------------------------------------------
pcall(function() settings().Diagnostics:LegacyScriptMode() end)
local success, err = pcall(function()	
	game:SetRemoteBuildMode(true)
	
	setMessage("Connecting to Server")
	client.ConnectionAccepted:connect(onConnectionAccepted)
	client.ConnectionRejected:connect(onConnectionRejected)
	connectionFailed = client.ConnectionFailed:connect(onConnectionFailed)
	client.Ticket = ""
	
	-- playerConnectSucces, player = pcall(function() return client:PlayerConnect('.$user['id'].', "147.185.221.18", "'.$serverinfo["port"].'", 0, threadSleepTime) end)
	playerConnectSucces, player = pcall(function() return client:PlayerConnect("", "147.185.221.18", "", 0, threadSleepTime) end)

	if not playerConnectSucces then
		--Old player connection scheme
		player = game:GetService("Players"):CreateLocalPlayer('.$user['id'].')
		client:Connect("147.185.221.18", "'.$serverinfo["port"].'", 0, threadSleepTime)
	end
	player:SetSuperSafeChat(false)
	pcall(function() player:SetMembershipType(Enum.MembershipType.None) end)
	pcall(function() player:SetAccountAge(300) end)
	player.Idled:connect(onPlayerIdled)
	
	-- Overriden
	onPlayerAdded(player)
	
	pcall(function() player.Name = [========['.$user['username'].']========] end)
	game.Players.LocalPlayer.CharacterAppearance = "http://emeraldolds.glados.pro/game/getcharapp.php?assetId='.$user['id'].'"
	if not test then visit:SetUploadUrl("") end
end)
if not success then
	reportError(err)
end
if not test then
	-- TODO: Async get?
	loadfile("")("", -1, 0)
end
pcall(function() game:SetScreenshotInfo("") end)
pcall(function() game:SetVideoInfo("") end)
-- use single quotes here because the video info string may have unescaped double quotes';

// exit
}
?>



