@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}: Error"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Error page for site: {{ $page->siteName }}"/>
@endpush

@section('nav')
    @include('_nav.menu')
@endsection

@section('header')
    <div class="header">
        <h1 class="pt-10 sm:pt-20 pb-10 sm:pb-20 text-4xl sm:text-6xl font-serif leading-none">404</h1>
        <hr class="mt-10 pb-10 w-20 text-black"/>
        <p class="pb-10 sm:w-3/5 lg:w-2/5 text-gray-600">Oh no! There's something wrong or you stumbled upon a page that does not exist anymore...</p>
    </div>
@stop

@section('body')
    <div class="container mx-auto px-4">
        <div class="w-full sm:w-9/12 md:w-7/12 px-3 m-auto">
            <p>Sorry the inconvenience, but with the passing of years, update of technologies, and new knowledge acquired, I may end up removing some old page that does not make sense anymore.</p>
            <p>However, if you think it should still exist and this is actually an error on my site, let me know about it. You can find ways to contact me on <a href="/contact">Contact page</a>.</p>
            <p>I'm eager to receive an email from you, be it due to an error on my site or just to chit-chat.</p>
            <p>See you!</p>
        </div>
    </div>
@stop
