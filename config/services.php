<?php

return [

    'siagro_instances' => [
        'canastas' => [
            'username' => env('SIAGRO_CANASTAS_USER'),
            'password' => env('SIAGRO_CANASTAS_PASS'),
        ],
        'maices' => [
            'username' => env('SIAGRO_MAICES_USER'),
            'password' => env('SIAGRO_MAICES_PASS'),
        ],
        'focales' => [
            'username' => env('SIAGRO_FOCALES_USER'),
            'password' => env('SIAGRO_FOCALES_PASS'),
        ],
        'especies' => [
            'username' => env('SIAGRO_ESPECIES_USER'),
            'password' => env('SIAGRO_ESPECIES_PASS'),
        ],
        'nutricion' => [
            'username' => env('SIAGRO_NUTRICION_USER'),
            'password' => env('SIAGRO_NUTRICION_PASS'),
        ],
        'colectas_gef' => [
            'username' => env('SIAGRO_COLECTAS_GEF_USER'),
            'password' => env('SIAGRO_COLECTAS_GEF_PASS'),
        ],
    ],

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
