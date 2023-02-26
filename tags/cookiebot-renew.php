<?php

return [
    'attr' => [
        'class',
        'text'
    ],
    'html' => function($tag) {
        $class = $tag->class;
        $text = $tag->text ?? $tag->option('lukasbecker.kirby3-cookiebot.renewText');
        return '<a class="'. $class .'" href="javascript: Cookiebot.renew()">'. $text .'</a>';
    }
];
