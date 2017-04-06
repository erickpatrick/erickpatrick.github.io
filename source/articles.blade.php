@extends('_layouts.articles')

@section('body')
<div class="container">
    <h2>All articles</h2>

    <section class="articles">
    @forelse ($articles as $article)
        <article class="article">
            <p class="article__date">{{ $article->date }}</p>
            <h3 class="article__title">
                <a href="{{ $article->external ?? $page->getUrl() }}" title="{{ $article->title }}">{{ $article->title }}</a>
            </h3>
	        <p class="article__excerpt">{{ $page->excerpt($article->getContent()) }}</p>
        </article>
    @empty
    <article class="article article--empty">
        <p><em>No new articles</em></p>
    </article>
    @endforelse
    </section>
</div>
@endsection
