<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Content-type: text/plain");
$token = $_GET['token'];

exit(file_get_contents("../asset/places/$token.rbxl"));


