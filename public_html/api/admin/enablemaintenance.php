<?php

session_start();

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

if(!$logged == "yes")
{
	header("Location: /Login/Default.aspx");
}

if($_USER['administrator'] == "no"){
	header("Location: /Login/Default.aspx");
}

$maintenanceq = mysqli_query($conn,"UPDATE sitesettings SET maintenance = 1") or die(mysqli_error($conn));

echo "done";

?>


