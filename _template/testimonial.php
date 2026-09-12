<?php

/**
 * Testimonials section. Content comes from config/data/testimonials.php.
 */

$testimonials = load_data('testimonials');

/* Average score shown in the summary card, derived from the reviews themselves. */
$ratings = array_map(fn(Testimonial $t) => $t->rating, $testimonials);
$average = $ratings ? array_sum($ratings) / count($ratings) : 0;
?>

<section id="testimonials" class="section section--dark">
    <div class="container">
        <header class="section-heading" data-reveal>
            <span class="eyebrow">Reviews</span>
            <h2 class="section-title">What our customers say</h2>
        </header>

        <div class="rating-summary" data-reveal>
            <span class="rating-summary-score"><?= e(number_format($average, 1)) ?></span>
            <div class="rating-summary-meta">
                <span class="rating-stars" aria-hidden="true">
                    <?php for ($i = 0; $i < 5; $i++) { ?><?= icon('star') ?><?php } ?>
                </span>
                <span class="rating-summary-text">
                    Rated <?= e(number_format($average, 1)) ?> out of 5 across 1,200+ verified orders
                </span>
            </div>
        </div>

        <div class="testimonials-grid" id="testimonialsGrid">
            <?php foreach ($testimonials as $testimonial) { ?>
                <article class="testimonial-card" data-reveal>
                    <span class="testimonial-quote-icon" aria-hidden="true"><?= icon('quote') ?></span>

                    <span class="testimonial-rating" role="img"
                          aria-label="Rated <?= e((string) $testimonial->stars()) ?> out of 5">
                        <?php for ($i = 0; $i < $testimonial->stars(); $i++) { ?><?= icon('star') ?><?php } ?>
                    </span>

                    <p class="testimonial-text">&ldquo;<?= e($testimonial->quote) ?>&rdquo;</p>

                    <footer class="testimonial-author">
                        <span class="testimonial-avatar" aria-hidden="true"><?= e($testimonial->initials()) ?></span>
                        <span>
                            <span class="testimonial-author-name"><?= e($testimonial->author) ?></span>
                            <span class="testimonial-author-meta"><?= e($testimonial->occasion) ?></span>
                        </span>
                    </footer>
                </article>
            <?php } ?>
        </div>
    </div>
</section>
