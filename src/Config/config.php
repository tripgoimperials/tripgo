<?php
return [
    'app' =>[
        'name' =>$_ENV["APP_NAME"] ?? 'Transport Booking System',
        'env' =>$_ENV["APP_NAME"] ?? 'development'
    ],
    'database' =>[
        'host' =>$_ENV["DB_HOST"] ?? "localhost",
        'port' =>$_ENV["DB_PORT"] ?? 3306,
        'name' =>$_ENV["DB_NAME"] ?? 'transport_booking',
        'username' =>$_ENV["DB_USER"] ?? 'root',
        'password' =>$_ENV["DB_PORT"] ?? '',
    ]
];