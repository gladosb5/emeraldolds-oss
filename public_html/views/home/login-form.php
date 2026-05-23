<?php
/** @var array $ls */
/** @var string $m */
/** @var array $_USER */

$lv = $ls['v'] ?? ['UserName' => ''];
$eid = 'login-error-summary';
?>
<section class="home-login" aria-label="Account sign in">
    <?php if (!empty($ls['a'])): ?>
        <div class="home-login__welcome" role="status" aria-live="polite">
            <h2 class="home-login__title">You're already signed in</h2>
            <p class="home-login__text">
                <?= htmlspecialchars($m ?? 'hi', ENT_QUOTES, 'UTF-8'); ?>
                <?= isset($_USER['username']) ? ', ' . htmlspecialchars($_USER['username'], ENT_QUOTES, 'UTF-8') : ''; ?>.
            </p>
            <p class="home-login__text">
                Heyyy... welcome to the site!
            </p>
        </div>
    <?php else: ?>
        <form
            method="POST"
            action=""
            class="home-login__card"
            <?= $ls['s'] === 'error' ? 'aria-describedby="' . $eid . '"' : '' ?>
        >
            <div class="home-login__header">
                <h2 class="home-login__title" id="login-title">Welcome back!</h2>
                <p class="home-login__subtitle">Sign in to your emeraldnews account</p>
            </div>

            <?php if ($ls['s'] === 'error'): ?>
                <div id="<?= $eid ?>" class="home-login__error" role="alert" aria-live="assertive">
                    <h3 class="home-login__error-title">We couldn't sign you in</h3>
                    <p class="home-login__error-message"><?= htmlspecialchars($ls['m'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <?php if (!empty($ls['e'])): ?>
                        <ul class="home-login__error-list">
                            <?php foreach ($ls['e'] as $field => $error): ?>
                                <li><a href="#<?= htmlspecialchars($field, ENT_QUOTES, 'UTF-8'); ?>" class="home-login__error-link"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="home-login__field-group">
                <label class="home-login__label" for="SignIn_UserName">Username</label>
                <input
                    class="home-login__input"
                    type="text"
                    id="SignIn_UserName"
                    name="UserName"
                    autocomplete="username"
                    value="<?= htmlspecialchars($lv['UserName'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                    aria-required="true"
                    aria-invalid="<?= isset($ls['e']['SignIn_UserName']) ? 'true' : 'false'; ?>"
                >
            </div>

            <div class="home-login__field-group">
                <label class="home-login__label" for="SignIn_Password">Password</label>
                <input
                    class="home-login__input"
                    type="password"
                    id="SignIn_Password"
                    name="Password"
                    autocomplete="current-password"
                    aria-required="true"
                    aria-invalid="<?= isset($ls['e']['SignIn_Password']) ? 'true' : 'false'; ?>"
                >
            </div>

            <div class="home-login__actions">
                <button type="submit" name="LoginButton" class="Button home-login__submit">Sign In</button>
                <div class="home-login__divider" role="separator" aria-hidden="true">
                    <span>or</span>
                </div>
                <a href="/Login/google_login.php" class="Button home-login__social" aria-label="Continue with Google">
                    <svg class="home-login__social-icon" width="16" height="16" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.923.28-4.74 3.28-8.09z"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Continue with Google
                </a>
            </div>

            <p class="home-login__footer">
                <a class="home-login__link" href="/Login/ResetPasswordRequest.aspx">Forgot your password?</a>
            </p>
        </form>
    <?php endif; ?>
</section>
