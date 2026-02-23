<?php

$baseDir = dirname(__DIR__);

/**
 * Scan a directory for .webp slider images, return entries sorted naturally.
 */
if (!function_exists('scanSliderImages')) {
function scanSliderImages(string $baseDir, string $relDir): array
{
    $absDir = $baseDir . '/' . $relDir;
    $files = glob($absDir . '/*.webp');
    if (!$files) {
        return [];
    }
    natsort($files);

    $images = [];
    $index = 1;
    foreach ($files as $file) {
        $filename = basename($file);
        $images[] = [
            'src' => '../' . $relDir . '/' . $filename,
            'alt' => 'Slide ' . $index,
        ];
        $index++;
    }
    return $images;
}
}

return [
    'projects' => [
        'images' => scanSliderImages($baseDir, 'img/homepage/slider2'),
    ],
];
