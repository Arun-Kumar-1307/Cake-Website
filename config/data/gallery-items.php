<?php

/**
 * GALLERY CONTENT — edit this file to change the photos in the Gallery section.
 * The first and sixth entries render as the large feature tiles in the mosaic.
 */

require_once APP_ROOT . '/config/models/GalleryItem.php';

return [
    new GalleryItem(
        title: 'Buttercream Rose Garden',
        tag: 'Hand piping',
        image: 'images/gallery-rose-detail.jpg',
        alt: 'Close-up of a cake covered in hand-piped pink and cream buttercream roses'
    ),
    new GalleryItem(
        title: 'Three-Tier Wedding Cake',
        tag: 'Weddings',
        image: 'images/gallery-wedding.jpg',
        alt: 'Three-tier ivory buttercream wedding cake topped with fresh pink garden roses',
        focus: 'center top'
    ),
    new GalleryItem(
        title: 'Birthday Candlelight',
        tag: 'Celebrations',
        image: 'images/gallery-birthday.jpg',
        alt: 'Birthday cake glowing with lit coloured candles',
        focus: 'center 35%'
    ),
    new GalleryItem(
        title: 'Chocolate & Coffee Pairing',
        tag: 'Café menu',
        image: 'images/gallery-chocolate.jpg',
        alt: 'Slice of layered chocolate cake with cream, served beside a flat white'
    ),
    new GalleryItem(
        title: 'Berry Compote Finish',
        tag: 'Detailing',
        image: 'images/gallery-decoration.jpg',
        alt: 'Cake topped with dark chocolate shavings and a glossy berry compote centre'
    ),
    new GalleryItem(
        title: 'Rainbow Layer Commission',
        tag: 'Custom builds',
        image: 'images/gallery-custom.jpg',
        alt: 'Sliced rainbow layer cake decorated with sprinkles, sugar stars and a number candle'
    ),
];
