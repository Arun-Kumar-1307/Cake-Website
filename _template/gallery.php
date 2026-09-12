<?php

/**
 * Gallery section: mosaic of finished work.
 * Content comes from config/data/gallery-items.php; clicking a tile opens the
 * lightbox handled by components/gallery-lightbox.js.
 */

$galleryItems = load_data('gallery-items');
?>

<section id="gallery" class="section">
    <div class="container">
        <header class="section-heading" data-reveal>
            <span class="eyebrow">Gallery</span>
            <h2 class="section-title">Straight from our kitchen</h2>
            <p class="section-subtitle">
                Real cakes we have delivered — no stock photography, no renders. Tap any photo to open it full size.
            </p>
        </header>

        <div class="gallery-grid" id="galleryGrid" data-reveal>
            <?php foreach ($galleryItems as $index => $item) { ?>
                <button type="button"
                        class="gallery-item"
                        data-gallery-index="<?= (int) $index ?>"
                        data-title="<?= e($item->title) ?>"
                        data-tag="<?= e($item->tag) ?>"
                        data-full="<?= e(asset($item->image)) ?>"
                        aria-label="Open &ldquo;<?= e($item->title) ?>&rdquo; full size">
                    <img src="<?= asset($item->image) ?>"
                         alt="<?= e($item->altText()) ?>"
                         style="object-position: <?= e($item->focus) ?>;"
                         width="900" height="675" loading="lazy">

                    <span class="gallery-zoom"><?= icon('zoom') ?></span>

                    <span class="gallery-overlay">
                        <span class="gallery-tag"><?= e($item->tag) ?></span>
                        <span class="gallery-title"><?= e($item->title) ?></span>
                    </span>
                </button>
            <?php } ?>
        </div>
    </div>
</section>

<?php load_template('partials/lightbox'); ?>
