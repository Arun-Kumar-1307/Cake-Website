/**
 * Gallery lightbox: full-size viewer with keyboard and button navigation.
 */
export function initGalleryLightbox() {
    const lightbox = document.getElementById('galleryLightbox');
    const items = Array.from(document.querySelectorAll('.gallery-item'));

    if (!lightbox || !items.length) return;

    const image = lightbox.querySelector('[data-lightbox-image]');
    const tag = lightbox.querySelector('[data-lightbox-tag]');
    const title = lightbox.querySelector('[data-lightbox-title]');
    const counter = lightbox.querySelector('[data-lightbox-counter]');
    const closeButton = lightbox.querySelector('[data-lightbox-close]');

    let currentIndex = 0;
    let lastFocused = null;

    const show = (index) => {
        // Wrap around at both ends
        currentIndex = (index + items.length) % items.length;

        const item = items[currentIndex];
        const thumb = item.querySelector('img');

        image.src = item.dataset.full || thumb?.src || '';
        image.alt = thumb?.alt || item.dataset.title || '';
        tag.textContent = item.dataset.tag || '';
        title.textContent = item.dataset.title || '';
        counter.textContent = `${currentIndex + 1} of ${items.length}`;
    };

    const open = (index, trigger) => {
        lastFocused = trigger;
        show(index);
        lightbox.classList.add('is-open');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
        closeButton?.focus();
    };

    const close = () => {
        lightbox.classList.remove('is-open');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        lastFocused?.focus();
    };

    items.forEach((item, index) => {
        item.addEventListener('click', () => open(index, item));
    });

    lightbox.querySelector('[data-lightbox-prev]')?.addEventListener('click', () => show(currentIndex - 1));
    lightbox.querySelector('[data-lightbox-next]')?.addEventListener('click', () => show(currentIndex + 1));
    closeButton?.addEventListener('click', close);

    // Clicking the dark surround (but not the photo or a control) closes it
    lightbox.addEventListener('click', (event) => {
        if (event.target === lightbox) close();
    });

    document.addEventListener('keydown', (event) => {
        if (!lightbox.classList.contains('is-open')) return;

        if (event.key === 'Escape') close();
        if (event.key === 'ArrowLeft') show(currentIndex - 1);
        if (event.key === 'ArrowRight') show(currentIndex + 1);
    });
}
