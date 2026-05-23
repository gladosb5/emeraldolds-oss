<?php

/*
session_start();
$_SESSION = array();
session_destroy();
header("location: /");*/

require 'api/includes.php';

if (!$logged == "yes") {
		header("Location: /");
		exit;
	}
// Destroy session
$selectQuery = 'SELECT * FROM sessions WHERE userId = ? AND sessionId = ?';
$selectStmt = $conn->prepare($selectQuery);
$selectStmt->bind_param('is', $_COOKIE['auth_uid'], $_COOKIE['a_id']);
$selectStmt->execute();
$resultSession = $selectStmt->get_result()->fetch_assoc();
$sessionId = $resultSession['id'];

// DELETE query
$deleteQuery = 'DELETE FROM sessions WHERE id=?';
$deleteStmt = $conn->prepare($deleteQuery);
$deleteStmt->bind_param('i', $sessionId);
$deleteStmt->execute();
	
unset($_COOKIE['auth_uid']);
unset($_COOKIE['a_id']);
setcookie('auth_uid', "", time() - 3600);
setcookie('a_id', "", time() - 3600);

header("Location: /");
exit;
?>



