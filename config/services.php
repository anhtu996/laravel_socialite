<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
         'client_id' => '365391783975151',         // Your facebook Client ID
        'client_secret' => 'b8857874e497b27ea53d8e094262da24', // Your facebook Client Secret
        'redirect' => 'http://dev.socialite.com/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '53pUtKIUMVI7ULt0vNXql6nJp',         // Your twitter Client ID
        'client_secret' => 'dJ3wMvUUOkW4bPB1fw12NkGFcg6509W1big2oaLIRPW0cYM8RB', // Your twitter Client Secret
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],
    'github' => [
        'client_id' => '787d393a140dc9faba93',         // Your github Client ID
        'client_secret' => '6a1dd77e3c948e4f0f929fc5a85ee0ff318d5aa1', // Your github Client Secret
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],
    'linkedin' => [
        'client_id' => '77gpcnslk4r1nm',         // Your linkedin Client ID
        'client_secret' => 'PZd9r8QidEQxP9FW', // Your linkedin Client Secret
        'redirect' => 'http://localhost:8000/login/linkedin/callback',
    ],
    'google' => [
        'client_id' => '217838623965-i4shlk2p2vi0hsktonfi3ekc0591vfn5.apps.googleusercontent.com',         // Your google Client ID
        'client_secret' => '5SnIzLE5_HGLlK7Tr_vgnJXN', // Your google Client Secret
        'redirect' => 'http://dev.socialite.com/login/google/callback',
    ],

];
