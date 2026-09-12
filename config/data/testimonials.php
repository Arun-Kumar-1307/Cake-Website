<?php

/**
 * REVIEW CONTENT — edit this file to change the testimonials section.
 */

require_once APP_ROOT . '/config/models/Testimonial.php';

return [
    new Testimonial(
        quote: 'The red velvet was the centrepiece of our reception and guests are still talking about it '
            . 'a year later. It travelled two hours in summer heat and arrived flawless.',
        author: 'Emily Johnson',
        occasion: 'Wedding, June 2025',
        rating: 5
    ),
    new Testimonial(
        quote: 'I asked for a rainbow cake for my daughter turning three and got something better than the '
            . 'photo I sent. Every layer was a different colour and it tasted as good as it looked.',
        author: 'Sarah Mitchell',
        occasion: "Child's birthday",
        rating: 5
    ),
    new Testimonial(
        quote: 'We order the chocolate truffle gateau for every office milestone now. Consistent every '
            . 'single time, and they always hit the delivery window.',
        author: 'Michael Chen',
        occasion: 'Corporate orders',
        rating: 5
    ),
    new Testimonial(
        quote: 'The honey lavender is unlike anything else in town — floral but not perfumey. I brought it '
            . 'to a dinner party and had to text the address to three people.',
        author: 'Lisa Thompson',
        occasion: 'Afternoon tea',
        rating: 5
    ),
    new Testimonial(
        quote: 'They handled a last-minute eggless request for my mother without blinking and the sponge '
            . 'was still beautifully light. Genuinely thoughtful service.',
        author: 'Robert Davis',
        occasion: 'Anniversary',
        rating: 5
    ),
    new Testimonial(
        quote: 'Booked the strawberry shortcake for a garden engagement party. It looked like something '
            . 'from a magazine and the berries were perfectly ripe.',
        author: 'Amanda Rodriguez',
        occasion: 'Engagement party',
        rating: 5
    ),
];
