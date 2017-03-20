@extends('_layouts.articles')

@section('body')
<div class="container">
    <h2>All articles</h2>

    @forelse ($articles as $article)
    <article class="articles">
        <p class="article__date">{{ $article->date }}</p>
        <h3 class="article__title">
            <a href="{{ $article->external ?? $page->getUrl() }}" title="{{ $article->title }}">{{ $article->title }}</a>
        </h3>
	<p class="article__excerpt">{{ $page->excerpt($article->getContent()) }}</p>
    </article>
    @empty
    <article>
        <p><em>No new articles</em></p>
    </article>
    @endforelse
</div>
@endsection
