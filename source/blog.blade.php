---
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.mini')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
@endpush

@section('body')
    <h2>Publications on this blog</h2>

    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav>
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"

                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="{{ $pagination->currentPage == $pageNumber ? 'current' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"

                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
