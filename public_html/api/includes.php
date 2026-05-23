<?php
error_reporting(0);
/*
if(!isset($_COOKIE["accessGranted2"])){
  die("no");
}*/

date_default_timezone_set('Asia/Kuala_Lumpur');

// This is the includes that's needed for the site running.

include $_SERVER["DOCUMENT_ROOT"]."/api/database/connect.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/api/cache/Cache.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/files/context.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/auth/sessionhandler.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/chat/chatfilter.php";

$shouldProfile = (isset($_GET['__profile']) && $_GET['__profile'] !== '0') || getenv('DB_PROFILE') === '1';
if ($shouldProfile) {
    $db->enableProfiling(getenv('DB_PROFILE_PARAMS') === '1');
    register_shutdown_function(static function () use ($db) {
        $summary = $db->getProfilingSummary();
        if (!headers_sent()) {
            header('X-DB-Query-Count: ' . $summary['count']);
            header('X-DB-Query-Time-Ms: ' . $summary['total_time_ms']);
        }

        $encoded = json_encode($summary, JSON_PRETTY_PRINT);
        if ($encoded !== false) {
            error_log('[DB_PROFILE] ' . $encoded);
        }
    });
}

$ep = new ExploitPatch();
$ch = new Check();

// Start output buffering and apply the chat filter
ob_start(function($buffer) {
    return filterChatContent($buffer);
});
<?php if(getenv('ADS_ENABLED') === 'true' && getenv('AD_SCRIPT_URL_1')): ?>
<script src="<?php echo htmlspecialchars(getenv('AD_SCRIPT_URL_1')); ?>"></script>
<?php endif; ?>
