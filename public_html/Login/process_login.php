<?php
if (!function_exists('emerald_process_login')) {
    function emerald_process_login(array $p, mysqli $c, ExploitPatch $e, Check $k): array
    {
        $r = [
            's' => 'idle',
            'm' => '',
            'e' => [],
            'v' => ['UserName' => ''],
            'r' => false,
            'u' => '/',
        ];

        if (!isset($p['LoginButton'])) {
            return $r;
        }

        $u = trim($e->remove((string)($p['UserName'] ?? '')));
        $pw = $e->remove((string)($p['Password'] ?? ''));

        $r['v']['UserName'] = $u;

        if ($u === '') {
            $r['e']['SignIn_UserName'] = 'Enter your username.';
        } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $u) || $k->hasProfanity($u)) {
            $r['e']['SignIn_UserName'] = 'Usernames can only include letters and numbers.';
        }

        if ($pw === '') {
            $r['e']['SignIn_Password'] = 'Enter your password.';
        }

        if ($r['e'] !== []) {
            $r['s'] = 'error';
            $r['m'] = 'Please correct the highlighted fields and try again.';

            return $r;
        }

        $q = $c->prepare('SELECT id, username, password_hash, password_salt FROM users WHERE username = ? LIMIT 1');

        if ($q === false) {
            $r['s'] = 'error';
            $r['m'] = 'Something went wrong. Please try again later.';

            return $r;
        }

        $q->bind_param('s', $u);
        $q->execute();
        $res = $q->get_result();
        $usr = $res !== false ? $res->fetch_assoc() : null;
        $q->close();

        if (!$usr) {
            $r['s'] = 'error';
            $r['m'] = 'Username or password incorrect.';

            return $r;
        }

        $hash = crypt($pw, $usr['password_salt']);

        if (!hash_equals((string)$usr['password_hash'], (string)$hash)) {
            $r['s'] = 'error';
            $r['m'] = 'Username or password incorrect.';

            return $r;
        }

        $fc = md5(uniqid('', true));
        $sid = generateRandomString(128);
        $ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

        $ff = trim((string)($_SERVER['HTTP_X_FORWARDED_FOR'] ?? ''));
        $ff = $ff !== '' ? trim(explode(',', $ff)[0]) : null;

        $loc = $_SERVER['HTTP_CF_CONNECTING_IP']
            ?? $ff
            ?? $_SERVER['REMOTE_ADDR']
            ?? '0.0.0.0';

        $ss = $c->prepare('INSERT INTO `sessions` (`userId`, `sessionId`, `csrfToken`, `useragent`, `location`) VALUES (?, ?, ?, ?, ?)');

        if ($ss === false) {
            $r['s'] = 'error';
            $r['m'] = 'Something went wrong. Please try again later.';

            return $r;
        }

        $ss->bind_param('issss', $usr['id'], $sid, $fc, $ua, $loc);
        $ss->execute();
        $ss->close();

        if (isset($_COOKIE['auth_uid']) || isset($_COOKIE['a_id'])) {
            setcookie('auth_uid', '', time() - 3600, '/', '.emeraldolds.glados.pro', false, true);
            setcookie('a_id', '', time() - 3600, '/', '.emeraldolds.glados.pro', false, true);
        }

        setcookie('auth_uid', $usr['id'], time() + (86400 * 30), '/', '.emeraldolds.glados.pro', false, true);
        setcookie('a_id', $sid, time() + (86400 * 30), '/', '.emeraldolds.glados.pro', false, true);

        $r['s'] = 'success';
        $r['m'] = '';
        $r['r'] = true;

        return $r;
    }
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' && realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'] ?? '')) {
    include $_SERVER['DOCUMENT_ROOT'] . '/api/includes.php';

    $res = emerald_process_login($_POST, $conn, $ep, $ch);

    if ($res['s'] === 'success' && $res['r']) {
        header('Location: ' . $res['u']);
        exit;
    }

    header('Content-Type: application/json');
    echo json_encode($res);
    exit;
}
