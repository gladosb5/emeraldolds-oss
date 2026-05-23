<?php
require_once __DIR__ . '/Database.php';

if (!function_exists('getClientIp')) {
    function getClientIp(): string
    {
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP']
            ?? ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? '')
            ?? $_SERVER['REMOTE_ADDR']
            ?? '0.0.0.0';

        if (strpos($ip, ',') !== false) {
            $parts = explode(',', $ip);
            $ip = trim($parts[0]);
        }

        return trim($ip);
    }
}

try {
    $db = new Database();
    $conn = $db->getConnection();
} catch (RuntimeException $e) {
    exit($e->getMessage());
}

$ip = getClientIp();

try {
    $ban = $db->selectOne('SELECT 1 FROM ipbans WHERE ip = ? LIMIT 1', 's', [$ip]);
} catch (Throwable $e) {
    $ban = null;
}

if ($ban !== null) {
    header('HTTP/1.1 403 Forbidden');
    exit();
}

// Ensure all database timestamps use Malaysia time (UTC+8)
date_default_timezone_set('Asia/Kuala_Lumpur');
