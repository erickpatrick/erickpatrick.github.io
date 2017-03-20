@extends('_layouts.articles')

@section('body')
<div class="container">
    <h2>All articles</h2>

    @forelse ($articles as $article)
        <p>articles</p>
    @empty
        <p><em>No new articles</em></p>
    @endforelse
</div>
@endsection
