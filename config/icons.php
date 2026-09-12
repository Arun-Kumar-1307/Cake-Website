<?php

/**
 * Inline SVG icon library.
 *
 * All icons are stroke-based on a 24x24 grid and inherit the surrounding text
 * colour via `currentColor`, so they can be recoloured purely from CSS.
 * Add a new icon by adding one entry to Icons::PATHS — nothing else to wire up.
 *
 * Usage:  <?= icon('star') ?>            → default 24x24, aria-hidden
 *         <?= icon('phone', 'info-svg') ?>  → adds a CSS class
 */
class Icons
{
    /** Icons drawn with strokes (no fill). */
    private const STROKE_PATHS = [
        'arrow-right'  => '<path d="M5 12h14"/><path d="m13 6 6 6-6 6"/>',
        'arrow-up'     => '<path d="M12 19V5"/><path d="m6 11 6-6 6 6"/>',
        'chevron-left' => '<path d="m15 18-6-6 6-6"/>',
        'chevron-right' => '<path d="m9 18 6-6-6-6"/>',
        'close'        => '<path d="M18 6 6 18"/><path d="m6 6 12 12"/>',
        'zoom'         => '<circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/><path d="M11 8v6"/><path d="M8 11h6"/>',
        'eye'          => '<path d="M2 12s3.6-7 10-7 10 7 10 7-3.6 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/>',
        'cake'         => '<path d="M4 20h16"/><path d="M5 20v-6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v6"/><path d="M12 12V8"/><path d="M12 5.5c1 1 1.3 1.8.8 2.5-.4.6-1.2.6-1.6 0-.5-.7-.2-1.5.8-2.5z"/><path d="M5 15.5c1.2 0 1.2 1.2 2.3 1.2s1.2-1.2 2.4-1.2 1.2 1.2 2.3 1.2 1.2-1.2 2.4-1.2 1.2 1.2 2.3 1.2 1.2-1.2 2.3-1.2"/>',
        'whisk'        => '<path d="M12 3v7"/><path d="M12 21v-4"/><path d="M9 17h6l-1-7H10z"/><path d="M12 3c-2 2-3 4-3 7"/><path d="M12 3c2 2 3 4 3 7"/>',
        'palette'      => '<path d="M12 3a9 9 0 1 0 0 18c1.1 0 2-.9 2-2 0-.5-.2-1-.6-1.4-.4-.4-.6-.9-.6-1.4 0-1.1.9-2 2-2H17a4 4 0 0 0 4-4c0-4-4-7.2-9-7.2z"/><circle cx="8.5" cy="9.5" r="1.2"/><circle cx="12" cy="7.5" r="1.2"/><circle cx="15.5" cy="9.5" r="1.2"/><circle cx="7.5" cy="13.5" r="1.2"/>',
        'clock'        => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/>',
        'leaf'         => '<path d="M4 20c0-8 5-14 16-15 0 11-6 16-13 16H4z"/><path d="M9 15c2-3 5-5 9-6"/>',
        'location'     => '<path d="M12 22s7-5.6 7-11a7 7 0 1 0-14 0c0 5.4 7 11 7 11z"/><circle cx="12" cy="11" r="2.6"/>',
        'phone'        => '<path d="M5 3h3l2 5-2.4 1.6a12 12 0 0 0 5.8 5.8L15 13l5 2v3a2 2 0 0 1-2.2 2A16.5 16.5 0 0 1 3 5.2A2 2 0 0 1 5 3z"/>',
        'mail'         => '<rect x="3" y="5" width="18" height="14" rx="2.5"/><path d="m3.5 7 8.5 6 8.5-6"/>',
        'send'         => '<path d="M21 3 3 10.5l6.5 2.8L12 21z"/><path d="m9.5 13.3 11.5-10.3"/>',
        'check-circle' => '<circle cx="12" cy="12" r="9"/><path d="m8.5 12.5 2.5 2.5 4.5-5"/>',
        'alert-circle' => '<circle cx="12" cy="12" r="9"/><path d="M12 8v4.5"/><path d="M12 16h.01"/>',
        'sparkle'      => '<path d="M12 3.5 13.8 9l5.7 1.8-5.7 1.8L12 18.5l-1.8-5.9L4.5 10.8 10.2 9z"/><path d="M19 4.5v3"/><path d="M17.5 6h3"/>',
        'truck'        => '<path d="M3 7h10v9H3z"/><path d="M13 10h4l3 3v3h-7z"/><circle cx="7" cy="18" r="1.8"/><circle cx="17" cy="18" r="1.8"/>',
    ];

    /** Icons drawn with fills (no stroke). */
    private const FILL_PATHS = [
        'star'      => '<path d="M12 2.5l2.9 6 6.6.9-4.8 4.6 1.2 6.5-5.9-3.2-5.9 3.2 1.2-6.5L2.5 9.4l6.6-.9z"/>',
        'quote'     => '<path d="M9.2 6.5C6.3 8 4.8 10.4 4.8 13.6c0 2.4 1.4 3.9 3.3 3.9 1.8 0 3.1-1.3 3.1-3 0-1.7-1.1-2.9-2.7-2.9-.3 0-.6 0-.9.1.4-1.5 1.5-2.8 3.2-3.8l-1.6-1.4zm8.6 0C14.9 8 13.4 10.4 13.4 13.6c0 2.4 1.4 3.9 3.3 3.9 1.8 0 3.1-1.3 3.1-3 0-1.7-1.1-2.9-2.7-2.9-.3 0-.6 0-.9.1.4-1.5 1.5-2.8 3.2-3.8l-1.6-1.4z"/>',
        'instagram' => '<path d="M12 2.2c-2.7 0-3 0-4.1.1-1 0-1.8.2-2.4.5-.7.3-1.2.6-1.8 1.2-.6.6-.9 1.1-1.2 1.8-.3.6-.4 1.4-.5 2.4C2 9.3 2 9.6 2 12.3s0 3 .1 4.1c0 1 .2 1.8.5 2.4.3.7.6 1.2 1.2 1.8.6.6 1.1.9 1.8 1.2.6.3 1.4.4 2.4.5 1.1 0 1.4.1 4.1.1s3 0 4.1-.1c1 0 1.8-.2 2.4-.5.7-.3 1.2-.6 1.8-1.2.6-.6.9-1.1 1.2-1.8.3-.6.4-1.4.5-2.4 0-1.1.1-1.4.1-4.1s0-3-.1-4.1c0-1-.2-1.8-.5-2.4-.3-.7-.6-1.2-1.2-1.8-.6-.6-1.1-.9-1.8-1.2-.6-.3-1.4-.4-2.4-.5-1.1 0-1.4-.1-4.1-.1zm0 1.8c2.6 0 2.9 0 4 .1.8 0 1.3.2 1.6.3.4.2.7.4 1 .7.3.3.5.6.7 1 .1.3.3.8.3 1.6.1 1.1.1 1.4.1 4s0 2.9-.1 4c0 .8-.2 1.3-.3 1.6-.2.4-.4.7-.7 1-.3.3-.6.5-1 .7-.3.1-.8.3-1.6.3-1.1.1-1.4.1-4 .1s-2.9 0-4-.1c-.8 0-1.3-.2-1.6-.3-.4-.2-.7-.4-1-.7-.3-.3-.5-.6-.7-1-.1-.3-.3-.8-.3-1.6-.1-1.1-.1-1.4-.1-4s0-2.9.1-4c0-.8.2-1.3.3-1.6.2-.4.4-.7.7-1 .3-.3.6-.5 1-.7.3-.1.8-.3 1.6-.3 1.1-.1 1.4-.1 4-.1zm0 3.1a5.2 5.2 0 1 0 0 10.4 5.2 5.2 0 0 0 0-10.4zm0 8.6a3.4 3.4 0 1 1 0-6.8 3.4 3.4 0 0 1 0 6.8zm6.6-8.8a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0z"/>',
        'facebook'  => '<path d="M13.6 21.9v-8.6h2.9l.4-3.4h-3.3V7.7c0-1 .3-1.6 1.7-1.6h1.8V3.1c-.3 0-1.4-.1-2.6-.1-2.6 0-4.4 1.6-4.4 4.5v2.4H7.2v3.4h2.9v8.6h3.5z"/>',
        'pinterest' => '<path d="M12 2.2a9.8 9.8 0 0 0-3.6 18.9c-.1-.7-.2-1.8 0-2.6l1.4-5.8s-.3-.7-.3-1.8c0-1.7 1-3 2.2-3 1 0 1.5.8 1.5 1.7 0 1.1-.7 2.7-1 4.2-.3 1.2.6 2.2 1.8 2.2 2.1 0 3.7-2.2 3.7-5.4 0-2.8-2-4.8-4.9-4.8-3.3 0-5.3 2.5-5.3 5.1 0 1 .4 2.1.9 2.7.1.1.1.2.1.3l-.3 1.4c-.1.2-.2.3-.4.2-1.5-.7-2.4-2.9-2.4-4.7 0-3.8 2.8-7.3 7.9-7.3 4.1 0 7.3 2.9 7.3 6.9 0 4.1-2.6 7.4-6.2 7.4-1.2 0-2.4-.6-2.8-1.4l-.8 2.9c-.3 1-1 2.4-1.5 3.2A9.8 9.8 0 1 0 12 2.2z"/>',
        'whatsapp'  => '<path d="M17.5 14.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.1-.2.3-.8 1-1 1.2-.2.2-.4.2-.7.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6.1-.2.4-.5.6-.7.2-.2.2-.4.3-.6.1-.2 0-.4 0-.6-.1-.2-.7-1.7-.9-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.6.1-.9.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.3 3.2c.1.2 1.9 3 4.7 4.1 2.3 1 2.8.8 3.3.7.5 0 1.7-.7 1.9-1.3.2-.7.2-1.2.2-1.3-.1-.2-.3-.2-.6-.4zM12 21.5c-1.7 0-3.3-.4-4.7-1.3l-3.3.9.9-3.2A9.4 9.4 0 0 1 2.6 12 9.4 9.4 0 1 1 12 21.5zM12 1.2A10.8 10.8 0 0 0 2.7 17.5L1 23.6l6.3-1.7A10.8 10.8 0 1 0 12 1.2z"/>',
    ];

    public static function render(string $name, string $class = ''): string
    {
        $classAttr = $class !== '' ? ' class="' . htmlspecialchars($class, ENT_QUOTES) . '"' : '';

        if (isset(self::STROKE_PATHS[$name])) {
            return '<svg' . $classAttr . ' viewBox="0 0 24 24" fill="none" stroke="currentColor"'
                . ' stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"'
                . ' aria-hidden="true" focusable="false">' . self::STROKE_PATHS[$name] . '</svg>';
        }

        if (isset(self::FILL_PATHS[$name])) {
            return '<svg' . $classAttr . ' viewBox="0 0 24 24" fill="currentColor"'
                . ' aria-hidden="true" focusable="false">' . self::FILL_PATHS[$name] . '</svg>';
        }

        return '';
    }
}

/** Shorthand wrapper so templates stay readable. */
function icon(string $name, string $class = ''): string
{
    return Icons::render($name, $class);
}
