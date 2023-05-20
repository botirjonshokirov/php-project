<?php

return [
    'mailer' => [
        'class' => App\Services\Mailer::class,
        'arguments' => [
            'config/mail.php',
        ],
    ],
    'cache' => [
        'class' => App\Services\Cache::class,
        'arguments' => [
            'config/cache.php',
        ],
    ],
    // Add more services as needed
];
