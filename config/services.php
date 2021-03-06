<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => Learn\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

	'github' => [
		'client_id' => env('GH_ID'),
		'client_secret' => env('GH_SECRET'),
		'redirect' => env('GH_CB_URL'),
	],

	'facebook' => [
		'client_id' => env('FB_ID'),
		'client_secret' => env('FB_SECRET'),
		'redirect' => env('FB_CB_URL'),
	],

	'twitter' => [
		'client_id' => env('TW_ID'),
		'client_secret' => env('TW_SECRET'),
		'redirect' => env('TW_CB_URL'),
	]
];
