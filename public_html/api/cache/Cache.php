<?php

class Cache
{
    private const DEFAULT_TTL = 60;

    /**
     * @var array<string, mixed>
     */
    private static array $memory = [];

    private static ?string $directory = null;

    public static function remember(string $key, int $ttl, callable $resolver, bool $persist = true)
    {
        if (isset(self::$memory[$key])) {
            return self::$memory[$key];
        }

        $payload = $persist ? self::readFromDisk($key) : null;
        if ($payload !== null && $payload['expires'] >= time()) {
            self::$memory[$key] = $payload['value'];
            return $payload['value'];
        }

        $value = $resolver();
        self::$memory[$key] = $value;

        if ($persist && $ttl > 0) {
            self::writeToDisk($key, $value, $ttl);
        }

        return $value;
    }

    public static function rememberForRequest(string $key, callable $resolver)
    {
        return self::remember($key, self::DEFAULT_TTL, $resolver, false);
    }

    public static function forget(string $key): void
    {
        unset(self::$memory[$key]);

        $file = self::filePath($key);
        if ($file !== null && is_file($file)) {
            @unlink($file);
        }
    }

    public static function clear(): void
    {
        self::$memory = [];

        $directory = self::cacheDirectory();
        if ($directory === null) {
            return;
        }

        foreach (glob($directory . DIRECTORY_SEPARATOR . '*.cache') ?: [] as $file) {
            @unlink($file);
        }
    }

    /**
     * @return array{expires:int,value:mixed}|null
     */
    private static function readFromDisk(string $key): ?array
    {
        $file = self::filePath($key);
        if ($file === null || !is_file($file)) {
            return null;
        }

        $contents = @file_get_contents($file);
        if ($contents === false || $contents === '') {
            return null;
        }

        $payload = @unserialize($contents);
        if (!is_array($payload) || !isset($payload['expires'])) {
            return null;
        }

        return $payload;
    }

    private static function writeToDisk(string $key, $value, int $ttl): void
    {
        $directory = self::cacheDirectory();
        if ($directory === null) {
            return;
        }

        $file = $directory . DIRECTORY_SEPARATOR . self::hashKey($key) . '.cache';
        $payload = [
            'expires' => time() + $ttl,
            'value' => $value,
        ];

        @file_put_contents($file, serialize($payload), LOCK_EX);
    }

    private static function filePath(string $key): ?string
    {
        $directory = self::cacheDirectory();
        if ($directory === null) {
            return null;
        }

        return $directory . DIRECTORY_SEPARATOR . self::hashKey($key) . '.cache';
    }

    private static function cacheDirectory(): ?string
    {
        if (getenv('CACHE_DISABLE_FILE') === '1') {
            return null;
        }

        if (self::$directory !== null) {
            return self::$directory;
        }

        $directory = dirname(__DIR__) . '/cache/storage';
        if (!is_dir($directory) && !@mkdir($directory, 0775, true) && !is_dir($directory)) {
            return null;
        }

        if (!is_writable($directory)) {
            return null;
        }

        self::$directory = $directory;
        return $directory;
    }

    private static function hashKey(string $key): string
    {
        return hash('sha1', $key);
    }
}
