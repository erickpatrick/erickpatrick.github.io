@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('nav')
    @include('_nav.menu')
@endsection

@section('header')
    <div class="header">
        <h1 class="md:w-3/5 pt-10 sm:pt-20 pb-10 sm:pb-20 text-4xl sm:text-6xl font-serif leading-tight">{{ $page->title }}</h1>
        <hr class="mt-10 pb-10 w-20 text-black"/>
        <p class="pb-10 sm:pb-20 sm:w-3/5 lg:w-2/5 text-gray-600">{{ $page->description }}</p>
    </div>
@stop

@section('body')
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full sm:w-3/12 md:w-2/12 px-3 sm:ml-auto order-last sm:order-first">
                <div class="max-w-sm overflow-hidden bg-gray-200">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ date('F j, Y', $page->date) }}</div>
                    </div>
                    <div class="px-6 py-4">
                        @if ($page->categories)
                            @foreach ($page->categories as $i => $category)
                                <a href="{{ '/blog/categories/' . $category }}"
                                   title="View posts in {{ $category }}">
                                    #{{ $category }}
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-9/12 md:w-7/12 px-3 sm:mr-auto">
                @yield('content')
            </div>
        </div>


        <div class="flex flex-wrap -mx-3 pt-10 sm:pt-20 pb-20">
            <div class="w-full sm:w-1/2 px-3">
                @if ($next = $page->getNext())
                    <a href="{{ $next->getUrl() }}"
                       title="Older Post: {{ $next->title }}"
                       class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded"
                    >
                        &LeftArrow; {{ $next->title }}
                    </a>
                @endif
            </div>

            <div class="w-full sm:w-1/2 px-3 text-right">
                @if ($previous = $page->getPrevious())
                    <a href="{{ $previous->getUrl() }}"
                       title="Newer Post: {{ $previous->title }}"
                       class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-2 px-4 rounded"
                    >
                        {{ $previous->title }} &RightArrow;
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
