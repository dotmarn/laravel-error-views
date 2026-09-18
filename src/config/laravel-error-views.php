<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Page Title
    |--------------------------------------------------------------------------
    |
    | Here you may specify the title that will be displayed for each of the error pages
    |
    */
    'title' => [
        '401' => env('LARAVEL_ERROR_VIEWS_401_TITLE', 'laravel-error-views::errors.401.title'),
        '403' => env('LARAVEL_ERROR_VIEWS_403_TITLE', 'laravel-error-views::errors.403.title'),
        '404' => env('LARAVEL_ERROR_VIEWS_404_TITLE', 'laravel-error-views::errors.404.title'),
        '405' => env('LARAVEL_ERROR_VIEWS_405_TITLE', 'laravel-error-views::errors.405.title'),
        '419' => env('LARAVEL_ERROR_VIEWS_419_TITLE', 'laravel-error-views::errors.419.title'),
        '429' => env('LARAVEL_ERROR_VIEWS_429_TITLE', 'laravel-error-views::errors.429.title'),
        '500' => env('LARAVEL_ERROR_VIEWS_500_TITLE', 'laravel-error-views::errors.500.title'),
        '503' => env('LARAVEL_ERROR_VIEWS_503_TITLE', 'laravel-error-views::errors.503.title'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Messages
    |--------------------------------------------------------------------------
    |
    | Here you may specify the message that will be displayed for each of the error pages
    |
    */
    'message' => [
        '401' => env('LARAVEL_ERROR_VIEWS_401_MESSAGE', 'laravel-error-views::errors.401.message'),
        '403' => env('LARAVEL_ERROR_VIEWS_403_MESSAGE', 'laravel-error-views::errors.403.message'),
        '404' => env('LARAVEL_ERROR_VIEWS_404_MESSAGE', 'laravel-error-views::errors.404.message'),
        '405' => env('LARAVEL_ERROR_VIEWS_405_MESSAGE', 'laravel-error-views::errors.405.message'),
        '419' => env('LARAVEL_ERROR_VIEWS_419_MESSAGE', 'laravel-error-views::errors.419.message'),
        '429' => env('LARAVEL_ERROR_VIEWS_429_MESSAGE', 'laravel-error-views::errors.429.message'),
        '500' => env('LARAVEL_ERROR_VIEWS_500_MESSAGE', 'laravel-error-views::errors.500.message'),
        '503' => env('LARAVEL_ERROR_VIEWS_503_MESSAGE', 'laravel-error-views::errors.503.message'),
    ],

    'theme' => [
        'title_color' => env('LARAVEL_ERROR_VIEWS_TITLE_COLOR'),
        'message_color' => env('LARAVEL_ERROR_VIEWS_MESSAGE_COLOR'),
        'accent_color' => env('LARAVEL_ERROR_VIEWS_ACCENT_COLOR'),
    ],

    'navigation' => [
        'show_home_link' => env('LARAVEL_ERROR_VIEWS_SHOW_HOME_LINK', true),
        'home_url' => env('LARAVEL_ERROR_VIEWS_HOME_URL', '/'),
        'home_label' => env('LARAVEL_ERROR_VIEWS_HOME_LABEL', 'laravel-error-views::errors.navigation.home'),
        'show_back_link' => env('LARAVEL_ERROR_VIEWS_SHOW_BACK_LINK', true),
        'back_label' => env('LARAVEL_ERROR_VIEWS_BACK_LABEL', 'laravel-error-views::errors.navigation.back'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Legacy Tailwind color classes
    |--------------------------------------------------------------------------
    |
    | These default values remain supported for existing installations. Use
    | the theme color options above for new installations.
    |
    */
    'colors' => [
        'text' => [
            'title' => env('LARAVEL_ERROR_VIEWS_COLORS_TITLE', 'text-gray-700'),
            'message' => env('LARAVEL_ERROR_VIEWS_COLORS_MESSAGE', 'text-gray-500'),
        ],
        'button' => [
            'text' => env('LARAVEL_ERROR_VIEWS_COLORS_BUTTON_TEXT', 'text-purple-600'),
        ],
    ],

];
