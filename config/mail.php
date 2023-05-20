<?php

return [
    'driver' => 'smtp',
    'host' => 'smtp.example.com',
    'port' => 587,
    'username' => 'your_email@example.com',
    'password' => 'your_email_password',
    'encryption' => 'tls',
    'from' => [
        'address' => 'noreply@example.com',
        'name' => 'Your Online Shop',
    ],
];
