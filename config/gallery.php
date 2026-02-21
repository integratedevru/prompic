<?php

return [
    [
        'id' => 'gallery1',
        'title' => 'Производство',
        'thumbnail' => '../img/gallery2/gallery2_photo1.webp',
        'css_class' => '',
        'images' => array_map(fn($i) => [
            'src' => sprintf('../img/gallery/production/production_%d.webp', $i),
            'caption' => "Производство {$i}",
        ], range(1, 17)),
    ],
    [
        'id' => 'gallery2',
        'title' => 'Строительный <br>процесс',
        'thumbnail' => '../img/gallery2/gallery2_photo2.webp',
        'css_class' => '',
        'images' => array_map(fn($i) => [
            'src' => "../img/proizvodstvo/slider3/slider3_foto{$i}.webp",
            'caption' => "Строительный процесс {$i}",
        ], array_merge(
            [34], range(1, 33), range(35, 61)
        )),
    ],
    [
        'id' => 'gallery3',
        'title' => 'Частные проекты',
        'thumbnail' => '../img/gallery2/gallery2_photo3.webp',
        'css_class' => '',
        'images' => array_map(fn($i) => [
            'src' => sprintf('../img/gallery/chastniye/Privat_%02d.webp', $i),
            'caption' => '',
        ], range(1, 74)),
    ],
    [
        'id' => 'gallery4',
        'title' => "База отдыха <br>«Лесной Оазис»",
        'thumbnail' => '../img/gallery2/gallery2_photo4.webp',
        'css_class' => '',
        'images' => array_map(fn($i) => [
            'src' => sprintf('../img/gallery/kommercheskiye/LesOazis/LesOazis_%02d.webp', $i),
            'caption' => "База отдыха «Лесной Оазис» {$i}",
        ], [10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 13, 11, 12, 10, 14, 15, 16, 17, 18, 19, 20]),
    ],
    [
        'id' => 'gallery5',
        'title' => 'Банный комплекс «Усадьба банная»',
        'thumbnail' => '../img/gallery2/gallery2_photo5.webp',
        'css_class' => '',
        'images' => array_map(fn($i) => [
            'src' => sprintf('../img/gallery/kommercheskiye/MskBani/MskBani_%02d.webp', $i),
            'caption' => "Банный комплекс «Усадьба банная» {$i}",
        ], [4, 1, 2, 3, 5, 6, 7]),
    ],
    [
        'id' => 'gallery6',
        'title' => 'Эко отель «Заозерье»',
        'thumbnail' => '../img/gallery2/gallery2_photo6.webp',
        'css_class' => '',
        'images' => array_map(fn($i) => [
            'src' => sprintf('../img/gallery/kommercheskiye/Zaozere/Zaozere_%02d.webp', $i),
            'caption' => "Эко отель «Заозерье» {$i}",
        ], range(1, 12)),
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
