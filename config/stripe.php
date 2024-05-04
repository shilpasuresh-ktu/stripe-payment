<?php

return [
    'stripe_publishable_key' => env('STRIPE_KEY'),
    'stripe_secret_key' => env('STRIPE_SECRET'),

    'product' =>[
        'name' => 'Iphone',
        'description' => 'Lorem Ipsum',
        'price' => 100000, 
    ]
];
?>