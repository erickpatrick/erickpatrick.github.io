@php
    $cssClass = 'bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold px-3 py-2';
    $cssClassCurrent = 'bg-gray-200 hover:bg-gray-100 text-gray-800 font-bold px-3 py-2';
@endphp

@if ($pagination->pages->count() > 1)
<div class="w-full text-center mb-20">

    <ul class="inline-flex list-reset m-auto">
        @if ($previous = $pagination->previous)
        <li><a class="{{ $cssClass }} rounded-l" href="{{ $previous }}">Previous</a></li>
        @endif

        @foreach ($pagination->pages as $pageNumber => $path)
        <li>
            <a class="{{ $cssClass }} {{ $pagination->currentPage === $pageNumber ? $cssClassCurrent : '' }}"
               href="{{ $path }}"
               title="Go to Page {{ $pageNumber }}">{{ $pageNumber }}</a>
        </li>
        @endforeach

        @if ($next = $pagination->next)
        <li><a class="{{ $cssClass }} rounded-r" href="#">Next</a></li>
        @endif
    </ul>

</div>
@endif