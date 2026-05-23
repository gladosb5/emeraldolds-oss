<style>
    body {
        background-color: black;
        color:green;
        font-size:23px;
        text-align: center;
        background-image: url(/images/hl1bg.png);
        background-size: 100% 100%;
        background-attachment: fixed;
        font-family: Arial, sans-serif;
    }
</style>
<img src="/images/hlemeraldnews.png" width="500" border="0" id="img" alt="emeraldnews" blankurl="http://t2.roblox.com:80/blank-267x70.gif"><br><br>
<?php

    include $_SERVER["DOCUMENT_ROOT"] . "/api/includes.php";
    include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";
    if($logged == "no")
{
	header("Location: /Login/Default.aspx");
	exit();
}

if($_USER['administrator'] !== "yes"){
	header("Location: /Login/Default.aspx");
	exit();
}

function getUsernameColor($username) {
    // Predefined array of colors
    $colors = array(
        '#0080FF', // Blue
        '#00CC66', // Green
        '#FFFF00', // Yellow
        '#FF9933', // Orange
        '#FF5050', // Red
        '#9933FF', // Purple
    );



    
    // Get index based on username length
    $index = strlen($username) % count($colors);
    
    return $colors[$index];
}

if(!$logged == "yes"){
	die("You are not logged in!");
}
if($_USER['administrator'] == "no") {
    die("You are not logged in!");
}

$gameId = mysqli_real_escape_string($conn, $_GET['g']);
$fiveMinutesAgo = date('Y-m-d H:i:s', strtotime('-5 minutes'));
$real = mysqli_query($conn, "SELECT * FROM chatlogs WHERE gameid = $gameId AND date >= '$fiveMinutesAgo' ORDER BY id ASC");
while ($row = mysqli_fetch_assoc($real)) {
    $getUser = mysqli_query($conn, "SELECT * FROM users WHERE id = {$row['userid']}");
    $user = mysqli_fetch_assoc($getUser);
    $username = htmlspecialchars($user['username']);
    $color = getUsernameColor($username);
    echo "<span style='color:$color'>" . $username . ": </span>";
    echo "<span style='color:$color'>" . htmlspecialchars($row['msg']) . "</span><br><br>";
}

?>


