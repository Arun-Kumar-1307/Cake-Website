/**
 * Entry point. Each behaviour lives in its own module under script/components
 * and is wired up here — add a component by importing and calling it below.
 *
 * Loaded as <script type="module">, so it defers automatically and every
 * import runs after the DOM is parsed.
 */

import { initNavbar } from './components/navbar.js';
import { initMenuFilter } from './components/menu-filter.js';
import { initCakeModal } from './components/menu-modal.js';
import { initGalleryLightbox } from './components/gallery-lightbox.js';
import { initForms } from './components/contact-form.js';
import { initScrollReveal, initSmoothAnchors, initBackToTop } from './components/scroll-effects.js';

/* Tells the inline head script that the app booted, so its failsafe stands
   down and scroll-reveal stays armed. */
document.documentElement.dataset.appReady = 'true';

initNavbar();
initMenuFilter();
initCakeModal();
initGalleryLightbox();
initForms();
initScrollReveal();
initSmoothAnchors();
initBackToTop();
