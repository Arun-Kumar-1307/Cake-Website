<?php

/**
 * Menu section: filterable cake cards.
 * Content comes from config/data/menu-items.php; each card carries its full
 * detail payload in data-* attributes, which components/menu-modal.js reads.
 */

$menuItems = load_data('menu-items');

$filters = [
    'all'        => 'Everything',
    'chocolate'  => 'Chocolate',
    'vanilla'    => 'Vanilla & Fruit',
    'specialty'  => 'Specialty',
];
?>

<section id="menu" class="section section--alt">
    <div class="section-blob section-blob--gold" style="width:320px;height:320px;top:-80px;right:-60px;"></div>

    <div class="container">
        <header class="section-heading" data-reveal>
            <span class="eyebrow">Our menu</span>
            <h2 class="section-title">Cakes worth the occasion</h2>
            <p class="section-subtitle">
                Every cake below is baked to order in one of three sizes. Tap any cake to see what goes
                into it, how many it serves and what it costs.
            </p>
        </header>

        <div class="menu-filters" role="group" aria-label="Filter cakes by flavour" data-reveal>
            <?php foreach ($filters as $key => $label) { ?>
                <button type="button"
                        class="filter-btn<?= $key === 'all' ? ' is-active' : '' ?>"
                        data-filter="<?= e($key) ?>"
                        aria-pressed="<?= $key === 'all' ? 'true' : 'false' ?>">
                    <?= e($label) ?>
                </button>
            <?php } ?>
        </div>

        <div class="menu-grid" id="menuGrid">
            <?php foreach ($menuItems as $item) { ?>
                <button type="button"
                        class="menu-card"
                        data-category="<?= e($item->category) ?>"
                        data-name="<?= e($item->name) ?>"
                        data-category-label="<?= e($item->categoryLabel()) ?>"
                        data-image="<?= e(asset($item->image)) ?>"
                        data-badge="<?= e($item->badge) ?>"
                        data-rating="<?= e((string) $item->rating) ?>"
                        data-reviews="<?= e((string) $item->reviewCount) ?>"
                        data-lead-time="<?= e($item->leadTime) ?>"
                        data-long-description="<?= e($item->longDescription) ?>"
                        data-ingredients="<?= attr_json($item->ingredients) ?>"
                        data-sizes="<?= attr_json($item->sizes) ?>"
                        aria-label="View details for <?= e($item->name) ?>">
                    <div class="menu-card-media">
                        <img src="<?= asset($item->image) ?>"
                             alt="<?= e($item->name) ?>"
                             class="menu-card-image"
                             width="900" height="675" loading="lazy">

                        <?php if ($item->badge !== '') { ?>
                            <span class="menu-card-badge"><?= e($item->badge) ?></span>
                        <?php } ?>

                        <span class="menu-card-rating">
                            <?= icon('star') ?><?= e(number_format($item->rating, 1)) ?>
                        </span>

                        <span class="menu-card-hint"><?= icon('eye') ?> View details</span>
                    </div>

                    <div class="menu-card-body">
                        <span class="menu-card-category"><?= e($item->categoryLabel()) ?></span>
                        <h3 class="menu-card-title"><?= e($item->name) ?></h3>
                        <p class="menu-card-description"><?= e($item->shortDescription) ?></p>

                        <div class="menu-card-footer">
                            <div>
                                <span class="menu-card-price-label">From</span>
                                <div class="menu-card-price"><sup>$</sup><?= e((string) $item->basePrice()) ?></div>
                            </div>
                            <span class="btn btn--outline btn--sm">Details</span>
                        </div>
                    </div>
                </button>
            <?php } ?>
        </div>

        <p class="menu-note" data-reveal>
            <strong>Need something bespoke?</strong> <?= e(site('lead_time_note')) ?>
        </p>
    </div>
</section>

<?php
/* Detail modal — a single reusable shell that JS fills from the clicked card. */
load_template('partials/cake-modal');
