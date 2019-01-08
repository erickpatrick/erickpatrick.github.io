<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description or $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body>
        @section('header')
            <div class="header">
                <div class="hero">
                    <h1 class="hero__title">{{ $page->siteName }}</h1>
                    <small class="hero__subtitle">[er-ik]</small>
                    <p class="hero__description">Born 1988, Brazilian Software Architect, living in Germany, mainly creating sites, web systems and mobile apps. Also, proud husband, father and son.</p>
                </div>
            </div>

            @include('_nav.menu')
        @show

        <div class="main" role="main">
            @yield('body')
        </div>

        <div class="footer" role="contentinfo">
            &copy; <a href="https://erickpatrick.net" title="Erick Patrick">Erick Patrick</a> {{ date('Y') }}.
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
