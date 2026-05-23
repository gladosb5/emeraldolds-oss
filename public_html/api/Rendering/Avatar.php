<?php
require $_SERVER["DOCUMENT_ROOT"]."/Assemblies/Roblox/Grid/Rcc/RCCServiceSoap.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

$assetId = isset($_GET['assetId']) ? (int)$_GET['assetId'] : null;

if (!$assetId) {
    exit("no assetid provided.");
}

if ($assetId !== $_USER['id'] && $_USER['administrator'] == "no") {
    exit("Unauthorized access");
}

$userq = mysqli_query($conn, "SELECT * FROM users WHERE id = '$assetId'") or die(mysqli_error($conn));
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
$face = "";
$newhead = "";
$a = array();

$check = mysqli_query($conn, "SELECT * FROM wear WHERE userid = '$assetId'") or die(mysqli_error($conn));

while ($row = mysqli_fetch_assoc($check)) {
    $itemq = mysqli_query($conn, "SELECT * FROM owned_items WHERE id = {$row['item']}");
    if (mysqli_num_rows($itemq) < 1) {
        return null;
    }

    $item = mysqli_fetch_assoc($itemq);
    $checkcatalogq = mysqli_query($conn, "SELECT * FROM catalog WHERE id = {$item['itemid']}") or die(mysqli_error($conn));
    $catalogItem = mysqli_fetch_assoc($checkcatalogq);

    if ($catalogItem['type'] == "face") {
        $face = $item['itemid'];
    } elseif ($catalogItem['type'] == "head") {
        $newhead = $item['itemid'];
    } else {
        $a[] = $item['itemid'];
    }
}

$lastItem = end($a);
foreach ($a as $key => $item) {
    $items .= "http://emeraldolds.glados.pro/asset/?id=" . $item;
    if ($item !== $lastItem) {
        $items .= ";";
    }
}

$script1 = '
game:GetService("ScriptContext").ScriptsDisabled = true
local plr = game.Players:CreateLocalPlayer(0)
plr:LoadCharacter()
plr.CharacterAppearance = "' . $items . '"
plr.Character.Head.BrickColor = BrickColor.new(' . $head . ')
plr.Character["Right Arm"].BrickColor = BrickColor.new(' . $ra . ')
plr.Character.Torso.BrickColor = BrickColor.new(' . $torso . ')
plr.Character["Left Arm"].BrickColor = BrickColor.new(' . $la . ')
plr.Character["Right Leg"].BrickColor = BrickColor.new(' . $rl . ')
plr.Character["Left Leg"].BrickColor = BrickColor.new(' . $ll . ')';

if ($face != "") {
    $script1 .= 'plr.Character.Head.face.Texture = "http://emeraldolds.glados.pro/api/stretchface.ashx?id=' . ($face - 1) . '";';
}
if ($newhead != "") {
    $script1 .= '
    plr.Character.Head.Mesh:remove()
    local item = game:GetObjects("http://emeraldolds.glados.pro/asset/?id=' . ($newhead - 2) . '&amp;a=' . rand(1, getrandmax()) . '")
    item[1].Parent = plr.Character.Head
    plr.Character.FakeFace.Mesh:remove()
    plr.Character.FakeFace.Transparency = 0
    local item2 = game:GetObjects("http://emeraldolds.glados.pro/asset/?id=' . ($newhead - 1) . '&amp;a=' . rand(1, getrandmax()) . '")
    item2[1].Parent = plr.Character.FakeFace
    plr.Character.FakeFace.Mesh.Scale = Vector3.new(1.05, 1.05, 1.05)';
    if ($face != "") {
        $script1 .= ' plr.Character.FakeFace.Mesh.TextureId = "http://emeraldolds.glados.pro/asset/?id=' . ($face - 1) . '" ';
    } else {
        $script1 .= ' plr.Character.FakeFace.Mesh.TextureId = "http://emeraldolds.glados.pro/asset/?id=1185" ';
    }
}

$script1 .= 'local result = game:GetService("ThumbnailGenerator"):Click("PNG", 480, 610, true)
return result';

$render = $RCCServiceSoap->execScript($script1, rand(1, getrandmax()), 15);

if (!empty($render)) {
    $imageData = base64_decode($render);

    // Convert the image to base64 and prepend the data URI scheme
    $base64 = 'data:image/png;base64,' . base64_encode($imageData);

    // Output the image data as a data URI
    echo $base64;

} else {
  //  echo 'data:image/png;base64,';
  echo ''; //i dont want to render anymore :(
}