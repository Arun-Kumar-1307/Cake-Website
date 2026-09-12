<?php

/**
 * Footer: brand, quick links, cake categories, newsletter, social + legal bar.
 */

$year = date('Y');
?>

<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="#home" class="footer-logo">
                    <img src="<?= asset('images/icons/logo-cake.svg') ?>" alt="" class="logo-mark" width="38" height="38">
                    <span><?= e(site('name')) ?></span>
                </a>
                <p class="footer-tagline"><?= e(site('description')) ?></p>
                <div class="social-links">
                    <?php foreach (site('socials') as $social) { ?>
                        <a href="<?= e($social['url']) ?>" class="social-link"
                           aria-label="<?= e($social['label']) ?>" rel="noopener">
                            <?= icon($social['icon']) ?>
                        </a>
                    <?php } ?>
                </div>
            </div>

            <div>
                <h2 class="footer-col-title">Explore</h2>
                <nav class="footer-links" aria-label="Footer navigation">
                    <?php foreach (site('nav') as $link) { ?>
                        <a href="<?= e($link['href']) ?>"><?= e($link['label']) ?></a>
                    <?php } ?>
                </nav>
            </div>

            <div>
                <h2 class="footer-col-title">Our cakes</h2>
                <nav class="footer-links" aria-label="Cake categories">
                    <a href="#menu">Chocolate cakes</a>
                    <a href="#menu">Vanilla &amp; fruit</a>
                    <a href="#menu">Specialty bakes</a>
                    <a href="#gallery">Wedding tiers</a>
                    <a href="#contact">Custom commissions</a>
                </nav>
            </div>

            <div class="footer-newsletter">
                <h2 class="footer-col-title">Seasonal menu</h2>
                <p>New flavours land every season. Get them before they sell out.</p>

                <form class="newsletter-form" id="newsletterForm" novalidate>
                    <label class="visually-hidden" for="newsletterEmail">Email address</label>
                    <input type="email" id="newsletterEmail" name="email"
                           placeholder="you@example.com" autocomplete="email" required>
                    <button type="submit" class="btn btn--gold btn--sm" aria-label="Subscribe">
                        <?= icon('arrow-right') ?>
                    </button>
                </form>
                <p class="newsletter-feedback" id="newsletterFeedback" role="status"></p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= e($year) ?> <?= e(site('name')) ?>. All rights reserved.</p>
            <nav class="footer-bottom-links" aria-label="Legal">
                <a href="#contact">Delivery &amp; collection</a>
                <a href="#contact">Allergen information</a>
                <a href="#contact">Terms</a>
            </nav>
        </div>
    </div>
</footer>

<button type="button" class="back-to-top" id="backToTop" aria-label="Back to top">
    <?= icon('arrow-up') ?>
</button>
