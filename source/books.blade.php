@extends('_layouts.articles')

@section('body')
<div class="container">
    <h2>Books that I've written or translated</h2>

    @forelse ($books as $book)
        <p>books</p>
    @empty
        <p><em>No new books</em></p>
    @endforelse
</div>
@endsection
