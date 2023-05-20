<?php

return [
    'default' => 'file',
    'channels' => [
        'file' => [
            'driver' => 'file',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => 'debug',
        ],
    ],
];
