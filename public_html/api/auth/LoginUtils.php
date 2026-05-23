<?php

declare(strict_types=1);

require_once __DIR__ . '/../database/Database.php';

class LoginThrottler
{
    private const TABLE_NAME = 'login_throttle';

    private Database $db;
    private int $maxAttempts;
    private int $windowSeconds;
    private int $lockoutSeconds;

    public function __construct(Database $db, int $maxAttempts = 5, int $windowSeconds = 300, int $lockoutSeconds = 900)
    {
        $this->db = $db;
        $this->maxAttempts = $maxAttempts;
        $this->windowSeconds = $windowSeconds;
        $this->lockoutSeconds = $lockoutSeconds;

        $this->ensureTable();
    }

    public function check(string $ip, string $username): array
    {
        $identifierUser = $this->normalizeUsername($username);
        $now = time();

        $entries = $this->db->select(
            'SELECT scope, attempts, UNIX_TIMESTAMP(last_attempt) AS last_attempt, UNIX_TIMESTAMP(locked_until) AS locked_until
             FROM ' . self::TABLE_NAME . ' WHERE (scope = ? AND identifier = ?) OR (scope = ? AND identifier = ?)',
            'ssss',
            ['ip', $ip, 'user', $identifierUser],
            ['attempts' => 'int', 'last_attempt' => 'int', 'locked_until' => 'int']
        );

        $retryAfter = 0;
        $allowed = true;

        foreach ($entries as $entry) {
            if (!empty($entry['locked_until']) && $entry['locked_until'] > $now) {
                $allowed = false;
                $retryAfter = max($retryAfter, $entry['locked_until'] - $now);
                continue;
            }

            if ($entry['attempts'] >= $this->maxAttempts) {
                $timeSinceLast = $now - (int) $entry['last_attempt'];
                if ($timeSinceLast < $this->windowSeconds) {
                    $allowed = false;
                    $retryAfter = max($retryAfter, $this->windowSeconds - $timeSinceLast);
                }
            }
        }

        return [
            'allowed' => $allowed,
            'retry_after' => $retryAfter,
        ];
    }

    public function registerAttempt(string $ip, string $username, bool $success): void
    {
        $identifierUser = $this->normalizeUsername($username);
        $now = date('Y-m-d H:i:s');

        $scopes = [
            ['scope' => 'ip', 'identifier' => $ip],
            ['scope' => 'user', 'identifier' => $identifierUser],
        ];

        foreach ($scopes as $scope) {
            if ($success) {
                $this->db->execute(
                    'INSERT INTO ' . self::TABLE_NAME . ' (scope, identifier, attempts, last_attempt, locked_until)
                     VALUES (?, ?, 0, ?, NULL)
                     ON DUPLICATE KEY UPDATE attempts = 0, last_attempt = VALUES(last_attempt), locked_until = NULL',
                    'sss',
                    [$scope['scope'], $scope['identifier'], $now]
                );
                continue;
            }

            $this->db->execute(
                'INSERT INTO ' . self::TABLE_NAME . ' (scope, identifier, attempts, last_attempt, locked_until)
                 VALUES (?, ?, 1, ?, NULL)
                 ON DUPLICATE KEY UPDATE
                    attempts = attempts + 1,
                    last_attempt = VALUES(last_attempt),
                    locked_until = CASE WHEN attempts + 1 >= ? THEN DATE_ADD(VALUES(last_attempt), INTERVAL ? SECOND) ELSE NULL END',
                'sssii',
                [$scope['scope'], $scope['identifier'], $now, $this->maxAttempts, $this->lockoutSeconds]
            );
        }
    }

    private function ensureTable(): void
    {
        $this->db->execute(
            'CREATE TABLE IF NOT EXISTS ' . self::TABLE_NAME . ' (
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                scope ENUM("ip", "user") NOT NULL,
                identifier VARCHAR(191) NOT NULL,
                attempts INT UNSIGNED NOT NULL DEFAULT 0,
                last_attempt DATETIME NOT NULL,
                locked_until DATETIME NULL,
                UNIQUE KEY unique_scope_identifier (scope, identifier),
                KEY idx_last_attempt (last_attempt)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci'
        );
    }

    private function normalizeUsername(string $username): string
    {
        $username = trim($username);
        return $username !== '' ? mb_strtolower($username) : '__anonymous__';
    }
}

function logAuthAttempt(string $status, array $context = []): void
{
    $payload = array_merge(
        [
            'event' => 'login_attempt',
            'status' => $status,
            'timestamp' => gmdate('c'),
        ],
        $context
    );

    $message = '[AUTH] ' . json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    error_log($message);
}
