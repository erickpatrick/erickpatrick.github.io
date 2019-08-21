@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('header')
    <div class="header">
        <h1 class="pt-10 sm:pt-20 pb-10 sm:pb-20 text-4xl sm:text-6xl font-serif leading-none">Erick Patrick</h1>
        <hr class="mt-10 pb-10 w-20 text-black"/>
        <p class="pb-10 sm:w-3/5 lg:w-2/5 text-gray-600">Born 1988, Brazilian Software Architect, living in Germany,
            mainly creating sites, web systems and mobile apps. Also, proud husband, father and son.</p>
    </div>
@stop

@section('body')
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-3 pt-10 sm:pt-20 pb-20">
            <h2 class="w-full lg:w-1/3 text-3xl px-3 pb-10">Featured Articles</h2>

            @foreach ($posts->where('featured', true) as $featuredPost)
                <div class="w-full sm:w-1/2 lg:w-1/3 pb-10 px-3">
                    <p class="font-semibold">
                        <a href="{{ $featuredPost->getUrl() }}"
                           title="Read more - {{ $featuredPost->title }}">{{ $featuredPost->title }}</a>
                    </p>
                    <p class="pb-5 leading-tight text-xs uppercase italic">
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
                    </p>
                    <p class="font-sans text-gray-700">{!! $featuredPost->excerpt() !!}</p>
                </div>

                <?php if ($loop->index === 1) : break; endif; ?>
            @endforeach
        </div>

        <div class="flex flex-wrap -mx-3 pb-20">
            <h2 class="w-full lg:w-1/3 text-3xl px-3 pb-10">Projects</h2>
            <div class="w-full lg:w-2/3 px-3">
                <div class="pb-10">
                    <p class="font-semibold"><a href="https://www.rpgdomestre.com/">RPG do Mestre</a></p>
                    <p class="font-sans text-gray-700">Blog about Roleplaying Games. There I show my skills as game
                        designer, storyteller and writer by keeping Alter Ego, a three-in-one content: RPG System, RPG
                        Scenario and Sci-Fi novel. Apart from that, I also share some of my hand-made drawings, mainly
                        focused in RPG games. There's also a newsletter, called Weekly (guess its periodicy ;D), which I
                        share curated RPG articles from around the world. </p>
                </div>

                <div class="pb-10">
                    <p class="font-semibold"><a
                            href="https://github.com/erickpatrick/jigsaw-blog-netlify-netlifycms-template">Jigsaw +
                            NetlifyCMS template</a></p>
                    <p class="font-sans text-gray-700">This website uses a static site generator called Jigsaw. It also
                        used
                        to use NetlifyCMS, a Git based CMS, to manage the creation, update and delition of contents. As
                        many
                        and many more people are willing to go down the same route I went, I decided to share the setup
                        I
                        used.</p>
                </div>

                <div class="pb-10">
                    <p class="font-semibold"><a href="https://github.com/erickpatrick/medium-extension">Show
                            subscriber-only
                            publications on Medium (Chrome Extension)</a></p>
                    <p class="font-sans text-gray-700">Though it's not the best code in the world, it does the job. It
                        will
                        paint the background of all the publications on Medium that are subscriber-only. It is not
                        published
                        on the Chrome-store but you can see the code and verify that it does only that and adds nothing
                        to
                        disturb your browsing.</p>
                </div>
            </div>
        </div>
    </div>
@stop
