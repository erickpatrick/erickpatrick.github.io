<div>
    <h3>
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
        >{{ $post->title }}</a>

        <small class="post__collection-meta">(
        {{ date('F j, Y', $post->date) }}, in

        @if ($post->categories)
            @foreach ($post->categories as $i => $category)
                <a
                        href="{{ '/blog/categories/' . $category }}"
                        title="View posts in {{ $category }}"
                        class="post__meta--category"
                >{{ $category }}</a>
            @endforeach
        @endif
        )</small>
    </h3>

    <p>{!! $post->excerpt(200) !!}</p>
</div>
