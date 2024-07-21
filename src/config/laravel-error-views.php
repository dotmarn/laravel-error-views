<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Page Title
    |--------------------------------------------------------------------------
    |
    | Here you may specify the title that will be displayed on all error pages
    |
    */
    'titles' => [
        '404' => env('404_TITLE', 'Page Not Found!'),
        '500' => env('500_TITLE', 'Server Error!'),
        '403' => env('403_TITLE', 'Access Denied!'),
        '401' => env('401_TITLE', 'Unauthorized!'),
        '503' => env('503_TITLE', 'Service Unavailable!')
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Messages
    |--------------------------------------------------------------------------
    |
    | Here you may specify the message that will be displayed on all error pages
    |
    */
    'messages' => [
        '404' => env('404_MESSAGE', 'Page Not Found'),
        '500' => env('500_MESSAGE', 'Server Error'),
        '403' => env('403_MESSAGE', 'Access Denied'),
        '401' => env('401_MESSAGE', 'Unauthorized'),
        '503' => env('503_MESSAGE', 'Service Unavailable')
    ],

];