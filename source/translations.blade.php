@extends('_layouts.articles')

@section('body')
<div class="container">
    <h2>All translations</h2>

    @forelse ($translations as $translation)
        <p>translation</p>
    @empty
        <p><em>No new translations</em></p>
    @endforelse
</div>
@endsection
