<?php

declare(strict_types=1);

require_once __DIR__ . '/sessionhandler.php';

function normalizeEmailForStorage(string $email): string
{
    return mb_strtolower(trim($email));
}

function hashEmailForStorage(string $email): string
{
    return md5(normalizeEmailForStorage($email));
}

function generateStarterPassword(): array
{
    $salt = '$2a$07$' . substr(bin2hex(random_bytes(32)), 0, 22) . '$';
    $passwordHash = crypt(bin2hex(random_bytes(32)), $salt);

    return [$passwordHash, $salt];
}

function generateUsernameCandidate(string $displayName, string $email): string
{
    $base = preg_replace('/[^a-zA-Z0-9]/', '', $displayName);

    if ($base === '') {
        $local = strstr($email, '@', true) ?: 'User';
        $base = preg_replace('/[^a-zA-Z0-9]/', '', $local);
    }

    if ($base === '') {
        $base = 'User';
    }

    return substr($base, 0, 20);
}

function generateUniqueUsername(Database $db, string $displayName, string $email): string
{
    $base = generateUsernameCandidate($displayName, $email);
    $candidate = $base;
    $suffix = 0;

    while (true) {
        $existing = $db->selectOne(
            'SELECT 1 FROM users WHERE username = ? LIMIT 1',
            's',
            [$candidate]
        );

        if ($existing === null) {
            return $candidate;
        }

        $suffix++;
        $suffixStr = (string) $suffix;
        $maxBaseLength = 20 - strlen($suffixStr);
        $candidate = substr($base, 0, $maxBaseLength) . $suffixStr;
    }
}

function seedStarterAssets(Database $db, int $userId): void
{
    $defaults = getenv('DEFAULT_AVATAR_ITEM_IDS');
    if ($defaults === false || trim($defaults) === '') {
        return;
    }

    $items = array_filter(array_map('trim', explode(',', $defaults)));
    if ($items === []) {
        return;
    }

    foreach ($items as $itemId) {
        $catalogRow = $db->selectOne(
            'SELECT id, type FROM catalog WHERE id = ? LIMIT 1',
            'i',
            [(int) $itemId]
        );

        if ($catalogRow === null) {
            continue;
        }

        $ownedId = null;
        $ownedRow = $db->selectOne(
            'SELECT id FROM owned_items WHERE ownerid = ? AND itemid = ? LIMIT 1',
            'ii',
            [$userId, (int) $catalogRow['id']],
            ['id' => 'int']
        );

        if ($ownedRow !== null) {
            $ownedId = (int) $ownedRow['id'];
        } else {
            $stmt = $db->run(
                'INSERT INTO owned_items (itemid, ownerid, type) VALUES (?, ?, ?)',
                'iis',
                [(int) $catalogRow['id'], $userId, (string) $catalogRow['type']]
            );
            $ownedId = $stmt->insert_id;
            $stmt->close();
        }

        $existingWear = $db->selectOne(
            'SELECT 1 FROM wear WHERE item = ? AND userid = ? LIMIT 1',
            'ii',
            [$ownedId, $userId]
        );

        if ($existingWear === null) {
            $db->execute('INSERT INTO wear (item, userid) VALUES (?, ?)', 'ii', [$ownedId, $userId]);
        }
    }
}

function ensureUserWithProfile(Database $db, string $email, string $displayName): array
{
    $normalizedEmail = normalizeEmailForStorage($email);
    $emailHash = hashEmailForStorage($normalizedEmail);

    $existing = $db->selectOne(
        'SELECT id, username FROM users WHERE email = ? LIMIT 1',
        's',
        [$emailHash],
        ['id' => 'int']
    );

    if ($existing !== null) {
        return $existing;
    }

    $username = generateUniqueUsername($db, $displayName, $normalizedEmail);
    [$passwordHash, $salt] = generateStarterPassword();

    $robux = 0;
    $tix = 15;
    $date = date('jS F Y');
    $administrator = 'no';
    $membershipType = 'None';
    $membershipExpire = 0;
    $lastSeen = time();
    $blurb = 'Hello, World!';
    $token = 'notset';
    $head = 24;
    $ra = 24;
    $torso = 21;
    $la = 24;
    $rl = 37;
    $ll = 37;
    $face = -1;
    $ip = 'notset';
    $nextTixReward = 0;
    $nextBuxReward = 0;
    $isBeta = 1;
    $knockouts = 0;
    $wipeouts = 0;
    $discordId = 0;

    $stmt = $db->run(
        'INSERT INTO users (username, password_hash, password_salt, email, robux, tix, JoinDate, administrator, MembershipType, MembershipExpire, lastseen, blurb, token, Head, RA, Torso, LA, RL, LL, face, IP, next_tix_reward, next_bux_reward, isBeta, Knockouts, Wipeouts, discordId)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        'ssssiisssiissiiiiiiisiiiiii',
        [
            $username,
            $passwordHash,
            $salt,
            $emailHash,
            $robux,
            $tix,
            $date,
            $administrator,
            $membershipType,
            $membershipExpire,
            $lastSeen,
            $blurb,
            $token,
            $head,
            $ra,
            $torso,
            $la,
            $rl,
            $ll,
            $face,
            $ip,
            $nextTixReward,
            $nextBuxReward,
            $isBeta,
            $knockouts,
            $wipeouts,
            $discordId,
        ]
    );

    $userId = $stmt->insert_id;
    $stmt->close();

    seedStarterAssets($db, $userId);

    return [
        'id' => $userId,
        'username' => $username,
    ];
}

