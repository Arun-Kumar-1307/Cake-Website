<?php

/**
 * Application bootstrap: paths, template loader and shared view helpers.
 * Included once from View/index.php before anything is rendered.
 */

/** Absolute filesystem path to the project root (the parent of /config). */
define('APP_ROOT', dirname(__DIR__));

/**
 * Public URL prefix for the site root.
 *
 * Derived from where the project actually sits inside the document root, so the
 * same code works when served from a sub-folder (/cake-website) or from a
 * domain root (/) without editing any paths.
 */
if (!defined('BASE_URL')) {
    $docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : false;
    $docRoot = $docRoot ? str_replace('\\', '/', $docRoot) : '';
    $appRoot = str_replace('\\', '/', APP_ROOT);

    $prefix = ($docRoot !== '' && strpos($appRoot, $docRoot) === 0)
        ? substr($appRoot, strlen($docRoot))
        : '';

    define('BASE_URL', rtrim($prefix, '/'));
}

require_once APP_ROOT . '/config/icons.php';

/**
 * Render a section template from /_template.
 */
function load_template(string $file): void
{
    $path = APP_ROOT . '/_template/' . $file . '.php';

    if (!is_file($path)) {
        trigger_error("Template not found: {$file}", E_USER_WARNING);
        return;
    }

    include $path;
}

/**
 * Business details from config/data/site.php (loaded once per request).
 *
 * site()          → the whole array
 * site('phone')   → one value, or null when the key is missing
 */
function site(?string $key = null)
{
    static $config = null;

    if ($config === null) {
        $config = require APP_ROOT . '/config/data/site.php';
    }

    if ($key === null) {
        return $config;
    }

    return $config[$key] ?? null;
}

/**
 * Load a content file from config/data (menu items, gallery, testimonials).
 */
function load_data(string $file): array
{
    $path = APP_ROOT . '/config/data/' . $file . '.php';

    if (!is_file($path)) {
        trigger_error("Data file not found: {$file}", E_USER_WARNING);
        return [];
    }

    return require $path;
}

/**
 * Build a URL for a file inside /public.
 * e.g. asset('images/hero-cake.jpg') → /cake-website/public/images/hero-cake.jpg
 */
function asset(string $path): string
{
    return BASE_URL . '/public/' . ltrim($path, '/');
}

/**
 * Escape a value for safe output in HTML text or attributes.
 */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Encode data for a data-* attribute that JavaScript will JSON.parse.
 */
function attr_json($value): string
{
    return htmlspecialchars(json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), ENT_QUOTES, 'UTF-8');
}
