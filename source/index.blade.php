@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div>
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p>
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2>
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-black font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p>{!! $featuredPost->excerpt() !!}</p>
        </div>

        @if (! $loop->last)
            <hr>
        @endif
    @endforeach

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div>
            @foreach ($row as $post)
                <div>
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr>
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr>
        @endif
    @endforeach
@stop
