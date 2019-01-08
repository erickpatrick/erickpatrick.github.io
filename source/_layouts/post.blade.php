@extends('_layouts.mini')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="post__title">{{ $page->title }}</h1>

    <p class="post__meta">
        {{ date('F j, Y', $page->date) }}, in

        @if ($page->categories)
            @foreach ($page->categories as $i => $category)
                <a
                    href="{{ '/blog/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="post__meta--category"
                >{{ $category }}</a>
            @endforeach
        @endif
    </p>

    <div class="post__content">
        @yield('content')
    </div>

    <div class="post__navigation">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </div>
@endsection
