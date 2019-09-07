---
pagination:
    collection: posts
    perPage: 9
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
@endpush

@section('nav')
    @include('_nav.menu')
@endsection

@section('header')
    <div class="header">
        <h1 class="md:w-3/5 pt-10 sm:pt-20 pb-10 sm:pb-20 text-4xl sm:text-6xl font-serif leading-tight">Publications on this blog</h1>
        <hr class="mt-10 pb-10 w-20 text-black"/>
        <p class="pb-10 sm:pb-20 sm:w-3/5 lg:w-2/5 text-gray-600">Here you see a list of all publications, without filter, that I wrote to this blog. Feel free to read and mention them on Twitter.</p>
    </div>
@stop

@section('body')
    <div class="container mx-auto px-4">
        @include('_components.post-pagination')

        <div class="flex flex-wrap -mx-3 mb-10">
            @foreach ($pagination->items as $post)
                @include('_components.post-preview-inline')
            @endforeach
        </div>

        @include('_components.post-pagination')
    </div>
@stop
