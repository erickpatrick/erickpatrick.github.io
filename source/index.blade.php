@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('body')
    <h2>Featured publications</h2>
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div>
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <h3>
                <a
                    href="{{ $featuredPost->getUrl() }}"
                    title="Read more - {{ $featuredPost->title }}"
                >{{ $featuredPost->title }}</a>

                <small class="post__collection-meta">(
                    {{ date('F j, Y', $featuredPost->date) }}, in

                    @if ($featuredPost->categories)
                        @foreach ($featuredPost->categories as $i => $category)
                            <a
                                    href="{{ '/blog/categories/' . $category }}"
                                    title="View posts in {{ $category }}"
                                    class="post__meta--category"
                            >{{ $category }}</a>
                        @endforeach
                    @endif
                    )</small>
            </h3>

            <p>{!! $featuredPost->excerpt() !!}</p>
        </div>

        @if (! $loop->last)
            <hr>
        @endif
    @endforeach
@stop
