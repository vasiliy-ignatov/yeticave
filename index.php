<?php
    require_once('./helpers.php');
    require_once('./util.php');

    $categories = [
        [
            'name' => 'Доски и лыжи',
            'mod' => 'boards'
        ],
        [
            'name' => 'Крепления',
            'mod' => 'attachment'
        ],
        [
            'name' => 'Ботинки',
            'mod' => 'boots'
        ],
        [
            'name' => 'Одежда',
            'mod' => 'clothing'
        ],
        [
            'name' => 'Инструменты',
            'mod' => 'tools'
        ],
        [
            'name' => 'Разное',
            'mod' => 'other'
        ]
    ];

    $lots = [
        [
            'name' => '2014 Rossignol District Snowboard',
            'category' => 'Доски и лыжи',
            'price' => '10999',
            'image' => 'img/lot-1.jpg'
        ],
        [
            'name' => 'DC Ply Mens 2016/2017 Snowboard',
            'category' => 'Доски и лыжи',
            'price' => '159999',
            'image' => 'img/lot-2.jpg'
        ],
        [
            'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
            'category' => 'Крепления',
            'price' => '8000',
            'image' => 'img/lot-3.jpg'
        ],
        [
            'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
            'category' => 'Ботинки',
            'price' => '10999',
            'image' => 'img/lot-4.jpg'
        ],
        [
            'name' => 'Куртка для сноуборда DC Mutiny Charocal',
            'category' => 'Одежда',
            'price' => '7500',
            'image' => 'img/lot-5.jpg'
        ],
        [
            'name' => 'Маска Oakley Canopy',
            'category' => 'Разное',
            'price' => '5400',
            'image' => 'img/lot-6.jpg'
        ]
    ];

    $page_title = 'Главная';
    $user_name = 'Superuser';
    $is_auth = rand(0, 1);
    $content_values = [
        'lots' => $lots,
        'categories' => $categories
    ];
    $content = include_template('index.php', $content_values);

    $layout_values = [
        'page_title' => $page_title,
        'user_name' => $user_name,
        'is_auth' => $is_auth,
        'content' => $content,
        'categories' => $categories
    ];
    $page = include_template('layout.php', $layout_values);

    print($page);
?>
