<?php
/**
 * Cake detail modal shell.
 *
 * Rendered once. components/menu-modal.js populates every [data-modal-*] slot
 * from the data-* attributes of whichever .menu-card was clicked, so there is
 * no duplicated markup per cake.
 */
?>
<div class="modal" id="cakeModal" role="dialog" aria-modal="true" aria-labelledby="cakeModalTitle" aria-hidden="true">
    <div class="modal-backdrop" data-modal-close></div>

    <div class="modal-dialog" role="document">
        <button type="button" class="modal-close" data-modal-close aria-label="Close cake details">
            <?= icon('close') ?>
        </button>

        <div class="modal-layout">
            <div class="modal-media">
                <img src="" alt="" data-modal-image width="900" height="675">
                <span class="modal-media-badge" data-modal-badge></span>
            </div>

            <div class="modal-body">
                <span class="modal-category" data-modal-category></span>
                <h3 class="modal-title" id="cakeModalTitle" data-modal-title></h3>

                <div class="modal-rating">
                    <span class="modal-stars" data-modal-stars></span>
                    <span class="modal-rating-value" data-modal-rating></span>
                    <span data-modal-reviews></span>
                </div>

                <p class="modal-description" data-modal-description></p>

                <div>
                    <p class="modal-section-label"><?= icon('leaf') ?> What&rsquo;s inside</p>
                    <div class="modal-ingredients" data-modal-ingredients></div>
                </div>

                <div>
                    <p class="modal-section-label"><?= icon('cake') ?> Sizes &amp; pricing</p>
                    <div class="modal-sizes" data-modal-sizes></div>
                </div>

                <p class="modal-lead-time">
                    <?= icon('clock', 'modal-lead-icon') ?>
                    <span data-modal-lead-time></span>
                </p>

                <div class="modal-actions">
                    <button type="button" class="btn btn--primary" data-modal-enquire>
                        Enquire about this cake <?= icon('arrow-right') ?>
                    </button>
                    <button type="button" class="btn btn--outline" data-modal-close>
                        Keep browsing
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
