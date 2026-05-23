<?php
/** @var array $f */
?>
<section class="home-facts" aria-labelledby="home-facts-title">
    <div class="home-facts__header">
        <h3 class="home-facts__title" id="home-facts-title">emeraldNews at a glance</h3>
        <p class="home-facts__subtitle">Your hub for class updates, conversations, and community highlights.</p>
    </div>
    <ul class="home-facts__list">
        <?php foreach ($f as $i): ?>
            <li class="home-facts__item">
                <h4 class="home-facts__item-title"><?= htmlspecialchars($i['t'], ENT_QUOTES, 'UTF-8'); ?></h4>
                <p class="home-facts__item-text"><?= htmlspecialchars($i['d'], ENT_QUOTES, 'UTF-8'); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
