<div class="w-full sm:w-1/2 lg:w-1/3 pb-10 px-3">
    <p class="font-semibold">
        <a href="{{ $post->getUrl() }}"
           title="Read more - {{ $post->title }}">{{ $post->title }}</a>
    </p>
    <p class="pb-5 leading-tight text-xs uppercase italic">
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
    </p>
    <p class="font-sans text-gray-700">{!! $post->excerpt(200) !!}</p>
</div>

