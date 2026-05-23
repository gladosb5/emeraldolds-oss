<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

require_once __DIR__ . '/Login/process_login.php';

$ls = [
    's' => 'idle',
    'm' => '',
    'e' => [],
    'r' => false,
    'u' => '/',
    'v' => ['UserName' => ''],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ls = emerald_process_login($_POST, $conn, $ep, $ch);

    if ($ls['s'] === 'success' && $ls['r'] === true) {
        header('Location: ' . $ls['u']);
        exit;
    }
}

$ls['a'] = ($logged === 'yes');

$ms = ["hi", "heyy", "hey.", "HAI", "helllo", "good morning malaysia! ", "hmmm hello!", "you seem nice", "whar"];

if (!isset($_SESSION['im'])) {
    $_SESSION['im'] = 0;
} else {
    $_SESSION['im'] = ($_SESSION['im'] + 1) % count($ms);
}
$m = $ms[$_SESSION['im']];

$hc = [
    'h' => $ls['a'] && isset($_USER['username'])
        ? sprintf('%s, %s', $m, $_USER['username'])
        : 'emeraldNews',
    's' => '6 emerald is chaotic!!!!!',
];

$f = [
    [
        't' => 'Check out news',
        'd' => 'Read the latest updates from 6 emerald and stay in the loop with class events.',
    ],
    [
        't' => 'Visit the forums',
        'd' => 'Jump into discussions, make new friends, and share your thoughts (kindly!).',
    ],
    [
        't' => 'Comment on posts',
        'd' => 'Leave feedback, react to stories, and bookmark your favourite news pieces.',
    ],
];
?>
<title>emeraldnews</title>
<div id="Body" class="home-body">
    <div id="SplashContainer" class="home-layout">
        <?php include __DIR__ . '/views/home/login-form.php'; ?>
        <?php include __DIR__ . '/views/home/hero.php'; ?>
    </div>
    <?php include __DIR__ . '/views/home/facts.php'; ?>
</div>

<div id="UserPlacesPane" class="sr-only" aria-hidden="true"></div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
