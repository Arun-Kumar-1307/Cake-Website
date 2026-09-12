<?php
require_once __DIR__ . '/../config/load.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6d1638">

    <title><?= e(site('name')) ?> — <?= e(site('tagline')) ?></title>
    <meta name="description" content="<?= e(site('description')) ?>">

    <!-- Open Graph / social sharing -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e(site('name')) ?> — <?= e(site('tagline')) ?>">
    <meta property="og:description" content="<?= e(site('description')) ?>">
    <meta property="og:image" content="<?= asset('images/hero-cake.jpg') ?>">

    <link rel="icon" type="image/svg+xml" href="<?= asset('images/icons/favicon.svg') ?>">

    <script>
        /*
         * Flags JS support before first paint so scroll-reveal elements start
         * hidden instead of flashing in and back out.
         *
         * Gated on module support, because the reveal is driven by main.js
         * (a module) — browsers that can't run it must never hide content.
         * The timeout is a failsafe: if main.js never boots, show everything.
         */
        if ('noModule' in HTMLScriptElement.prototype) {
            var root = document.documentElement;
            root.classList.add('js-enabled');
            setTimeout(function () {
                if (!root.dataset.appReady) root.classList.remove('js-enabled');
            }, 2500);
        }
    </script>

    <!-- Fonts: display serif for headings, geometric sans for body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Poppins:wght@400;500;600;700&display=swap">

    <!-- Preload the hero image: it is the largest paint on first view -->
    <link rel="preload" as="image" href="<?= asset('images/hero-cake.jpg') ?>">

    <?php
    /*
     * Stylesheets are split one-per-component for maintainability.
     * Add a component: drop a file in public/css/components and list it here.
     * (Bundle these into one file if you later add a build step.)
     */
    $stylesheets = [
        'css/base/variables.css',
        'css/base/reset.css',
        'css/base/typography.css',
        'css/base/utilities.css',
        'css/components/buttons.css',
        'css/components/section.css',
        'css/components/navbar.css',
        'css/components/hero.css',
        'css/components/menu.css',
        'css/components/modal.css',
        'css/components/gallery.css',
        'css/components/lightbox.css',
        'css/components/about.css',
        'css/components/testimonials.css',
        'css/components/contact.css',
        'css/components/footer.css',
    ];

    foreach ($stylesheets as $stylesheet) { ?>
        <link rel="stylesheet" href="<?= asset($stylesheet) ?>">
    <?php } ?>
</head>
<body>
    <a href="#menu" class="visually-hidden">Skip to menu</a>

    <?php
    load_template('navbar');
    ?>

    <main>
        <?php
        load_template('banner');
        load_template('menu');
        load_template('gallery');
        load_template('about');
        load_template('testimonial');
        load_template('contact');
        ?>
    </main>

    <?php
    load_template('footer');
    ?>

    <script type="module" src="<?= asset('script/main.js') ?>"></script>
</body>
</html>
