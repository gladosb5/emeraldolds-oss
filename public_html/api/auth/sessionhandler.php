<?php
$logged = "no";
$csrf_token = null;
$_USER = [];
$unreadmessages = 0;

function sessionCookieDomain(): string
{
    $host = $_SERVER['HTTP_HOST'] ?? 'emeraldolds.glados.pro';
    if ($host === 'localhost' || strpos($host, '.') === false) {
        return '';
    }
    return '.' . ltrim($host, '.');
}

function destroySessionCookies(): void
{
    $domain = sessionCookieDomain();
    setcookie('auth_uid', '', time() - 3600, '/', $domain, false, true);
    setcookie('a_id', '', time() - 3600, '/', $domain, false, true);
}

function generateTokenBytes(int $length = 32): string
{
    return bin2hex(random_bytes($length));
}

function createUserSession(Database $db, int $userId): array
{
    $sessionId = generateTokenBytes(32);
    $csrfToken = generateTokenBytes(32);
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
    $ip = getClientIp();

    $db->execute(
        'INSERT INTO sessions (userId, sessionId, csrfToken, useragent, location, lastUsed)
         VALUES (?, ?, ?, ?, ?, NOW())',
        'issss',
        [$userId, $sessionId, $csrfToken, $userAgent, $ip]
    );

    destroySessionCookies();
    $expiry = time() + (86400 * 30);
    $domain = sessionCookieDomain();
    setcookie('auth_uid', (string) $userId, $expiry, '/', $domain, false, true);
    setcookie('a_id', $sessionId, $expiry, '/', $domain, false, true);

    return [
        'sessionId' => $sessionId,
        'csrfToken' => $csrfToken,
    ];
}

function refreshSessionRecord(Database $db, array $sessionRow, string $ip, string $userAgent): array
{
    $rotationInterval = 900; // 15 minutes
    $lastUsedTs = strtotime($sessionRow['lastUsed'] ?? '') ?: 0;
    $shouldRotate = (time() - $lastUsedTs) >= $rotationInterval
        || ($sessionRow['location'] ?? '') !== $ip
        || ($sessionRow['useragent'] ?? '') !== $userAgent;

    $sessionId = $sessionRow['sessionId'];
    $csrfToken = $sessionRow['csrfToken'];
    $domain = sessionCookieDomain();
    $expiry = time() + (86400 * 30);

    if ($shouldRotate) {
        $sessionId = generateTokenBytes(32);
        $csrfToken = generateTokenBytes(32);
        $db->execute(
            'UPDATE sessions SET sessionId = ?, csrfToken = ?, useragent = ?, location = ?, lastUsed = NOW() WHERE id = ?',
            'ssssi',
            [$sessionId, $csrfToken, $userAgent, $ip, (int) $sessionRow['id']]
        );
        setcookie('auth_uid', (string) $sessionRow['userId'], $expiry, '/', $domain, false, true);
        setcookie('a_id', $sessionId, $expiry, '/', $domain, false, true);
    } else {
        $fields = ['lastUsed = NOW()'];
        $types = '';
        $params = [];
        if (($sessionRow['useragent'] ?? '') !== $userAgent) {
            $fields[] = 'useragent = ?';
            $types .= 's';
            $params[] = $userAgent;
        }
        if (($sessionRow['location'] ?? '') !== $ip) {
            $fields[] = 'location = ?';
            $types .= 's';
            $params[] = $ip;
        }

        $types .= 'i';
        $params[] = (int) $sessionRow['id'];
        $db->execute('UPDATE sessions SET ' . implode(', ', $fields) . ' WHERE id = ?', $types, $params);
    }

    return [
        'sessionId' => $sessionId,
        'csrfToken' => $csrfToken,
    ];
}

function loadActiveSession(Database $db): array
{
    $state = [
        'logged' => false,
        'user' => [],
        'csrf' => null,
        'unread_messages' => 0,
    ];

    if (!isset($_COOKIE['auth_uid'], $_COOKIE['a_id'])) {
        return $state;
    }

    $userId = filter_var($_COOKIE['auth_uid'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $sessionToken = $_COOKIE['a_id'];

    if ($userId === false || !is_string($sessionToken) || $sessionToken === '') {
        destroySessionCookies();
        return $state;
    }

    $session = $db->selectOne(
        'SELECT id, userId, sessionId, csrfToken, location, useragent, lastUsed
         FROM sessions WHERE userId = ? AND sessionId = ? LIMIT 1',
        'is',
        [$userId, $sessionToken],
        ['id' => 'int', 'userId' => 'int']
    );

    if ($session === null) {
        destroySessionCookies();
        return $state;
    }

    $lastUsedTs = strtotime($session['lastUsed'] ?? '') ?: 0;
    $minutesSince = (time() - $lastUsedTs) / 60;
    if ($minutesSince > 1440) {
        $db->execute('DELETE FROM sessions WHERE id = ?', 'i', [(int) $session['id']]);
        destroySessionCookies();
        return $state;
    }

    $user = $db->selectOne('SELECT * FROM users WHERE id = ? LIMIT 1', 'i', [(int) $session['userId']]);
    if ($user === null) {
        $db->execute('DELETE FROM sessions WHERE id = ?', 'i', [(int) $session['id']]);
        destroySessionCookies();
        return $state;
    }

    $ip = getClientIp();
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

    $tokens = refreshSessionRecord($db, $session, $ip, $userAgent);
    $csrfToken = $tokens['csrfToken'];

    $ipHash = md5($ip);
    if (!isset($user['IP']) || $user['IP'] !== $ipHash) {
        $db->execute('UPDATE users SET IP = ? WHERE id = ?', 'si', [$ipHash, (int) $user['id']]);
        $user['IP'] = $ipHash;
    }

    $now = time();
    $db->execute('UPDATE users SET lastseen = ? WHERE id = ?', 'ii', [$now, (int) $user['id']]);
    $user['lastseen'] = $now;

    if ((int) ($user['next_tix_reward'] ?? 0) < $now) {
        $nextReward = $now + 86400;
        $db->execute('UPDATE users SET tix = tix + ?, next_tix_reward = ? WHERE id = ?', 'iii', [15, $nextReward, (int) $user['id']]);
        $user['tix'] = (int) ($user['tix'] ?? 0) + 15;
        $user['next_tix_reward'] = $nextReward;
    }

    if (($user['MembershipType'] ?? '') === 'BuildersClub') {
        if ((int) ($user['MembershipExpire'] ?? 0) <= $now) {
            $db->execute("UPDATE users SET MembershipType = 'None' WHERE id = ?", 'i', [(int) $user['id']]);
            $user['MembershipType'] = 'None';
        } else {
            if ((int) ($user['next_bux_reward'] ?? 0) < $now) {
                $nextBux = $now + 86400;
                $db->execute('UPDATE users SET robux = robux + ?, next_bux_reward = ? WHERE id = ?', 'iii', [15, $nextBux, (int) $user['id']]);
                $user['robux'] = (int) ($user['robux'] ?? 0) + 15;
                $user['next_bux_reward'] = $nextBux;
            }

            $owned = $db->selectOne(
                'SELECT 1 FROM owned_items WHERE itemid = ? AND ownerid = ? LIMIT 1',
                'ii',
                [29, (int) $user['id']]
            );
            if ($owned === null) {
                $db->execute('INSERT INTO owned_items (itemid, ownerid, type) VALUES (?, ?, ?)', 'iis', [29, (int) $user['id'], 'hat']);
            }
        }
    }

    $currentUri = $_SERVER['REQUEST_URI'] ?? '';
    if (!in_array($currentUri, ['/Membership/NotApproved.aspx', '/Membership/Reactivate.ashx'], true)) {
        $ban = $db->selectOne('SELECT 1 FROM bans WHERE userid = ? LIMIT 1', 'i', [(int) $user['id']]);
        if ($ban !== null) {
            header('Location: /Membership/NotApproved.aspx');
            exit();
        }
    }

    if (($user['administrator'] ?? '') === 'yes') {
        $hasBadge = $db->selectOne('SELECT 1 FROM ownedbadges WHERE userid = ? AND badgeid = ? LIMIT 1', 'ii', [(int) $user['id'], 2]);
        if ($hasBadge === null) {
            $db->execute('INSERT INTO ownedbadges (badgeid, userid) VALUES (?, ?)', 'ii', [2, (int) $user['id']]);
        }
    }

    $unread = $db->selectOne(
        'SELECT COUNT(*) AS total FROM messages WHERE user_to = ? AND reada = 0 AND deleted = 0',
        'i',
        [(int) $user['id']],
        ['total' => 'int']
    );

    $state['logged'] = true;
    $state['user'] = $user;
    $state['csrf'] = $csrfToken;
    $state['unread_messages'] = $unread['total'] ?? 0;

    return $state;
}

try {
    $sessionState = loadActiveSession($db);
    if ($sessionState['logged']) {
        $logged = 'yes';
        $_USER = $sessionState['user'];
        $_CSRF = $sessionState['csrf'];
        $unreadmessages = $sessionState['unread_messages'];
        $csrf_token = $_CSRF;
    } else {
        $logged = 'no';
        $_USER = [];
        $_CSRF = md5($_SERVER['REMOTE_ADDR'] ?? '');
        $csrf_token = $_CSRF;
        destroySessionCookies();
    }
} catch (Throwable $sessionBootstrapError) {
    error_log('[SESSION] ' . $sessionBootstrapError->getMessage());
    $logged = 'no';
    $_USER = [];
    $_CSRF = md5($_SERVER['REMOTE_ADDR'] ?? '');
    $csrf_token = $_CSRF;
    $unreadmessages = 0;
    destroySessionCookies();
}
