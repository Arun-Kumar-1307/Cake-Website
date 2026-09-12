<?php
/**
 * Gallery lightbox shell — populated by components/gallery-lightbox.js
 * from the clicked .gallery-item. Supports arrow keys and Escape.
 */
?>
<div class="lightbox" id="galleryLightbox" role="dialog" aria-modal="true" aria-label="Gallery image viewer" aria-hidden="true">
    <button type="button" class="lightbox-btn lightbox-close" data-lightbox-close aria-label="Close viewer">
        <?= icon('close') ?>
    </button>

    <button type="button" class="lightbox-btn lightbox-prev" data-lightbox-prev aria-label="Previous photo">
        <?= icon('chevron-left') ?>
    </button>

    <button type="button" class="lightbox-btn lightbox-next" data-lightbox-next aria-label="Next photo">
        <?= icon('chevron-right') ?>
    </button>

    <figure class="lightbox-figure">
        <img class="lightbox-image" src="" alt="" data-lightbox-image>
        <figcaption class="lightbox-caption">
            <span class="lightbox-caption-tag" data-lightbox-tag></span>
            <span class="lightbox-caption-title" data-lightbox-title></span>
            <span class="lightbox-counter" data-lightbox-counter></span>
        </figcaption>
    </figure>
</div>
