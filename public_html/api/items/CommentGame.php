<?php
// File: /api/items/CommentGame.php
include $_SERVER['DOCUMENT_ROOT'] . '/api/includes.php';
header('Content-Type: text/plain; charset=UTF-8');

if ($logged === 'no') { http_response_code(401); echo 'You must be logged in.'; exit; }

// CONFIG — change this to your actual comments table name
$TABLE = 'games_comments'; // try 'comments' if yours differs

$userId = (int)($_USER['id'] ?? 0);
$item   = isset($_POST['item']) ? (int)$_POST['item'] : 0;
$content = isset($_POST['content']) ? trim($_POST['content']) : '';
$replyTo = isset($_POST['reply_to']) && $_POST['reply_to'] !== '' ? (int)$_POST['reply_to'] : 0;

if ($item <= 0) { http_response_code(400); echo 'Invalid item.'; exit; }
if ($content === '') { http_response_code(400); echo 'Empty comment.'; exit; }

// basic length clamp
if (mb_strlen($content) > 4000) { $content = mb_substr($content, 0, 4000); }

$now = date('Y-m-d H:i:s');

// Escape text for SQL (keeping your style)
$esc = mysqli_real_escape_string($conn, $content);
$sql = "INSERT INTO `$TABLE` (`item_id`,`user_id`,`content`,`reply_to`,`created_at`) VALUES ('$item','$userId','$esc','$replyTo','$now')";

if (!mysqli_query($conn, $sql)) {
    // If table name wrong, try a common fallback once
    if (mysqli_errno($conn) == 1146) { // table doesn't exist
        $TABLE = 'comments';
        $sql = "INSERT INTO `$TABLE` (`item_id`,`user_id`,`content`,`reply_to`,`created_at`) VALUES ('$item','$userId','$esc','$replyTo','$now')";
        if (!mysqli_query($conn, $sql)) {
            http_response_code(500);
            echo 'DB error: ' . mysqli_error($conn);
            exit;
        }
    } else {
        http_response_code(500);
        echo 'DB error: ' . mysqli_error($conn);
        exit;
    }
}

echo 'Success';
exit;
?>
