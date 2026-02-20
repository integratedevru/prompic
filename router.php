<?php

/**
 * Router for PHP built-in development server.
 * Usage: php -S localhost:8000 router.php
 *
 * Serves static files directly, routes everything else through index.php
 * (mimics Apache .htaccess RewriteCond/RewriteRule behavior).
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

// Serve existing files and directories as-is (CSS, JS, images, handlers, etc.)
if ($uri !== '/' && file_exists($file)) {
    if (is_dir($file)) {
        return false;
    }
    // Let PHP serve .php files directly
    if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
        return false;
    }
    // Serve static files with correct MIME type
    return false;
}

// Route everything else through index.php
require __DIR__ . '/index.php';
