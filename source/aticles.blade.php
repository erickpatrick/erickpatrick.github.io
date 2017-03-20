@extends('_layouts.articles')

@section('header')
    @include('_partials.header')
@endsection

@section('body')
<div class="container">
    @forelse ($articles as $article)
        <p>articles</p>
    @empty
        <p>No new articles</p>
    @endforelse
</div>
@endsection
