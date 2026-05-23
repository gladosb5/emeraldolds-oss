<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
header("content-type: text/plain; X-Robots-Tag: noindex;charset=UTF-8"); 
ob_start();

if ($logged == "no") {
    $script1 = 'local plr = game.Players:CreateLocalPlayer(0)
plr.Name = "Guest"
plr.userId = "-1"

function loadCharacter()
    -- load the character and listen for death
    plr:loadCharacter()
    local humanoid = plr.Character.Humanoid
    humanoid.Died:connect(function() wait(5) loadCharacter() end)
end

loadCharacter()
game:service("RunService"):Run()
';
} else {
    $assetId = $_USER['id'];
    $userq = mysqli_query($conn, "SELECT * FROM users WHERE id = '$assetId'") or mysqli_error($conn);
    if (mysqli_num_rows($userq) < 1) {
        exit("this user doesn't exist.");
    }
    $user = mysqli_fetch_assoc($userq);

    $head = $user['Head'];
    $ra = $user['RA'];
    $torso = $user['Torso'];
    $la = $user['LA'];
    $rl = $user['RL'];
    $ll = $user['LL'];
    $items = "";

    $a = array();

    $check = mysqli_query($conn, "SELECT * FROM wear WHERE userid = '$assetId'") or die(mysqli_error());

    while ($row = mysqli_fetch_assoc($check)) {
        $itemq = mysqli_query($conn, "SELECT * FROM owned_items WHERE id = {$row['item']}");

        if (mysqli_num_rows($itemq) < 1) {
            return null;
        }

        $item = mysqli_fetch_assoc($itemq);

        $a[] = $item['itemid'];
    }

    $lastItem = end($a);

    foreach ($a as $key => $item) {
        $items .= "http://emeraldolds.glados.pro/asset/?id=" . $item;

        if ($item !== $lastItem) {
            $items .= ";";
        }
    }

    $script1 = 'local plr = game.Players:CreateLocalPlayer(0)
plr.Name = "' . $user['username'] . '"
plr.userId = "' . $assetId . '"

function loadCharacter()
    -- load the character and listen for death
    plr.CharacterAppearance = "' . $items . '"
    plr:loadCharacter()
    plr.Character.Head.BrickColor = BrickColor.new(' . $head . ')
    plr.Character["Right Arm"].BrickColor = BrickColor.new(' . $ra . ')
    plr.Character.Torso.BrickColor = BrickColor.new(' . $torso . ')
    plr.Character["Left Arm"].BrickColor = BrickColor.new(' . $la . ')
    plr.Character["Right Leg"].BrickColor = BrickColor.new(' . $rl . ')
    plr.Character["Left Leg"].BrickColor = BrickColor.new(' . $ll . ')
    local humanoid = plr.Character.Humanoid
    humanoid.Died:connect(function() wait(5) loadCharacter() end)
end

loadCharacter()
game:service("RunService"):Run()
';
}

header("Content-type: text/plain");

$data = $script1; 
$signature;
$key = file_get_contents("./wFe8zLSH7R9I1K1DTxxQl5Aa.pem");
openssl_sign($data, $sig, $key, OPENSSL_ALGO_SHA1);
echo "%" . base64_encode($sig) . "%" . $data;





