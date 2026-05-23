# EmeraldNews API Helpers

## Database access
- `api/database/Database.php` exposes a lightweight wrapper that loads environment configuration, enforces UTF-8 connections, and normalises prepared statement usage.
- Helpers:
  - `Database::run()` executes prepared statements with bound parameters.
  - `Database::select()` / `selectOne()` return associative arrays with optional type casting via the `$casts` argument (supports `int`, `float`, `bool`).
  - `Database::execute()` runs write operations and throws on preparation/execution errors.
- Include `api/database/connect.php` to bootstrap a shared `Database` instance (`$db`) and legacy `mysqli` handle (`$conn`).

## Authentication helpers
- `api/auth/sessionhandler.php` now owns session lifecycle logic:
  - `createUserSession(Database $db, int $userId)` rotates cookies, issues fresh CSRF/session tokens, and records metadata.
  - `destroySessionCookies()` centralises cookie invalidation, used for logouts and bootstrap failures.
  - `loadActiveSession(Database $db)` powers the request bootstrap, updating last-seen metadata while avoiding redundant writes.
- `api/auth/LoginUtils.php` adds:
  - `LoginThrottler` with per-IP and per-username quotas (default: 5 attempts / 5 minutes, 15 minute lockout). It creates the `login_throttle` table on demand.
  - `logAuthAttempt()` writes structured JSON to PHP's error log for monitoring.

## Legacy `.aspx` routes
- Compatibility shims (`Login/Default.aspx`, `Login/Defaultcaptcha.aspx`) proxy to the modern PHP endpoints so existing rewrites can be retired safely in a future cleanup.
- When adding new entry points, prefer creating the PHP script and—if a legacy path must exist—adding a thin `.aspx` wrapper that simply `require`s it.
