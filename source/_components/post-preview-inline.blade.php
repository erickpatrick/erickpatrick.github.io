<div>
    <p>
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2>
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"

        >{{ $post->title }}</a>
    </h2>

    <p>{!! $post->excerpt(200) !!}</p>
</div>
