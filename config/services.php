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
        'model' => huespring\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => evn('323610154684039'),
        'client_secret' => 'eb80f545cc6bd43f8d09d7db6cdab533',
        'redirect' => 'http://localhost/callback',
    ],
    'google' => [
    'client_id' => '31181674353-06h0nj3n9kg32plos1iijeca8s5prkre.apps.googleusercontent.com',
    'client_secret' => '5y9S6bjvoGhjdiTo-5mf2x8Q',
    'redirect' => 'http://localhost/callback/google',
    ],
];
