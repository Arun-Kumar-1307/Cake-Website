/**
 * Navbar: mobile drawer toggle + shadow on scroll.
 */
export function initNavbar() {
    const navbar = document.getElementById('navbar');
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    const backdrop = document.getElementById('navBackdrop');

    if (!navbar || !hamburger || !navMenu) return;

    const setMenuOpen = (isOpen) => {
        navMenu.classList.toggle('is-active', isOpen);
        hamburger.classList.toggle('is-active', isOpen);
        backdrop?.classList.toggle('is-active', isOpen);
        hamburger.setAttribute('aria-expanded', String(isOpen));
        hamburger.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
        // Stop the page scrolling behind the open drawer
        document.body.style.overflow = isOpen ? 'hidden' : '';
    };

    hamburger.addEventListener('click', () => {
        setMenuOpen(!navMenu.classList.contains('is-active'));
    });

    backdrop?.addEventListener('click', () => setMenuOpen(false));

    // Any link tap closes the drawer
    navMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setMenuOpen(false));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') setMenuOpen(false);
    });

    // Reset the drawer if the viewport grows past the mobile breakpoint
    window.matchMedia('(min-width: 861px)').addEventListener('change', (event) => {
        if (event.matches) setMenuOpen(false);
    });

    const onScroll = () => {
        navbar.classList.toggle('is-scrolled', window.scrollY > 20);
    };

    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
}
