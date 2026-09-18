<?php

return [
    '401' => [
        'title' => 'Unauthorized',
        'message' => 'Please sign in to access this page or resource.',
    ],
    '403' => [
        'title' => 'Action or page not authorized',
        'message' => 'Sorry, you do not have access to this page or resource.',
    ],
    '404' => [
        'title' => 'Page not found',
        'message' => 'It seems the page or resource you are looking for does not exist or has been moved.',
    ],
    '405' => [
        'title' => 'Method not allowed',
        'message' => 'The requested method is not supported for this page or resource.',
    ],
    '419' => [
        'title' => 'Page expired',
        'message' => 'Your session has expired. Please go back and try again.',
    ],
    '429' => [
        'title' => 'Too many requests',
        'message' => 'You have made too many requests. Please wait a moment and try again.',
    ],
    '500' => [
        'title' => 'Something went wrong',
        'message' => 'It is not you, it is us. Please try again.',
    ],
    '503' => [
        'title' => 'Service is currently unavailable',
        'message' => 'Sorry, we are doing some maintenance. Please try again in a few minutes.',
    ],
    'navigation' => [
        'home' => 'Go home',
        'back' => 'Go back',
    ],
];
