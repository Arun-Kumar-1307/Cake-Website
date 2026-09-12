<nav class="navbar" id="navbar">
    <div class="navbar-container">
        <a href="#home" class="navbar-logo" aria-label="<?= e(site('name')) ?> — home">
            <img src="<?= asset('images/icons/logo-cake.svg') ?>" alt="" class="logo-mark" width="42" height="42">
            <span>
                Artisan
                <span class="logo-text-sub">Cake Studio</span>
            </span>
        </a>

        <button class="hamburger" id="hamburger" type="button"
                aria-label="Open navigation menu" aria-expanded="false" aria-controls="navMenu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <ul class="nav-menu" id="navMenu">
            <?php foreach (site('nav') as $link) { ?>
                <li>
                    <a href="<?= e($link['href']) ?>" class="nav-link"><?= e($link['label']) ?></a>
                </li>
            <?php } ?>
            <li>
                <a href="#contact" class="btn btn--primary btn--sm nav-cta">
                    Order Now <?= icon('arrow-right') ?>
                </a>
            </li>
        </ul>
    </div>

    <div class="nav-backdrop" id="navBackdrop" aria-hidden="true"></div>
</nav>
