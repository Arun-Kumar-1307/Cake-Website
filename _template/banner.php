<section id="home" class="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="eyebrow">Baked to order since 2013</span>

                <h1 class="hero-title">
                    Handcrafted cakes for <em>every celebration</em>
                </h1>

                <p class="hero-subtitle">
                    Small-batch cakes built from scratch in our studio kitchen — real butter, real vanilla,
                    fruit picked the morning it goes on the cake. No shortcuts, no mixes, nothing frozen.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn--primary btn--lg">
                        Place your order <?= icon('arrow-right') ?>
                    </a>
                    <a href="#menu" class="btn btn--outline btn--lg">
                        <?= icon('cake') ?> Explore the menu
                    </a>
                </div>

                <dl class="hero-stats">
                    <?php foreach (site('stats') as $stat) { ?>
                        <div class="hero-stat">
                            <dt class="hero-stat-value"><?= e($stat['value']) ?></dt>
                            <dd class="hero-stat-label"><?= e($stat['label']) ?></dd>
                        </div>
                    <?php } ?>
                </dl>
            </div>

            <div class="hero-media">
                <div class="hero-media-glow" aria-hidden="true"></div>

                <div class="hero-image-frame">
                    <img src="<?= asset('images/hero-cake.jpg') ?>"
                         alt="Sliced rainbow layer cake covered in sprinkles and sugar stars on a floral cake stand"
                         width="1600" height="1460" fetchpriority="high">
                </div>

                <div class="hero-badge hero-badge--rating">
                    <?= icon('star') ?>
                    <span>
                        <span class="hero-badge-value">4.9 / 5</span>
                        <span class="hero-badge-label">1,200+ reviews</span>
                    </span>
                </div>

                <div class="hero-badge hero-badge--fresh">
                    <?= icon('sparkle') ?>
                    <span>
                        <span class="hero-badge-value">Baked fresh</span>
                        <span class="hero-badge-label">Never frozen</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Scalloped divider, like piped buttercream along the section edge -->
    <svg class="hero-divider" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true">
        <path fill="currentColor"
              d="M0 60h1440V28c-30 0-30-16-60-16s-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16-30-16-60-16-30 16-60 16z" />
    </svg>
</section>
