# EmeraldNews OSS

An open-source version of **EmeraldNews** — a news web application (originally built for class 6 Emerald). This codebase powers the archived site at [emeraldolds.glados.pro](https://emeraldolds.glados.pro).

> ⚠️ **Warning:** This codebase is no longer maintained and is provided as-is for archival/educational purposes. No bug fixes or updates should be expected. The actively maintained version lives at [emeraldnews.glados.pro](https://emeraldnews.glados.pro).

---

## 📋 Table of Contents

- [System Requirements](#system-requirements)
- [Quick Start](#quick-start)
- [Step 1: Web Server Setup](#step-1-web-server-setup)
- [Step 2: Database Setup](#step-2-database-setup)
- [Step 3: Environment Configuration](#step-3-environment-configuration)
- [Step 4: File Permissions](#step-4-file-permissions)
- [Step 5: Verify Installation](#step-5-verify-installation)
- [Optional: Database Indexes](#optional-database-indexes)
- [Environment Variable Reference](#environment-variable-reference)
- [Project Structure](#project-structure)
- [Troubleshooting](#troubleshooting)

---

## System Requirements

| Requirement | Minimum |
|-------------|---------|
| **Web Server** | Apache 2.4+ with `mod_rewrite`, `mod_headers`, `mod_expires`, `mod_deflate` |
| **PHP** | 8.0+ (uses typed properties, `str_ends_with`, `str_contains`, null coalescing, etc.) |
| **Database** | MySQL 5.7+ or MariaDB 10.3+ |
| **PHP Extensions** | `mysqli`, `openssl`, `curl`, `mbstring`, `gd`, `json` |

---

## Quick Start

```bash
# 1. Clone the repository
git clone https://github.com/your-org/emeraldolds-oss.git
cd emeraldolds-oss

# 2. Import the database
mysql -u root -p < emeraldoldsdatabase.sql

# 3. Configure your .env file
# (copy the config below into public_html/.env)

# 4. Ensure cache directory is writable
chmod -R 775 public_html/api/cache/storage

# 5. Point your Apache document root to public_html/
# and restart Apache
```

---

## Step 1: Web Server Setup

### Apache Configuration

The project ships with a `.htaccess` file that handles URL rewriting and security headers. To use it:

1. **Point your DocumentRoot** to the `public_html/` directory:

   ```apache
   <VirtualHost *:80>
       ServerName emeraldnews.local
       DocumentRoot "/var/www/emeraldolds-oss/public_html"
       
       <Directory "/var/www/emeraldolds-oss/public_html">
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

2. **Enable required Apache modules:**

   ```bash
   sudo a2enmod rewrite headers expires deflate
   sudo systemctl restart apache2
   ```

3. **Verify `.htaccess` overrides are allowed.** The file at `public_html/.htaccess` handles:
   - `.env` file protection (blocks access to any `.env*` files)
   - Security headers (CSP, HSTS, X-Frame-Options, etc.)
   - Browser caching for static assets (images, CSS, JS, fonts)
   - GZIP compression
   - URL rewriting (`.php` extension hiding, `.aspx` → `.php`, `.ashx` → `.php`, `.html` → `.php` shims)
   - Custom 404 error page

### PHP Configuration

Ensure the following PHP settings are adequate in your `php.ini`:

```ini
upload_max_filesize = 100M
post_max_size = 100M
max_execution_time = 120
memory_limit = 256M
```

---

## Step 2: Database Setup

### Import the Schema

The database schema is provided in the project root as `emeraldoldsdatabase.sql`.

```bash
# Create the database
mysql -u root -p -e "CREATE DATABASE emeraldnews CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Import the schema and data
mysql -u root -p emeraldnews < emeraldoldsdatabase.sql
```

### Database Connection

The codebase uses a custom `Database` class with prepared statements. The connection is bootstrapped in `public_html/api/database/connect.php` and configured via environment variables (see [Step 3](#step-3-environment-configuration)).

The `Database` class (`public_html/api/database/Database.php`):
- Reads configuration from environment variables (with sensible defaults)
- Loads environment variables from a `.env` file if present
- Enforces UTF-8 charset (`utf8mb4`)
- Sets time zone to `Asia/Kuala_Lumpur` (UTC+8)
- Supports optional query profiling via `DB_PROFILE` environment variable

---

## Step 3: Environment Configuration

The application reads configuration from **environment variables**. You can set them via:

- A `.env` file in the `public_html/` directory (recommended for local dev)
- Server environment variables (recommended for production)

### Create the `.env` file

Create `public_html/.env` with the following:

```ini
# ─── Database ─────────────────────────────────────────────
DB_HOST=localhost
DB_USER=root
DB_PASS=your_database_password
DB_NAME=emeraldnews

# ─── Google OAuth (optional) ─────────────────────────────
# Used for Google login at /Login/callback.php
# NOTE: The current code restricts logins to @axcel.edu.my emails only.
GOOGLE_CLIENT_ID=your_google_client_id
GOOGLE_CLIENT_SECRET=your_google_client_secret
GOOGLE_REDIRECT_URI=http://localhost/Login/callback.php

# ─── Discord Webhooks (optional) ─────────────────────────
# Notifications for catalog purchases
DISCORD_WEBHOOK_URL_CATALOG=https://discord.com/api/webhooks/...
# Notifications for RCC server going down
DISCORD_WEBHOOK_URL_RCC=https://discord.com/api/webhooks/...

# ─── Maintenance Mode (optional) ─────────────────────────
# A passkey to bypass the maintenance screen
MAINTENANCE_KEY=your_secret_maintenance_key

# ─── Advertising (optional) ──────────────────────────────
# Enable/disable ads
ADS_ENABLED=false
# Ad script URLs and keys (used in header/footer)
AD_SCRIPT_URL_HEADER=https://example.com/ad.js
AD_KEY_HEADER=your_ad_key
AD_SCRIPT_URL_1=https://example.com/ad2.js

# ─── Database Profiling (optional) ───────────────────────
# Enable query profiling (appends X-DB-* headers and error_log output)
DB_PROFILE=0
# Include query parameters in profiling output
DB_PROFILE_PARAMS=0

# ─── File Cache (optional) ───────────────────────────────
# Disable file-based caching (uses in-memory only)
CACHE_DISABLE_FILE=0

# ─── Starter Items (optional) ────────────────────────────
# Comma-separated list of catalog item IDs to give new users
DEFAULT_AVATAR_ITEM_IDS=24,21,37
```

> ⚠️ **Security:** Ensure your `.env` file is **not publicly accessible**. The `.htaccess` already blocks access to files matching `^\\.env`, which covers `.env` and `.env.*` patterns.

---

## Step 4: File Permissions

### Cache Directory

The application writes cache files to `public_html/api/cache/storage/`. This directory must be writable by the web server:

```bash
chmod -R 775 public_html/api/cache/storage
chown -R www-data:www-data public_html/api/cache/storage
```

Replace `www-data` with your web server's user (e.g., `apache`, `nobody`, `nginx`).

### General Permissions

```bash
# All PHP files and assets should be readable
chmod -R 755 public_html/
# Or more restrictive if needed:
find public_html/ -type f -name "*.php" -exec chmod 644 {} \;
find public_html/ -type d -exec chmod 755 {} \;
```

---

## Step 5: Verify Installation

1. Navigate to `http://emeraldnews.local/` (or your configured domain)
2. You should see the EmeraldNews homepage
3. Test registration/login at `/Login/Default.aspx`
4. Check that the cache directory is working (files should appear in `public_html/api/cache/storage/` after pages are loaded)

### Common Checks

- **404 errors on pages?** Ensure `mod_rewrite` is enabled and `.htaccess` overrides are allowed.
- **Database connection errors?** Verify your `.env` credentials and that MySQL is running.
- **"someone corrupted the database, brb" error?** The database connection failed — check `DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`.
- **Blank pages?** Check PHP error logs. Try enabling `error_reporting` temporarily in `public_html/api/includes.php` (set `error_reporting(E_ALL)`).

---

## Optional: Database Indexes

For production use, you may want to add targeted indexes for better query performance under load. A migration script is provided:

```bash
mysql -u root -p emeraldnews < public_html/Install/migrations/20241018_add_targeted_indexes.sql
```

This adds indexes on:
- `users.username` — for login lookups
- `games.creator_id` — for game listings by creator
- `servers.game_id` — for server queries by game
- `games_favorites.game` — for favorite counts

Verify the indexes were created:

```sql
SHOW INDEX FROM users;
SHOW INDEX FROM games;
SHOW INDEX FROM servers;
SHOW INDEX FROM games_favorites;
```

---

## Environment Variable Reference

| Variable | Default | Description |
|----------|---------|-------------|
| `DB_HOST` | `localhost` | MySQL database host |
| `DB_USER` | `root` | MySQL database user |
| `DB_PASS` | `(empty)` | MySQL database password |
| `DB_NAME` | `emeraldnews` | MySQL database name |
| `GOOGLE_CLIENT_ID` | — | Google OAuth client ID |
| `GOOGLE_CLIENT_SECRET` | — | Google OAuth client secret |
| `GOOGLE_REDIRECT_URI` | — | Google OAuth redirect URI |
| `DISCORD_WEBHOOK_URL_CATALOG` | — | Discord webhook for catalog notifications |
| `DISCORD_WEBHOOK_URL_RCC` | — | Discord webhook for RCC down alerts |
| `MAINTENANCE_KEY` | — | Passkey to bypass maintenance mode |
| `ADS_ENABLED` | `false` | Enable/disable advertising |
| `AD_SCRIPT_URL_HEADER` | — | Ad script URL for header placement |
| `AD_KEY_HEADER` | — | Ad key for header placement |
| `AD_SCRIPT_URL_1` | — | Secondary ad script URL |
| `DB_PROFILE` | `0` | Enable database query profiling |
| `DB_PROFILE_PARAMS` | `0` | Include query parameters in profiling |
| `CACHE_DISABLE_FILE` | `0` | Disable file-based cache (memory only) |
| `DEFAULT_AVATAR_ITEM_IDS` | — | Comma-separated catalog item IDs for new users |

---

## Project Structure

```
├── emeraldoldsdatabase.sql          # Database schema + initial data
├── README.md                        # This file
├── public_html/                     # Web root (document root)
│   ├── .htaccess                    # Apache rewrite rules & security
│   ├── api/                         # Backend API and helpers
│   │   ├── database/                # Database connection & wrapper
│   │   ├── auth/                    # Session handling, login, user creation
│   │   ├── cache/                   # File-based + in-memory caching
│   │   ├── chat/                    # Chat filtering
│   │   ├── files/                   # Utility classes (context, profanity filter)
│   │   ├── WebsiteBuild/            # Site header, navbar, footer templates
│   │   └── ...                      # Endpoint-specific handlers
│   ├── Admin/                       # Admin panel
│   ├── CSS/                         # Stylesheets
│   ├── game/                        # Game server & Lua scripts
│   ├── images/                      # Static images/icons
│   ├── Install/                     # Client installer page & DB migrations
│   ├── js/                          # JavaScript (lazyload, modern-ui)
│   ├── Login/                       # Authentication pages (login, register, OAuth)
│   ├── asset/                       # Asset upload/render endpoints
│   ├── avatar/                      # Avatar rendering
│   ├── my/                          # User dashboard (messages, profile, etc.)
│   ├── img/                         # Dynamic image generation
│   ├── Forum/                       # Forum system
│   ├── Thumbs/                      # Thumbnail generation
│   ├── views/                       # View partials (home page sections)
│   └── ...                          # Various feature pages
```

---

## Troubleshooting

### "403 Forbidden" on every page
- Check that the `ipbans` table doesn't contain your IP address
- Verify Apache has `AllowOverride All` for the `public_html/` directory

### "Failed to prepare database statement"
- Usually indicates a missing table or column mismatch
- Verify the database was imported correctly: `mysql -u root -p emeraldnews < emeraldoldsdatabase.sql`

### Login cookies not working
- The session code sets cookies with a specific domain (see `sessionCookieDomain()` in `public_html/api/auth/sessionhandler.php`)
- For local development on `localhost`, the domain returned should be empty string `''`
- If you're seeing cookie domain issues, check that your `HTTP_HOST` is correctly set

### CSS/JS not loading
- The site loads CSS with a cache-busting query parameter (`?v=<?=time();?>`), so hard refresh might help
- Verify `mod_headers` and `mod_expires` are enabled

### "Data saving mode" appearing unexpectedly
- Check if you have a `data_saving_mode` cookie set to `1`
- Clear cookies or visit `/User.aspx?toggleDataSaving=off`
