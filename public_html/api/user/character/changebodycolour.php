<?php

ob_start();

require $_SERVER['DOCUMENT_ROOT']."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if(!$logged == "yes"){
	header("Location: /Login/Default.aspx");
}

$RobloxColors = array(
    1,          //1
    208,        //2
    194,        //3
    199,        //4
    26,         //5
    21,         //6
    24,         //7
    226,        //8
    23,         //9
    107,        //10
    102,        //11
    11,         //12
    45,         //13
    135,        //14
    106,        //15
    105,        //16
    141,        //17
    28,         //18
    37,         //19
    119,        //20
    29,         //21
    151,        //22
    38,         //23
    192,        //24
    104,        //25
    9,          //26
    101,        //27
    5,          //28
    153,        //29
    217,        //30
    18,         //31
    125         //32
);

$RobloxColorsHtml = array(
    "#F2F3F2",  //1
    "#E5E4DE",  //2
    "#A3A2A4",  //3
    "#635F61",  //4
    "#1B2A34",  //5
    "#C4281B",  //6
    "#F5CD2F",  //7
    "#FDEA8C",  //8
    "#0D69AB",  //9
    "#008F9B",  //10
    "#6E99C9",  //11
    "#80BBDB",  //12
    "#B4D2E3",  //13
    "#74869C",  //14
    "#DA8540",  //15
    "#E29B3F",  //16
    "#27462C",  //17
    "#287F46",  //18
    "#4B974A",  //19
    "#A4BD46",  //20
    "#A1C48B",  //21
    "#789081",  //22
    "#A05F34",  //23
    "#694027",  //24
    "#6B327B",  //25
    "#E8BAC7",  //26
    "#DA8679",  //27
    "#D7C599",  //28
    "#957976",  //29
    "#7C5C45",  //30
    "#CC8E68",  //31
    "#EAB891"   //32
);

function getColorValue($color) {
    global $RobloxColorsHtml, $RobloxColors;

    $index = array_search($color, $RobloxColorsHtml);

    if ($index !== false) {
        return $RobloxColors[$index];
    }

    return null;
}

$numbercolor = getColorValue(strtoupper($_POST['color']));

$bodypartnumber = $_POST['bodyP'];

if($bodypartnumber == "0"){
	$bodypart = "Head";
	$sql = "UPDATE users SET Head = '$numbercolor' WHERE id = '{$_USER['id']}'";
}elseif($bodypartnumber == "1"){
	$bodypart = "LA";
	$sql = "UPDATE users SET LA = '$numbercolor' WHERE id = '{$_USER['id']}'";
}elseif($bodypartnumber == "2"){
	$bodypart = "Torso";
	$sql = "UPDATE users SET Torso = '$numbercolor' WHERE id = '{$_USER['id']}'";
}elseif($bodypartnumber == "3"){
	$bodypart = "RA";
	$sql = "UPDATE users SET RA = '$numbercolor' WHERE id = '{$_USER['id']}'";
}elseif($bodypartnumber == "4"){
	$bodypart = "RL";
	$sql = "UPDATE users SET RL = '$numbercolor' WHERE id = '{$_USER['id']}'";
}elseif($bodypartnumber == "5"){
	$bodypart = "LL";
	$sql = "UPDATE users SET LL = '$numbercolor' WHERE id = '{$_USER['id']}'";
}else{
	die("bodyp not found.");
}

if($numbercolor !== null){
	$colorq = mysqli_query($conn,$sql) or mysqli_error($conn);
}else{
	die("color not found.");
}


