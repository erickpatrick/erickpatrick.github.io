<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'site' => [
        'domain' => 'localhost',
        'lang' => [
            'main' => 'en',
            'secondary' => 'pt-br'
        ],
        'author' => 'Erick Patrick',
        'title' => "Erick Patrick's Website",
        'description' => 'Personal website from Brazilian web developer Erick Patrick containing various projects.',
        'thumbnail' => 'https://www.erickpatrick.net/img/thumbnail.jpg',
        'social' => [
            'twitter' => [
                'handle' => '@erickpatrick',
                'author' => 'https://twitter.com/erickpatrick'
            ],
            'facebook' => [
                'author' => 'https://fb.me/erickpatrick1988',
                'fbadmin' => '1386933601'
            ],
            'gplus' => [
                'author' => 'https://google.com/+ErickPatrick1988',
                'publisher' => 'https://plus.google.com/b/106544148188542649191/106544148188542649191/posts'
            ]
        ],
        'analytics' => 'UA-50843686-1',
    ],
    'collections' => [
        'articles' => [
            'sort' => '-date'
        ],
        'translations' => [
            'sort' => '-date'
        ]
    ]
];