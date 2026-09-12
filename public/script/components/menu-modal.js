/**
 * Cake detail modal.
 *
 * Every .menu-card carries its full detail payload in data-* attributes, so one
 * modal shell serves all cakes and nothing is duplicated in the markup.
 */

const STAR_SVG =
    '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">' +
    '<path d="M12 2.5l2.9 6 6.6.9-4.8 4.6 1.2 6.5-5.9-3.2-5.9 3.2 1.2-6.5L2.5 9.4l6.6-.9z"/></svg>';

/** Read a JSON data attribute without throwing on malformed content. */
function parseJsonAttr(value, fallback) {
    if (!value) return fallback;
    try {
        return JSON.parse(value);
    } catch {
        return fallback;
    }
}

export function initCakeModal() {
    const modal = document.getElementById('cakeModal');
    const cards = document.querySelectorAll('.menu-card');

    if (!modal || !cards.length) return;

    const dialog = modal.querySelector('.modal-dialog');
    const slots = {
        image: modal.querySelector('[data-modal-image]'),
        badge: modal.querySelector('[data-modal-badge]'),
        category: modal.querySelector('[data-modal-category]'),
        title: modal.querySelector('[data-modal-title]'),
        stars: modal.querySelector('[data-modal-stars]'),
        rating: modal.querySelector('[data-modal-rating]'),
        reviews: modal.querySelector('[data-modal-reviews]'),
        description: modal.querySelector('[data-modal-description]'),
        ingredients: modal.querySelector('[data-modal-ingredients]'),
        sizes: modal.querySelector('[data-modal-sizes]'),
        leadTime: modal.querySelector('[data-modal-lead-time]'),
    };
    const closeButton = modal.querySelector('.modal-close');
    const enquireButton = modal.querySelector('[data-modal-enquire]');

    let lastFocused = null;
    let activeCakeName = '';

    const render = (data) => {
        activeCakeName = data.name || '';

        slots.image.src = data.image || '';
        slots.image.alt = data.name || '';

        slots.badge.textContent = data.badge || '';
        slots.category.textContent = data.categoryLabel || '';
        slots.title.textContent = data.name || '';

        const rating = Number.parseFloat(data.rating) || 5;
        const starCount = Math.max(1, Math.min(5, Math.round(rating)));
        slots.stars.innerHTML = STAR_SVG.repeat(starCount);
        slots.stars.setAttribute('role', 'img');
        slots.stars.setAttribute('aria-label', `Rated ${rating} out of 5`);

        slots.rating.textContent = rating.toFixed(1);
        slots.reviews.textContent = data.reviews ? `(${data.reviews} reviews)` : '';
        slots.description.textContent = data.longDescription || '';
        slots.leadTime.textContent = data.leadTime ? `Needs ${data.leadTime}` : '';

        // Ingredient chips
        slots.ingredients.replaceChildren(
            ...parseJsonAttr(data.ingredients, []).map((ingredient) => {
                const chip = document.createElement('span');
                chip.className = 'modal-ingredient';
                chip.textContent = ingredient;
                return chip;
            })
        );

        // Size / price rows
        slots.sizes.replaceChildren(
            ...parseJsonAttr(data.sizes, []).map((size) => {
                const row = document.createElement('div');
                row.className = 'modal-size';

                const labelWrap = document.createElement('span');
                const label = document.createElement('span');
                label.className = 'modal-size-label';
                label.textContent = size.label || '';
                const serves = document.createElement('span');
                serves.className = 'modal-size-serves';
                serves.textContent = size.serves || '';
                labelWrap.append(label, serves);

                const price = document.createElement('span');
                price.className = 'modal-size-price';
                price.textContent = `$${size.price}`;

                row.append(labelWrap, price);
                return row;
            })
        );
    };

    const open = (card) => {
        lastFocused = card;

        render({
            name: card.dataset.name,
            categoryLabel: card.dataset.categoryLabel,
            image: card.dataset.image,
            badge: card.dataset.badge,
            rating: card.dataset.rating,
            reviews: card.dataset.reviews,
            leadTime: card.dataset.leadTime,
            longDescription: card.dataset.longDescription,
            ingredients: card.dataset.ingredients,
            sizes: card.dataset.sizes,
        });

        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        dialog.scrollTop = 0;
        closeButton?.focus();
    };

    const close = () => {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        lastFocused?.focus();
    };

    cards.forEach((card) => {
        card.addEventListener('click', () => open(card));
    });

    modal.querySelectorAll('[data-modal-close]').forEach((element) => {
        element.addEventListener('click', close);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && modal.classList.contains('is-open')) close();
    });

    // Keep tabbing inside the dialog while it is open
    modal.addEventListener('keydown', (event) => {
        if (event.key !== 'Tab' || !modal.classList.contains('is-open')) return;

        const focusable = dialog.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
        if (!focusable.length) return;

        const first = focusable[0];
        const last = focusable[focusable.length - 1];

        if (event.shiftKey && document.activeElement === first) {
            event.preventDefault();
            last.focus();
        } else if (!event.shiftKey && document.activeElement === last) {
            event.preventDefault();
            first.focus();
        }
    });

    /* "Enquire about this cake" → close, jump to the form, pre-fill it. */
    enquireButton?.addEventListener('click', () => {
        const cakeName = activeCakeName;
        close();

        const select = document.getElementById('contactCake');
        const message = document.getElementById('contactMessage');

        if (select) {
            const match = Array.from(select.options).find((option) => option.value === cakeName);
            select.value = match ? cakeName : 'Custom design';
        }

        if (message && message.value.trim() === '') {
            message.value = `Hi! I'd like to order the ${cakeName}. `;
        }

        document.getElementById('contact')?.scrollIntoView({ behavior: 'smooth', block: 'start' });

        // Focus the message box once the smooth scroll has settled
        window.setTimeout(() => message?.focus({ preventScroll: true }), 600);
    });
}
