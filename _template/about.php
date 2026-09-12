<?php

/**
 * About section: studio story plus the three promises.
 */

$features = [
    [
        'icon'  => 'leaf',
        'title' => 'Scratch ingredients',
        'text'  => 'Real butter, single-origin cocoa, seasonal fruit. Nothing from a packet mix.',
    ],
    [
        'icon'  => 'palette',
        'title' => 'Designed with you',
        'text'  => 'Send a sketch, a colour or a Pinterest board — we build the cake around it.',
    ],
    [
        'icon'  => 'clock',
        'title' => 'Baked, then delivered',
        'text'  => 'Every cake is baked the day before it reaches you. Never frozen, never held over.',
    ],
];
?>

<section id="about" class="section section--alt section--dotted">
    <div class="container">
        <div class="about-grid">
            <div class="about-text" data-reveal>
                <span class="eyebrow">Our studio</span>
                <h2 class="section-title">A home kitchen that grew up</h2>

                <p>
                    Artisan Cake Studio started at a kitchen table in 2013, baking birthday cakes for
                    neighbours. Twelve years and several ovens later we are still a small team working out of
                    one studio kitchen — which is exactly why every cake still gets weighed, piped and
                    finished by hand.
                </p>
                <p>
                    We take a limited number of orders each week on purpose. It means we can source fruit the
                    day we need it, temper chocolate properly, and say yes when you ask for something that
                    isn&rsquo;t on the menu.
                </p>

                <p class="about-signature">
                    Baked with care, every single week
                    <span>The Artisan Cake Studio team</span>
                </p>
            </div>

            <div class="about-media" data-reveal>
                <div class="about-image-frame">
                    <img src="<?= asset('images/about-studio.jpg') ?>"
                         alt="Two bakers arranging fresh raspberries and blueberries across a cream-frosted cake"
                         width="1000" height="666" loading="lazy">
                </div>

                <div class="about-ribbon">
                    <span class="about-ribbon-value">12</span>
                    <span class="about-ribbon-label">Years of baking</span>
                </div>
            </div>
        </div>

        <div class="about-features" data-reveal>
            <?php foreach ($features as $feature) { ?>
                <article class="feature">
                    <span class="feature-icon"><?= icon($feature['icon']) ?></span>
                    <h3><?= e($feature['title']) ?></h3>
                    <p><?= e($feature['text']) ?></p>
                </article>
            <?php } ?>
        </div>
    </div>
</section>
