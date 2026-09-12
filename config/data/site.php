<?php

/**
 * BUSINESS DETAILS — edit this file to change anything that appears in more
 * than one place (navbar, contact cards, footer, page metadata).
 */

return [
    'name'        => 'Artisan Cake Studio',
    'tagline'     => 'Small-batch celebration cakes',
    'description' => 'Small-batch celebration cakes, wedding tiers and custom bakes, '
        . 'handmade to order in our studio kitchen from scratch ingredients.',

    'phone'         => '+1 (555) 123-4567',
    'phone_href'    => '+15551234567',
    'email'         => 'hello@artisancakes.com',
    'address_line1' => '18 Baker\'s Lane, Old Town',
    'address_line2' => 'Your City, 10024',

    'hours' => [
        ['days' => 'Mon – Fri', 'time' => '10:00 AM – 6:00 PM'],
        ['days' => 'Sat – Sun', 'time' => '11:00 AM – 5:00 PM'],
    ],

    /* Order-lead-time promise shown in the menu and modal. */
    'lead_time_note' => 'Most cakes need 48 hours notice. Wedding tiers and large custom builds, 2 weeks.',

    'stats' => [
        ['value' => '12+', 'label' => 'Years baking'],
        ['value' => '4,800', 'label' => 'Cakes delivered'],
        ['value' => '4.9', 'label' => 'Average rating'],
    ],

    'socials' => [
        ['label' => 'Instagram', 'icon' => 'instagram', 'url' => '#'],
        ['label' => 'Facebook', 'icon' => 'facebook', 'url' => '#'],
        ['label' => 'Pinterest', 'icon' => 'pinterest', 'url' => '#'],
        ['label' => 'WhatsApp', 'icon' => 'whatsapp', 'url' => '#'],
    ],

    'nav' => [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'Menu', 'href' => '#menu'],
        ['label' => 'Gallery', 'href' => '#gallery'],
        ['label' => 'About', 'href' => '#about'],
        ['label' => 'Reviews', 'href' => '#testimonials'],
        ['label' => 'Contact', 'href' => '#contact'],
    ],
];
