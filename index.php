<?php

    require __DIR__ . '/bootstrap.php';

    $request = (string)explode('?', $_SERVER['REQUEST_URI'])[0];
    $arg = explode('/', $request);
    $slug = $arg[1] === '' ? 'homepage' : $arg[1];

    $variant = $siteConfig['variant'];

    // Validate slug against allowed pages for this variant
    if (!in_array($slug, $siteConfig['valid_pages'])) {
        header("HTTP/1.0 404 Not Found");
        $slug = 'error404';
    }

    // Three-tier resolution: variant-specific → shared → 404
    $variantPath = __DIR__ . '/pages/' . $variant . '/' . $slug . '.php';
    $sharedPath = __DIR__ . '/pages/shared/' . $slug . '.php';

    if (file_exists($variantPath)) {
        include $variantPath;
    } elseif (file_exists($sharedPath)) {
        include $sharedPath;
    } else {
        header("HTTP/1.0 404 Not Found");
        include __DIR__ . '/pages/shared/error404.php';
    }
?>
