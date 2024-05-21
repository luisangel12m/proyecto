<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

        'cliente' => [
            'driver' => 'session',
            'provider' => 'clientes', // Nombre del proveedor para los clientes
        ],

        'personal' => [
            'driver' => 'session',
            'provider' => 'personal', // Nombre del proveedor para el personal
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'clientes' => [
            'driver' => 'eloquent',
            'model' => App\Models\Cliente::class, // Modelo de Cliente
        ],

        'personal' => [
            'driver' => 'eloquent',
            'model' => App\Models\Personal::class, // Modelo de Personal
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
