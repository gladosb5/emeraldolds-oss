<?php

declare(strict_types=1);

class Database
{
    private \mysqli $connection;
    private bool $profilingEnabled = false;
    private bool $collectParameters = false;

    /**
     * @var array<int, array<string, mixed>>
     */
    private array $queryLog = [];

    /**
     * @throws RuntimeException when the database connection fails.
     */
    public function __construct()
    {
        $this->bootEnvironment();
        $this->connection = @new \mysqli(
            getenv('DB_HOST') ?: 'localhost',
            getenv('DB_USER') ?: 'root',
            getenv('DB_PASS') ?: '',
            getenv('DB_NAME') ?: 'emeraldnews',
            0
        );

        if ($this->connection->connect_errno) {
            throw new RuntimeException('someone corrupted the database, brb.');
        }

        $this->connection->set_charset('utf8mb4');
        $this->connection->query("SET time_zone = '+08:00'");
    }

    public function getConnection(): \mysqli
    {
        return $this->connection;
    }

    public function run(string $sql, string $types = '', array $params = []): \mysqli_stmt
    {
        $start = $this->profilingEnabled ? microtime(true) : 0.0;

        $stmt = $this->connection->prepare($sql);
        if ($stmt === false) {
            if ($this->profilingEnabled) {
                $this->recordQuery($sql, $types, $params, $start, false, 'Failed to prepare database statement.');
            }
            throw new RuntimeException('Failed to prepare database statement.');
        }

        if ($types !== '' && !empty($params)) {
            $this->bindParams($stmt, $types, $params);
        }

        if (!$stmt->execute()) {
            $error = $stmt->error ?: 'Failed to execute database statement.';
            $stmt->close();
            if ($this->profilingEnabled) {
                $this->recordQuery($sql, $types, $params, $start, false, $error);
            }
            throw new RuntimeException('Failed to execute database statement.');
        }

        if ($this->profilingEnabled) {
            $this->recordQuery($sql, $types, $params, $start, true);
        }

        return $stmt;
    }

    public function select(string $sql, string $types = '', array $params = [], array $casts = []): array
    {
        $stmt = $this->run($sql, $types, $params);
        $result = $stmt->get_result();
        $rows = [];

        if ($result instanceof \mysqli_result) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $this->castRow($row, $casts);
            }
            $result->free();
        }

        $stmt->close();

        return $rows;
    }

    public function selectOne(string $sql, string $types = '', array $params = [], array $casts = []): ?array
    {
        $rows = $this->select($sql, $types, $params, $casts);
        return $rows[0] ?? null;
    }

    public function execute(string $sql, string $types = '', array $params = []): bool
    {
        $stmt = $this->run($sql, $types, $params);
        $stmt->close();
        return true;
    }

    public function enableProfiling(bool $withParameters = false): void
    {
        $this->profilingEnabled = true;
        $this->collectParameters = $withParameters;
    }

    public function disableProfiling(): void
    {
        $this->profilingEnabled = false;
        $this->collectParameters = false;
        $this->queryLog = [];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function getQueryLog(): array
    {
        return $this->queryLog;
    }

    public function getQueryCount(): int
    {
        return count($this->queryLog);
    }

    public function getTotalQueryTime(): float
    {
        return $this->getTotalQueryTimeMs() / 1000;
    }

    public function getTotalQueryTimeMs(): float
    {
        $total = 0.0;
        foreach ($this->queryLog as $entry) {
            $total += (float) ($entry['time_ms'] ?? 0.0);
        }

        return round($total, 3);
    }

    public function getProfilingSummary(): array
    {
        return [
            'count' => $this->getQueryCount(),
            'total_time_ms' => $this->getTotalQueryTimeMs(),
            'queries' => $this->queryLog,
        ];
    }

    private function recordQuery(string $sql, string $types, array $params, float $startTime, bool $success, string $error = ''): void
    {
        $durationMs = $startTime > 0 ? round((microtime(true) - $startTime) * 1000, 3) : 0.0;

        $entry = [
            'sql' => $sql,
            'time_ms' => $durationMs,
            'success' => $success,
        ];

        if ($this->collectParameters && $types !== '' && !empty($params)) {
            $entry['types'] = $types;
            $entry['params'] = $params;
        }

        if (!$success && $error !== '') {
            $entry['error'] = $error;
        }

        $this->queryLog[] = $entry;
    }

    private function bootEnvironment(): void
    {
        $envPath = dirname(__DIR__, 2) . '/.env';
        if (!is_file($envPath)) {
            return;
        }

        $envData = parse_ini_file($envPath, false, INI_SCANNER_RAW);
        if (!is_array($envData)) {
            return;
        }

        foreach ($envData as $key => $value) {
            if (getenv($key) !== false) {
                continue;
            }
            putenv("{$key}={$value}");
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }

    private function bindParams(\mysqli_stmt $stmt, string $types, array $params): void
    {
        $refs = [];
        foreach ($params as $key => $value) {
            $refs[$key] = &$params[$key];
        }

        array_unshift($refs, $types);
        if (!call_user_func_array([$stmt, 'bind_param'], $refs)) {
            throw new RuntimeException('Failed to bind parameters for database statement.');
        }
    }

    private function castRow(array $row, array $casts): array
    {
        foreach ($casts as $column => $type) {
            if (!array_key_exists($column, $row)) {
                continue;
            }

            switch ($type) {
                case 'int':
                    $row[$column] = (int) $row[$column];
                    break;
                case 'float':
                    $row[$column] = (float) $row[$column];
                    break;
                case 'bool':
                    $row[$column] = (bool) $row[$column];
                    break;
                default:
                    $row[$column] = $row[$column];
            }
        }

        return $row;
    }
}
