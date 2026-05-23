<?php
$token = $_GET["token"];
$id = $_GET["placeId"];
header("Content-type: text/plain");
?>

print("Loading Place...")
game:Load("http://www.emeraldolds.glados.pro/game/get-place.ashx?placeId=<?=$id?>&token=<?=$token?>")




