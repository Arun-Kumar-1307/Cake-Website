// Hamburger Menu Toggle
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

hamburger.addEventListener('click', () => {
    navMenu.classList.toggle('active');
});

// Close menu when link is clicked
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
    });
});

// Load Menu Items
function loadMenuItems() {
    const menuGrid = document.getElementById('menuGrid');
    menuGrid.innerHTML = '';

    const menuData = [
        { name: 'Chocolate Cake', description: 'A rich and decadent chocolate cake.', category: 'cakes', price: 25 },
        { name: 'Vanilla Cake', description: 'A classic vanilla cake.', category: 'cakes', price: 20 },
        { name: 'Strawberry Shortcake', description: 'A fresh strawberry shortcake.', category: 'shortcakes', price: 30 }
    ];

    menuData.forEach(cake => {
        const menuCard = document.createElement('div');
        menuCard.className = 'menu-card';
        menuCard.setAttribute('data-category', cake.category);

        menuCard.innerHTML = `
            <img src="${cake.image}" alt="${cake.name}" class="menu-card-image">
            <div class="menu-card-content">
                <h3 class="menu-card-title">${cake.name}</h3>
                <p class="menu-card-description">${cake.description}</p>
                <div>
                    <span class="menu-card-price-label">Price from</span>
                    <div class="menu-card-price">$${cake.price}</div>
                </div>
            </div>
        `;

        menuGrid.appendChild(menuCard);
    });

    setupFilterButtons();
}

// Filter Menu Items
function setupFilterButtons() {
    const filterButtons = document.querySelectorAll('.filter-btn');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');
            const menuCards = document.querySelectorAll('.menu-card');

            menuCards.forEach(card => {
                if (filter === 'all') {
                    card.style.display = 'block';
                } else {
                    const category = card.getAttribute('data-category');
                    card.style.display = category === filter ? 'block' : 'none';
                }
            });
        });
    });
}

// Load Gallery
function loadGallery() {
    const galleryGrid = document.getElementById('galleryGrid');
    
    const galleryImages = [
        { query: 'artisan-cake-closeup', alt: 'Cake Detail 1' },
        { query: 'wedding-cake-elegant', alt: 'Wedding Cake' },
        { query: 'birthday-cake-colorful', alt: 'Birthday Cake' },
        { query: 'chocolate-cake-artisan', alt: 'Chocolate Cake' },
        { query: 'cake-decoration-detail', alt: 'Cake Decoration' },
        { query: 'custom-cake-design', alt: 'Custom Design' }
    ];

    galleryImages.forEach((img, index) => {
        const galleryItem = document.createElement('div');
        galleryItem.className = 'gallery-item';
        galleryItem.innerHTML = `
            <img src="/placeholder.svg?key=exby2" 
                 alt="${img.alt}">
        `;
        galleryGrid.appendChild(galleryItem);
    });
}

// Load Testimonials
function loadTestimonials() {
    const testimonialsGrid = document.getElementById('testimonialsGrid');

    const testimonials = [
        { text: 'The cake was delicious!', author: 'John Doe', rating: '5/5' },
        { text: 'Great service!', author: 'Jane Smith', rating: '4/5' }
    ];

    testimonials.forEach(testimonial => {
        const testimonialCard = document.createElement('div');
        testimonialCard.className = 'testimonial-card';

        testimonialCard.innerHTML = `
            <div class="testimonial-text">"${testimonial.text}"</div>
            <div class="testimonial-author">${testimonial.author}</div>
            <div class="testimonial-rating">${testimonial.rating}</div>
        `;

        testimonialsGrid.appendChild(testimonialCard);
    });
}

// Handle Contact Form
document.getElementById('contactForm').addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Thank you for your message! We will get back to you soon.');
    document.getElementById('contactForm').reset();
});

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    loadMenuItems();
    loadGallery();
    loadTestimonials();
});

// Smooth scroll offset for fixed navbar
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const headerOffset = 70;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        }
    });
});