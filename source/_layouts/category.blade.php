@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('nav')
    @include('_nav.menu')
@endsection

@section('header')
    <div class="header">
        <h1 class="md:w-3/5 pt-10 sm:pt-20 pb-10 sm:pb-20 text-4xl sm:text-6xl font-serif leading-tight">{{ $page->title }}</h1>
        <hr class="mt-10 pb-10 w-20 text-black"/>
        <p class="pb-10 sm:pb-20 sm:w-3/5 lg:w-2/5 text-gray-600">{{ $page->description }}</p>
    </div>
@stop

@section('body')
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-3">
            @foreach ($page->posts($posts) as $post)
                @include('_components.post-preview-inline')
            @endforeach
        </div>
    </div>
@stop
