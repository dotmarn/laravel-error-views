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
        '401' => env('LARAVEL_ERROR_VIEWS_401_TITLE', 'Unauthorized'),
        '403' => env('LARAVEL_ERROR_VIEWS_403_TITLE', 'Action or Page not authorized!!!'),
        '404' => env('LARAVEL_ERROR_VIEWS_404_TITLE', 'Page Not Found!'),
        '405' => env('LARAVEL_ERROR_VIEWS_405_TITLE', 'Method Not Allowed'),
        '419' => env('LARAVEL_ERROR_VIEWS_419_TITLE', 'Page Expired'),
        '429' => env('LARAVEL_ERROR_VIEWS_429_TITLE', 'Too Many Requests'),
        '500' => env('LARAVEL_ERROR_VIEWS_500_TITLE', 'Whoops!!! Something went wrong.'),
        '503' => env('LARAVEL_ERROR_VIEWS_503_TITLE', 'Whoops!!! Service is currently unavailable')
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
        '401' => env('LARAVEL_ERROR_VIEWS_401_MESSAGE', 'Please sign in to access this page or resource.'),
        '403' => env('LARAVEL_ERROR_VIEWS_403_MESSAGE', 'Sorry, You do not have access to this page or resource.'),
        '404' => env('LARAVEL_ERROR_VIEWS_404_MESSAGE', 'It seems the page or resource you are looking for doesn\'t exist or has been moved.'),
        '405' => env('LARAVEL_ERROR_VIEWS_405_MESSAGE', 'The requested method is not supported for this page or resource.'),
        '419' => env('LARAVEL_ERROR_VIEWS_419_MESSAGE', 'Your session has expired. Please go back and try again.'),
        '429' => env('LARAVEL_ERROR_VIEWS_429_MESSAGE', 'You have made too many requests. Please wait a moment and try again.'),
        '500' => env('LARAVEL_ERROR_VIEWS_500_MESSAGE', 'Whoops!!! It\'s not you, it\'s us. Please try again.'),
        '503' => env('LARAVEL_ERROR_VIEWS_503_MESSAGE', 'Sorry, we are doing some maintenance. Please try again in few minutes.')
    ],

    /*
    |--------------------------------------------------------------------------
    | Customizing the colors for both the title, message and, back button
    |--------------------------------------------------------------------------
    |
    | Here you may specify the text colors for both the title & message
    |
    */
    'colors' => [
        'text' => [
            'title' => env('LARAVEL_ERROR_VIEWS_COLORS_TITLE', 'text-gray-700'),
            'message' => env('LARAVEL_ERROR_VIEWS_COLORS_MESSAGE', 'text-gray-500')
        ],
        'button' => [
            'text' => env('LARAVEL_ERROR_VIEWS_COLORS_BUTTON_TEXT', 'text-purple-600')
        ]
    ],

];
