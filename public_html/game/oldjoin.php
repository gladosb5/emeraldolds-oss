<?php
require $_SERVER['DOCUMENT_ROOT']."/api/database/connect.php";

$token = mysqli_real_escape_string($conn,$_GET['token']);
$realqueryscream = mysqli_query($conn,"SELECT * FROM users WHERE token = '$token'");

$user = mysqli_fetch_assoc($realqueryscream);
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

echo 'local server = "147.185.221.18"
local serverport = 5307
local clientport = 0
local playername = "'.$user['username'].'"
local playerid = "'.$user['id'].'"
game:SetMessage("Connecting to server...")
function dieerror(errmsg)
    game:SetMessage(errmsg)
    wait(math.huge)
end

local suc, err =
    pcall(
    function()
        client = game:GetService("NetworkClient")
        local player = game:GetService("Players"):CreateLocalPlayer(0)
        pcall(
            function()
                game:GetService("Players"):SetChatStyle(Enum.ChatStyle.ClassicAndBubble)
            end
        )
        player:SetSuperSafeChat(false)
        game:GetService("Visit")
        player.Name = playername
        game.Players.LocalPlayer.CharacterAppearance = "http://emeraldolds.glados.pro/game/getcharapp.php?assetId='.$user['id'].'"
        game:ClearMessage()
    end
)
if not suc then
    dieerror(err)
end
function connected(url, replicator)
    local suc, err =
        pcall(
        function()
            local marker = replicator:SendMarker()
        end
    )
    if not suc then
        dieerror(err)
    end
    marker.Recieved:wait()
    local suc, err =
        pcall(
        function()
            game:ClearMessage()
        end
    )
    if not suc then
        dieerror(err)
    end
end
function rejected()
    dieerror("Connection failed: Rejected by server.")
end
function failed(peer, errcode, why)
    dieerror("Failed [" .. peer .. "], " .. errcode .. ": " .. why)
end
local suc, err =
    pcall(
    function()
        client.ConnectionAccepted:connect(connected)
        client.ConnectionRejected:connect(rejected)
        client.ConnectionFailed:connect(failed)
        client:Connect(server, serverport, clientport, 20)
    end
)
if not suc then
    local x = Instance.new("Message")
    x.Text = err
    x.Parent = workspace
    wait(math.huge)
end
while true do
    wait(0.001)
    replicator:SendMarker()
end

';
?>


