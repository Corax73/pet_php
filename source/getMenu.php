<?php

function getMenu()
{
    $menu = [
        [
            'title' => 'Главная',
            'path' => '/',
            'sort' => '0',
        ],
        [
            'title' => 'Площади фигур',
            'path' => '/f_area/',
            'sort' => '1',
        ],
        [
            'title' => 'Обратная связь',
            'path' => '/feedback/',
            'sort' => '2',
        ],
        [
            'title' => 'Отзывы',
            'path' => '/reviews/',
            'sort' => '3',
        ],
        [
            'title' => 'Cмена раскладки текста',
            'path' => '/keyboard_layout/',
            'sort' => '4',
        ],
        [
            'title' => 'Макет магазина',
            'path' => '/store_layout/',
            'sort' => '5',
        ],
        [
            'title' => 'Погода в Ульяновске',
            'path' => '/weather_ulsk/',
            'sort' => '6',
        ],
        [
            'title' => 'Смена регистра текста',
            'path' => '/registr/',
            'sort' => '7',
        ],
        [
            'title' => 'Время/время UNIX',
            'path' => '/time_unix/',
            'sort' => '8',
        ]
    ];
    return $menu;
}
