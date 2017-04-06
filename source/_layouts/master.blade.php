<!doctype html>
<html amp lang="@yield('lang', $page->site->lang->main)" itemscope itemtype="https://schema.org/Person">
    <head>
        <meta charset="utf-8">

        <!-- amp/pwa data -->
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
        <script async custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js"></script>
        <link rel="canonical" href="{{ $page->getUrl() }}" />
        <link rel="manifest" href="/manifest.json">

        <meta name=viewport content="width=device-width,minimum-scale=1,initial-scale=1">
        <title>@yield('page-title', 'Homepage') @ {{ $page->site->title }}</title>

        <meta name="description" content="@yield('description', $page->site->description)">
        <meta name="author" lang="@yield('lang', $page->site->lang->main)" content="{{ $page->site->author }}">
        <meta name="keywords" lang="{{ $page->site->lang->main }}" content="erick patrick, web developer, web programming, web architecture, ecommerce, backend, frontend, php, javascript, magento">
        <meta name="keywords" lang="{{ $page->site->lang->secondary }}" content="erick patrick, desenvolvedor web, programação web, arquitetura web, ecommerce, backend, frontend, php, javascript, magento">

        <!-- Twitter card -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="{{ $page->site->social->twitter->handle }}">
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

        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        
        @include('_partials.styles')
    </head>
    <body>
        @yield('header')
        @yield('body')
        @yield('footer')

        <amp-install-serviceworker src="/sw.js" data-iframe-src="{{ $page->baseUrl }}/sw" layout="nodisplay">
        </amp-install-serviceworker>
        <amp-analytics type="googleanalytics" id="analytics"><script type="application/json">{
          "vars": {
            "account": "{{ $page->site->analytics }}"
          },
          "triggers": {
            "default pageview": {
              "on": "visible",
              "request": "pageview",
              "vars": {
                "title": "@yield('page-title', 'Homepage') @ {{ $page->site->title }}"
              }
            }
          }
        }</script></amp-analytics>
    </body>
</html>
