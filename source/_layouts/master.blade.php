<!doctype html>
<html lang="@yield('lang', $page->site->lang)" itemscope itemtype="https://schema.org/Person">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>@yield('page-title', 'Homepage') @ {{ $page->site->title }}</title>
        <meta name="description" content="@yield('description', $page->site->description)">
        <meta name="author" content="{{ $page->site->author }}">

        <!-- Twitter card -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="{{ $page->site->social->twitter }}">
        <meta name="twitter:title" content="@yield('page-title', 'Homepage') @ {{ $page->site->title }}">
        <meta name="twitter:description" content="@yield('description', $page->site->description)">
        <meta name="twitter:creator" content="{{ $page->site->social->twitter }}">
        <meta name="twitter:image:src" content="{{ $page->site->thumbnail }}">
        <meta name="twitter:domain" content="{{ $page->site->domain }}">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ $page->site->domain }}"/>
        <meta property="og:title" content="@yield('page-title', 'Homepage') @ {{ $page->site->title }}"/>
        <meta property="og:image" content="{{ $page->site->thumbnail }}"/>
        <meta property="og:site_name" content="{{ $page->site->title }}"/>
        <meta property="og:description" content="{{ $page->site->description }}"/>

        <!-- FB Insights -->
        <meta property="fb:admins" content="{{ $page->site->social->facebook->fbadmin }}" />

        <!-- Google+ Meta Tags -->
        <meta itemprop="name" content="@yield('page-title', 'Homepage') @ {{ $page->site->title }}">
        <meta itemprop="description" content="{{ $page->site->description }}">
        <meta itemprop="image" content="{{ $page->site->thumbnail }}">

        <link rel="author" href="{{ $page->site->social->gplus->author }}" />
        <link rel="publisher" href="{{ $page->site->social->gplus->publisher }}">
    </head>
    <body>
        @yield('body')
    </body>
</html>
