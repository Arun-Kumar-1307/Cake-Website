<?php

/**
 * Contact section: studio details plus the enquiry form.
 *
 * The "cake" select is populated from the menu data so the two never drift
 * apart, and components/menu-modal.js pre-selects it when a visitor clicks
 * "Enquire about this cake" inside the detail modal.
 */

$menuItems = load_data('menu-items');
$hours = site('hours');
?>

<section id="contact" class="section contact">
    <div class="container">
        <header class="section-heading" data-reveal>
            <span class="eyebrow">Get in touch</span>
            <h2 class="section-title">Ready to order your cake?</h2>
            <p class="section-subtitle">
                Tell us the date, the occasion and roughly how many people you&rsquo;re feeding.
                We reply to every enquiry within one working day.
            </p>
        </header>

        <div class="contact-grid">
            <div class="contact-info" data-reveal>
                <div class="info-item">
                    <span class="info-icon"><?= icon('location') ?></span>
                    <div>
                        <h3>Studio</h3>
                        <p><?= e(site('address_line1')) ?><br><?= e(site('address_line2')) ?></p>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-icon"><?= icon('phone') ?></span>
                    <div>
                        <h3>Phone</h3>
                        <p><a href="tel:<?= e(site('phone_href')) ?>"><?= e(site('phone')) ?></a></p>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-icon"><?= icon('mail') ?></span>
                    <div>
                        <h3>Email</h3>
                        <p><a href="mailto:<?= e(site('email')) ?>"><?= e(site('email')) ?></a></p>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-icon"><?= icon('clock') ?></span>
                    <div>
                        <h3>Opening hours</h3>
                        <p>
                            <?php foreach ($hours as $index => $slot) { ?>
                                <?= e($slot['days']) ?>: <?= e($slot['time']) ?><?= $index < count($hours) - 1 ? '<br>' : '' ?>
                            <?php } ?>
                        </p>
                    </div>
                </div>

                <div class="info-item">
                    <span class="info-icon"><?= icon('truck') ?></span>
                    <div>
                        <h3>Lead time</h3>
                        <p><?= e(site('lead_time_note')) ?></p>
                    </div>
                </div>
            </div>

            <form class="contact-form" id="contactForm" novalidate data-reveal>
                <h3 class="contact-form-title">Start your order</h3>
                <p class="contact-form-hint">Fields marked with * are required.</p>

                <div class="form-row">
                    <div class="form-group">
                        <label for="contactName">Your name *</label>
                        <input type="text" id="contactName" name="name" placeholder="Jane Doe"
                               autocomplete="name" required>
                    </div>
                    <div class="form-group">
                        <label for="contactEmail">Email *</label>
                        <input type="email" id="contactEmail" name="email" placeholder="jane@example.com"
                               autocomplete="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="contactCake">Cake you&rsquo;re after</label>
                        <select id="contactCake" name="cake">
                            <option value="">Not sure yet — help me choose</option>
                            <?php foreach ($menuItems as $item) { ?>
                                <option value="<?= e($item->name) ?>"><?= e($item->name) ?></option>
                            <?php } ?>
                            <option value="Custom design">Something custom</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contactDate">Date needed</label>
                        <input type="date" id="contactDate" name="date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="contactMessage">Tell us about it *</label>
                    <textarea id="contactMessage" name="message" rows="5" required
                              placeholder="Occasion, number of guests, colours, any allergies we should know about…"></textarea>
                </div>

                <div class="form-feedback form-feedback--error" id="contactError" role="alert">
                    <?= icon('alert-circle') ?>
                    <span id="contactErrorText"></span>
                </div>

                <div class="form-feedback form-feedback--success" id="contactSuccess" role="status">
                    <?= icon('check-circle') ?>
                    <span>Thank you — your enquiry is with us. We&rsquo;ll reply within one working day.</span>
                </div>

                <button type="submit" class="btn btn--primary btn--lg btn--block">
                    Send enquiry <?= icon('send') ?>
                </button>
            </form>
        </div>
    </div>
</section>
