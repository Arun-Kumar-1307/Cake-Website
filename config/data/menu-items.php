<?php

/**
 * MENU CONTENT — edit this file to change the cakes shown on the site.
 *
 * Each entry becomes one card in the Menu section plus its detail modal.
 * Images live in /public/images. Categories must be one of:
 * 'chocolate', 'vanilla', 'specialty' (they drive the filter buttons).
 */

require_once APP_ROOT . '/config/models/MenuItem.php';

return [
    new MenuItem(
        id: 1,
        name: 'Classic Chocolate Truffle',
        shortDescription: 'Four layers of dark Belgian sponge under a mirror-glaze ganache.',
        longDescription: 'Our signature: four featherlight layers of 70% Belgian dark chocolate sponge, '
            . 'brushed with vanilla syrup and filled with whipped ganache. Finished with a hand-poured '
            . 'mirror glaze and a single crystallised rose petal.',
        category: 'chocolate',
        image: 'images/menu-chocolate-classic.jpg',
        ingredients: ['70% Belgian dark chocolate', 'Single-origin cocoa', 'Free-range eggs', 'Cultured butter', 'Madagascan vanilla'],
        sizes: [
            ['label' => '6" round', 'serves' => 'Serves 8–10', 'price' => 45],
            ['label' => '8" round', 'serves' => 'Serves 14–18', 'price' => 68],
            ['label' => '10" round', 'serves' => 'Serves 24–30', 'price' => 92],
        ],
        badge: 'Bestseller',
        rating: 4.9,
        reviewCount: 214,
        leadTime: '48 hours notice'
    ),

    new MenuItem(
        id: 2,
        name: 'Wild Berry Vanilla Dream',
        shortDescription: 'Vanilla bean sponge layered with berry compote and mascarpone cream.',
        longDescription: 'A summer classic built on vanilla bean sponge, layered with slow-cooked wild '
            . 'berry compote and airy mascarpone cream. Crowned with fresh raspberries, redcurrants and '
            . 'blackberries picked for the day it leaves our kitchen.',
        category: 'vanilla',
        image: 'images/menu-vanilla-dreams.jpg',
        ingredients: ['Madagascan vanilla bean', 'Wild raspberries', 'Redcurrants', 'Mascarpone cream', 'Stone-ground flour'],
        sizes: [
            ['label' => '6" round', 'serves' => 'Serves 8–10', 'price' => 42],
            ['label' => '8" round', 'serves' => 'Serves 14–18', 'price' => 64],
            ['label' => '10" round', 'serves' => 'Serves 24–30', 'price' => 88],
        ],
        badge: 'Seasonal',
        rating: 4.8,
        reviewCount: 156,
        leadTime: '48 hours notice'
    ),

    new MenuItem(
        id: 3,
        name: 'Red Velvet Romance',
        shortDescription: 'Velvet cocoa layers with tangy cream cheese frosting and a berry coulis.',
        longDescription: 'The cake people book us for. Deep crimson cocoa-buttermilk layers stay impossibly '
            . 'moist against a tangy Philadelphia cream cheese frosting, plated with a raspberry coulis '
            . 'swirl and a tempered chocolate cigarillo.',
        category: 'specialty',
        image: 'images/menu-red-velvet.jpg',
        ingredients: ['Cocoa buttermilk sponge', 'Philadelphia cream cheese', 'Raspberry coulis', 'Beetroot colouring', 'Tempered dark chocolate'],
        sizes: [
            ['label' => '6" round', 'serves' => 'Serves 8–10', 'price' => 50],
            ['label' => '8" round', 'serves' => 'Serves 14–18', 'price' => 74],
            ['label' => '10" round', 'serves' => 'Serves 24–30', 'price' => 98],
        ],
        badge: 'Most loved',
        rating: 5.0,
        reviewCount: 302,
        leadTime: '48 hours notice'
    ),

    new MenuItem(
        id: 4,
        name: 'Chocolate Shard Gateau',
        shortDescription: 'Milk chocolate mousse cake crowned with hand-tempered chocolate shards.',
        longDescription: 'Silky milk chocolate mousse set over a cocoa-nib brownie base, jacketed in '
            . 'chocolate vermicelli and finished with hand-tempered chocolate shards and brandied cherries. '
            . 'A showpiece that slices cleanly for a crowd.',
        category: 'chocolate',
        image: 'images/menu-chocolate-truffle.jpg',
        ingredients: ['Milk chocolate mousse', 'Cocoa nib brownie base', 'Brandied cherries', 'Tempered chocolate shards', 'Double cream'],
        sizes: [
            ['label' => '7" round', 'serves' => 'Serves 10–12', 'price' => 55],
            ['label' => '9" round', 'serves' => 'Serves 18–22', 'price' => 79],
            ['label' => '11" round', 'serves' => 'Serves 28–34', 'price' => 105],
        ],
        badge: '',
        rating: 4.9,
        reviewCount: 128,
        leadTime: '72 hours notice'
    ),

    new MenuItem(
        id: 5,
        name: 'Honey Lavender Vanilla',
        shortDescription: 'Delicate lavender-honey sponge with vanilla Chantilly and a honey glaze.',
        longDescription: 'Culinary lavender steeped in local wildflower honey perfumes a light vanilla '
            . 'sponge, softened with vanilla Chantilly and a warm honey glaze. Floral without ever tipping '
            . 'into soapy — our most requested afternoon-tea cake.',
        category: 'vanilla',
        image: 'images/menu-lavender-vanilla.jpg',
        ingredients: ['Culinary lavender', 'Wildflower honey', 'Vanilla Chantilly', 'Lemon zest', 'Cultured butter'],
        sizes: [
            ['label' => 'Box of 6 individuals', 'serves' => 'Serves 6', 'price' => 30],
            ['label' => '6" round', 'serves' => 'Serves 8–10', 'price' => 48],
            ['label' => '8" round', 'serves' => 'Serves 14–18', 'price' => 70],
        ],
        badge: 'New',
        rating: 4.7,
        reviewCount: 64,
        leadTime: '48 hours notice'
    ),

    new MenuItem(
        id: 6,
        name: 'Black Forest Kirschtorte',
        shortDescription: 'Kirsch-soaked chocolate sponge, morello cherries and Chantilly cream.',
        longDescription: 'Baked to the Schwarzwald original: chocolate sponge soaked in genuine Kirschwasser, '
            . 'layered with morello cherries and clouds of barely-sweet Chantilly, then buried under chocolate '
            . 'curls and glacé cherries.',
        category: 'specialty',
        image: 'images/menu-black-forest.jpg',
        ingredients: ['Morello cherries', 'Kirschwasser', 'Chocolate curls', 'Chantilly cream', 'Dutch cocoa'],
        sizes: [
            ['label' => '7" round', 'serves' => 'Serves 10–12', 'price' => 52],
            ['label' => '9" round', 'serves' => 'Serves 18–22', 'price' => 76],
            ['label' => '11" round', 'serves' => 'Serves 28–34', 'price' => 102],
        ],
        badge: '',
        rating: 4.8,
        reviewCount: 97,
        leadTime: '72 hours notice'
    ),

    new MenuItem(
        id: 7,
        name: 'Strawberry Cloud Shortcake',
        shortDescription: 'Genoise sponge, vanilla diplomat cream and macerated strawberries.',
        longDescription: 'Barely-there genoise sponge alternating with vanilla diplomat cream and '
            . 'strawberries macerated in vanilla sugar. Light enough for a summer garden party, elegant '
            . 'enough for an engagement.',
        category: 'vanilla',
        image: 'images/menu-strawberry-bliss.jpg',
        ingredients: ['Macerated strawberries', 'Vanilla diplomat cream', 'Genoise sponge', 'Strawberry glaze', 'Fresh mint'],
        sizes: [
            ['label' => '6" square', 'serves' => 'Serves 8–10', 'price' => 44],
            ['label' => '8" square', 'serves' => 'Serves 14–18', 'price' => 66],
            ['label' => '10" square', 'serves' => 'Serves 24–30', 'price' => 90],
        ],
        badge: 'Seasonal',
        rating: 4.9,
        reviewCount: 143,
        leadTime: '48 hours notice'
    ),

    new MenuItem(
        id: 8,
        name: 'Salted Caramel Butter Cake',
        shortDescription: 'Golden butter sponge under a burnt salted-caramel frosting.',
        longDescription: 'Old-fashioned golden butter sponge, split three ways and blanketed in burnt '
            . 'salted-caramel frosting cooked to the edge of bitterness so it never cloys. Finished with '
            . 'Maldon sea salt flakes.',
        category: 'specialty',
        image: 'images/menu-salted-caramel.jpg',
        ingredients: ['Burnt caramel', 'Maldon sea salt', 'Golden butter sponge', 'Muscovado sugar', 'Jersey cream'],
        sizes: [
            ['label' => '6" round', 'serves' => 'Serves 8–10', 'price' => 46],
            ['label' => '8" round', 'serves' => 'Serves 14–18', 'price' => 69],
            ['label' => '10" round', 'serves' => 'Serves 24–30', 'price' => 94],
        ],
        badge: 'Bestseller',
        rating: 4.8,
        reviewCount: 175,
        leadTime: '48 hours notice'
    ),
];
