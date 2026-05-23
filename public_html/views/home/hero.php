<?php
/** @var array $hc */
?>
<section class="home-hero" aria-labelledby="home-hero-title">
    <div class="home-hero__text">
        <h2 class="home-hero__title" id="home-hero-title">
            <?= htmlspecialchars($hc['h'], ENT_QUOTES, 'UTF-8'); ?>
        </h2>
        <p class="home-hero__subtitle">
            <?= htmlspecialchars($hc['s'], ENT_QUOTES, 'UTF-8'); ?>
        </p>
    </div>
</section>
