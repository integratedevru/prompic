<?php

$baseDir = dirname(__DIR__);

/**
 * Scan a directory for .webp files, return gallery image entries sorted naturally.
 */
function scanGalleryImages(string $baseDir, string $relDir, string $captionPrefix = ''): array
{
    $absDir = $baseDir . '/' . $relDir;
    $files = glob($absDir . '/*.webp');
    if (!$files) {
        return [];
    }
    natsort($files);

    $images = [];
    foreach ($files as $file) {
        $filename = basename($file);
        // Extract number from filename for caption
        preg_match('/(\d+)/', $filename, $m);
        $num = $m[1] ?? '';
        $images[] = [
            'src' => '../' . $relDir . '/' . $filename,
            'caption' => $captionPrefix ? "{$captionPrefix} {$num}" : '',
        ];
    }
    return $images;
}

return [
    [
        'id' => 'gallery1',
        'title' => 'Производство',
        'thumbnail' => '../img/gallery2/gallery2_photo1.webp',
        'css_class' => '',
        'images' => scanGalleryImages($baseDir, 'img/gallery/production', 'Производство'),
    ],
    [
        'id' => 'gallery2',
        'title' => 'Строительный <br>процесс',
        'thumbnail' => '../img/gallery2/gallery2_photo2.webp',
        'css_class' => '',
        'images' => scanGalleryImages($baseDir, 'img/proizvodstvo/slider3', 'Строительный процесс'),
    ],
    [
        'id' => 'gallery3',
        'title' => 'Частные проекты',
        'thumbnail' => '../img/gallery2/gallery2_photo3.webp',
        'css_class' => '',
        'images' => scanGalleryImages($baseDir, 'img/gallery/chastniye'),
    ],
    [
        'id' => 'gallery4',
        'title' => "База отдыха <br>«Лесной Оазис»",
        'thumbnail' => '../img/gallery2/gallery2_photo4.webp',
        'css_class' => '',
        'images' => scanGalleryImages($baseDir, 'img/gallery/kommercheskiye/LesOazis', 'База отдыха «Лесной Оазис»'),
    ],
    [
        'id' => 'gallery5',
        'title' => 'Банный комплекс «Усадьба банная»',
        'thumbnail' => '../img/gallery2/gallery2_photo5.webp',
        'css_class' => '',
        'images' => scanGalleryImages($baseDir, 'img/gallery/kommercheskiye/MskBani', 'Банный комплекс «Усадьба банная»'),
    ],
    [
        'id' => 'gallery6',
        'title' => 'Эко отель «Заозерье»',
        'thumbnail' => '../img/gallery2/gallery2_photo6.webp',
        'css_class' => '',
        'images' => scanGalleryImages($baseDir, 'img/gallery/kommercheskiye/Zaozere', 'Эко отель «Заозерье»'),
    ],
    [
        'id' => 'gallery7',
        'title' => 'Храмы и часовни',
        'thumbnail' => '../img/gallery2/gallery2_photo7.webp',
        'css_class' => 'center',
        'images' => [
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_8.webp', 'caption' => 'Храм Иконы Божией Матери «Спорительница Хлебов» (г. Лобня)'],
            ['src' => '../img/gallery/hramy/objects_rakhia/hram/Hram_rakhia_1.webp', 'caption' => 'Храм Святой Великомученницы Варвары (п. Рахья) фото 1'],
            ['src' => '../img/gallery/hramy/objects_rakhia/hram/Hram_rakhia_2.webp', 'caption' => 'Храм Святой Великомученницы Варвары (п. Рахья) фото 2'],
            ['src' => '../img/gallery/hramy/objects_rakhia/hram/Hram_rakhia_3.webp', 'caption' => 'Храм Святой Великомученницы Варвары (п. Рахья) фото 3'],
            ['src' => '../img/gallery/hramy/objects_rakhia/trapeznaya/trapeznaya_rakhia_1.webp', 'caption' => 'Трапезная Храма (п. Рахья) фото 1'],
            ['src' => '../img/gallery/hramy/objects_rakhia/trapeznaya/trapeznaya_rakhia_2.webp', 'caption' => 'Трапезная Храма (п. Рахья) фото 2'],
            ['src' => '../img/gallery/hramy/objects_rakhia/kupel/kupel_rakhia_1.webp', 'caption' => 'Купель Храма (п. Рахья) фото 1'],
            ['src' => '../img/gallery/hramy/objects_rakhia/kupel/kupel_rakhia_2.webp', 'caption' => 'Купель Храма (п. Рахья) фото 2'],
            ['src' => '../img/gallery/hramy/objects_rakhia/kupel/kupel_rakhia_3.webp', 'caption' => 'Купель Храма (п. Рахья) фото 3'],
            ['src' => '../img/gallery/hramy/objects_rakhia/kupel/kupel_rakhia_4.webp', 'caption' => 'Купель Храма (п. Рахья) фото 4'],
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_1.webp', 'caption' => 'Храм (г. Лобня) фото 1'],
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_2.webp', 'caption' => 'Храм (г. Лобня) фото 2'],
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_3.webp', 'caption' => 'Храм (г. Лобня) фото 3'],
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_4.webp', 'caption' => 'Храм (г. Лобня) фото 4'],
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_5.webp', 'caption' => 'Храм (г. Лобня) фото 5'],
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_6.webp', 'caption' => 'Храм (г. Лобня) фото 6'],
            ['src' => '../img/gallery/hramy/hram_lobnya/hram_lobnya_7.webp', 'caption' => 'Храм (г. Лобня) фото 7'],
            ['src' => '../img/gallery/hramy/hram_mshinskaya/hram_mshinskaya_1.webp', 'caption' => 'Храм (п. Мшинская) фото 1'],
            ['src' => '../img/gallery/hramy/hram_mshinskaya/hram_mshinskaya_2.webp', 'caption' => 'Храм (п. Мшинская) фото 2'],
            ['src' => '../img/gallery/hramy/hram_scheglovo/hram_scheglovo_1.webp', 'caption' => 'Храм (п. Щеглово) фото 1'],
            ['src' => '../img/gallery/hramy/hram_scheglovo/hram_scheglovo_2.webp', 'caption' => 'Храм (п. Щеглово) фото 2'],
            ['src' => '../img/gallery/hramy/hram_scheglovo/hram_scheglovo_3.webp', 'caption' => 'Храм (п. Щеглово) фото 3'],
            ['src' => '../img/gallery/hramy/semeinaya_chasovnya/chasovnya_1.webp', 'caption' => 'Семейная Часовня фото 1'],
            ['src' => '../img/gallery/hramy/semeinaya_chasovnya/chasovnya_2.webp', 'caption' => 'Семейная Часовня фото 2'],
            ['src' => '../img/gallery/hramy/semeinaya_chasovnya/chasovnya_3.webp', 'caption' => 'Семейная Часовня фото 3'],
            ['src' => '../img/gallery/hramy/semeinaya_chasovnya/chasovnya_4.webp', 'caption' => 'Семейная Часовня фото 4'],
            ['src' => '../img/gallery/hramy/semeinaya_chasovnya/chasovnya_5.webp', 'caption' => 'Семейная Часовня фото 5'],
        ],
    ],
];
