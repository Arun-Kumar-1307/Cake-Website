/**
 * Scroll behaviours: reveal-on-scroll, anchor offset for the sticky header,
 * and the back-to-top button.
 */

/** Fade/slide elements marked with [data-reveal] into view once. */
export function initScrollReveal() {
    const targets = document.querySelectorAll('[data-reveal]');
    if (!targets.length) return;

    // No IntersectionObserver (or reduced motion): just show everything.
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!('IntersectionObserver' in window) || prefersReducedMotion) {
        targets.forEach((target) => target.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        },
        { rootMargin: '0px 0px -10% 0px', threshold: 0.1 }
    );

    targets.forEach((target) => observer.observe(target));
}

/** Offset in-page anchor jumps so the sticky navbar never covers the heading. */
export function initSmoothAnchors() {
    const headerOffset = 90;

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (event) => {
            const href = anchor.getAttribute('href');
            if (!href || href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            event.preventDefault();

            window.scrollTo({
                top: target.getBoundingClientRect().top + window.scrollY - headerOffset,
                behavior: 'smooth',
            });
        });
    });
}

export function initBackToTop() {
    const button = document.getElementById('backToTop');
    if (!button) return;

    const onScroll = () => {
        button.classList.toggle('is-visible', window.scrollY > 600);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    button.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}
