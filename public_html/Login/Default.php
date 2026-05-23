<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/api/auth/LoginUtils.php";

if ($logged === "yes") {
    header("Location: /");
    exit();
}

$genericError = 'Username or Password Incorrect.';
$s = "welcome back to emerald!";

$throttler = new LoginThrottler($db);
$ipAddress = getClientIp();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['LoginButton'])) {
    $usernameInput = $_POST['UserName'] ?? '';
    $passwordInput = $_POST['Password'] ?? '';

    $username = trim($ep->remove($usernameInput));
    $password = $ep->remove($passwordInput);
    $hadDatabaseError = false;

    $throttleCheck = $throttler->check($ipAddress, $username);
    if ($throttleCheck['allowed'] === false) {
        $retryAfter = max(1, (int) $throttleCheck['retry_after']);
        $s = "Too many login attempts. Please try again in {$retryAfter} seconds.";
        logAuthAttempt('failure', [
            'ip' => $ipAddress,
            'username' => $username !== '' ? $username : '(blank)',
            'reason' => 'throttled',
            'retry_after' => $retryAfter,
        ]);
    } elseif ($username === '' || $password === '') {
        $s = $genericError;
        $throttler->registerAttempt($ipAddress, $username, false);
        logAuthAttempt('failure', [
            'ip' => $ipAddress,
            'username' => $username !== '' ? $username : '(blank)',
            'reason' => 'missing_fields',
        ]);
    } elseif (preg_match('/^[a-zA-Z0-9]+$/', $username) === 0 || $ch->hasProfanity($username)) {
        $s = $genericError;
        $throttler->registerAttempt($ipAddress, $username, false);
        logAuthAttempt('failure', [
            'ip' => $ipAddress,
            'username' => $username,
            'reason' => 'validation_failed',
        ]);
    } else {
        try {
            $user = $db->selectOne(
                'SELECT id, username, password_hash, password_salt FROM users WHERE username = ? LIMIT 1',
                's',
                [$username],
                ['id' => 'int']
            );
        } catch (Throwable $e) {
            logAuthAttempt('failure', [
                'ip' => $ipAddress,
                'username' => $username,
                'reason' => 'database_error',
                'error' => $e->getMessage(),
            ]);
            $s = $genericError;
            $throttler->registerAttempt($ipAddress, $username, false);
            $user = null;
            $hadDatabaseError = true;
        }

        if ($user === null) {
            if (!$hadDatabaseError) {
                $throttler->registerAttempt($ipAddress, $username, false);
                logAuthAttempt('failure', [
                    'ip' => $ipAddress,
                    'username' => $username,
                    'reason' => 'unknown_user',
                ]);
            }
            $s = $genericError;
        } else {
            $salt = $user['password_salt'];
            $hash = crypt($password, $salt);
            $passwordHash = $user['password_hash'];

            if (hash_equals($passwordHash, $hash)) {
                $throttler->registerAttempt($ipAddress, $username, true);
                try {
                    createUserSession($db, (int) $user['id']);
                    header("Location: /");
                    exit();
                } catch (Throwable $sessionError) {
                    logAuthAttempt('failure', [
                        'ip' => $ipAddress,
                        'username' => $username,
                        'reason' => 'session_error',
                        'error' => $sessionError->getMessage(),
                    ]);
                    $s = 'We could not start your session. Please try again.';
                }
            } else {
                $s = $genericError;
                $throttler->registerAttempt($ipAddress, $username, false);
                logAuthAttempt('failure', [
                    'ip' => $ipAddress,
                    'username' => $username,
                    'reason' => 'invalid_password',
                ]);
            }
        }
    }
}
?>
<title>EmeraldNews - Login</title>
<style>
    /* Reset and Base Styles */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; background-color: #f0f4f8; color: #333; line-height: 1.6; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
    a { text-decoration: none; color: #007bff; }
    a:hover { text-decoration: underline; }

    /* Login Container */
    .login-container { display: grid; grid-template-columns: 1fr 1fr; max-width: 800px; width: 100%; background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); overflow: hidden; margin: 20px; }
    @media (max-width: 768px) { .login-container { grid-template-columns: 1fr; } }

    /* Sidebar (No Account Section) */
    .sidebar { background: linear-gradient(135deg, #e0e0e0, #f5f5f5); padding: 40px; display: flex; flex-direction: column; justify-content: center; }
    .sidebar h2 { font-size: 1.5rem; margin-bottom: 10px; color: #333; }
    .sidebar p { font-size: 1rem; color: #666; }

    /* Main Login Form */
    .main-form { padding: 40px; }
    .main-form h3 { font-size: 1.8rem; margin-bottom: 20px; color: #333; }
    .alert { background: #ffdab9; color: #e67e22; padding: 10px; border-radius: 8px; margin-bottom: 20px; text-align: center; font-weight: bold; }

    /* Form Elements */
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: bold; color: #333; }
    .form-group input { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s; }
    .form-group input:focus { border-color: #007bff; outline: none; box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1); }

    /* Buttons */
    .btn { display: inline-block; padding: 12px 24px; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: background 0.3s, transform 0.2s; }
    .btn-primary { background: #28a745; color: white; border: none; }
    .btn-primary:hover { background: #218838; transform: translateY(-2px); }
    .btn-google { background: #4285f4; color: white; border: none; margin-left: 10px; }
    .btn-google:hover { background: #357ae8; transform: translateY(-2px); }
    @media (max-width: 768px) { .btn-google { margin-left: 0; margin-top: 10px; display: block; } }

    /* Footer Include (assuming it's styled elsewhere) */
    footer { text-align: center; padding: 20px; background: #f8f9fa; margin-top: 20px; border-top: 1px solid #ddd; }
</style>
<div class="login-container">
    <div class="sidebar">
        <h2>No Account?</h2>
        <p>You need an account to use emeraldnews.</p>
        <p>If you aren't an emerald student then login with your axcel account. Doesn't matter if you're from emerald.</p>
    </div>
    <div class="main-form">
        <h3>Log In</h3>
        <?php if ($s): ?>
            <div class="alert"><?=htmlspecialchars($s, ENT_QUOTES, 'UTF-8')?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="UserName">Username:</label>
                <input type="text" id="UserName" name="UserName" required aria-required="true" autocomplete="username">
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" id="Password" name="Password" required aria-required="true" autocomplete="current-password">
            </div>
            <button type="submit" name="LoginButton" class="btn btn-primary">Log In</button>
            <a href="/Login/google_login.php" class="btn btn-google">Login with Google</a>
        </form>
    </div>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
