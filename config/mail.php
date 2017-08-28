<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.yandex.ru'),
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => env('MAIL_FROM_EMAIL', 'robot@tbred.ru'),
        'name' => env('MAIL_FROM_NAME', 'ROBOT'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
    'username' => env('MAIL_USERNAME', 'username@example.com'),
    'password' => env('MAIL_PASSWORD', 'secret'),

];
