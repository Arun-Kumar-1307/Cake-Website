/**
 * Menu category filter. Cards are hidden with a class rather than an inline
 * style so CSS keeps full control of layout.
 */
export function initMenuFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.menu-card');

    if (!filterButtons.length || !cards.length) return;

    const applyFilter = (filter) => {
        cards.forEach((card) => {
            const matches = filter === 'all' || card.dataset.category === filter;
            card.classList.toggle('is-hidden', !matches);
        });
    };

    filterButtons.forEach((button) => {
        button.addEventListener('click', () => {
            filterButtons.forEach((btn) => {
                const isActive = btn === button;
                btn.classList.toggle('is-active', isActive);
                btn.setAttribute('aria-pressed', String(isActive));
            });

            applyFilter(button.dataset.filter || 'all');
        });
    });
}
