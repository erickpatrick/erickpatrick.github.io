<?php

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'siteName' => 'Erick',
    'siteDescription' => "I'm a Brazilian Software Architect, living in Germany. I mainly create sites, web systems and mobile apps. Also, I'm a proud husband, father and son.",
    'siteAuthor' => 'Erick Patrick',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Erick Patrick', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{-title}',
        ],
        'categories' => [
            'path' => '/blog/categories/{-title}',
            'posts' => static function ($page, $allPosts) {
                return $allPosts->filter(static function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],

    // helpers
    'getDate' => static function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'excerpt' => static function ($page, $length = 255) {
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $page->getContent()),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => static function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
