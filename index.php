<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('lukasbecker/kirby3-cookiebot', [
    'options' => [
        'id' => '',
        'renewText' => 'Renew or customize your cookie consent'
    ],
    'blueprints' => [
        'blocks/cookiebot-declaration' => __DIR__ . '/blueprints/blocks/cookiebot-declaration.yml'
    ],
    'snippets' => [
        'cookiebot' => __DIR__ . '/snippets/cookiebot.php',
        'blocks/cookiebot-declaration' => __DIR__ . '/snippets/blocks/cookiebot-declaration.php'
    ],
    'tags' => [
        'cookiebot-renew' => require_once __DIR__ . '/tags/cookiebot-renew.php',
    ]
]);
