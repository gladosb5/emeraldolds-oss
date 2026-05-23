<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/core/database.php");
$apikey = getenv('SERVER_API_KEY') ?: 'your_api_key_here';
if($_REQUEST["apikey"] !== $apikey) exit("Wrong API Key!");


