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
    'hero' => [
        'orig' => [
            'heading' => 'Производство срубов, строительство деревянных домов, бань, беседок по Псковской области',
            'images' => [
                ['src' => '../img/homepage/slider1/slider1_foto1.webp', 'alt' => 'Slide 1'],
                ['src' => '../img/homepage/slider1/slider1_foto2.webp', 'alt' => 'Slide 2'],
                ['src' => '../img/homepage/slider1/slider1_foto3.webp', 'alt' => 'Slide 3'],
                ['src' => '../img/homepage/slider1/slider1_foto4.webp', 'alt' => 'Slide 4'],
                ['src' => '../img/homepage/slider1/slider1_foto5_2.webp', 'alt' => 'Slide 5'],
                ['src' => '../img/homepage/slider1/slider1_foto6_4.webp', 'alt' => 'Slide 6'],
            ],
        ],
        'spb' => [
            'heading' => 'Производство срубов, строительство деревянных домов, бань, беседок в Санкт-Петербурге и области',
            'images' => [
                ['src' => '../img/homepage/slider1/slider1_foto1.webp', 'alt' => 'Slide 1'],
                ['src' => '../img/homepage/slider1/slider1_foto2.webp', 'alt' => 'Slide 2'],
                ['src' => '../img/homepage/slider1/slider1_foto3.webp', 'alt' => 'Slide 3'],
                ['src' => '../img/homepage/slider1/slider1_foto4.webp', 'alt' => 'Slide 4'],
                ['src' => '../img/homepage/slider1/slider1_foto5_2.webp', 'alt' => 'Slide 5'],
                ['src' => '../img/homepage/slider1/slider1_foto6_4.webp', 'alt' => 'Slide 6'],
            ],
        ],
    ],
    'projects' => [
        'images' => scanSliderImages($baseDir, 'img/homepage/slider2'),
    ],
];
