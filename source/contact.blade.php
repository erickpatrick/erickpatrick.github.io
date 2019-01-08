@extends('_layouts.mini')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Contact</h1>

<p>Right now, you can contact me via <a href="https://twitter.com/erickpatrick">@erickpatrick (Twitter)</a>. I know it's not much and you may not even have a Twitter account, but I won't make the same mistake of adding my email here again =P</p>

<p>However, soonish, I'll add the a form where you can contact me directly through this page, which will make things much, much easier =)</p>

<?php /**<form name="contact" data-netlify="true" method="POST" netlify-honeypot="catch-this-netlify" action="/pages/thank-you" class="mb-12">
    <p class="hidden">
        <label>Don’t fill this out if you're human: <input name="catch-this-netlify" /></label>
    </p>
    <div class="flex flex-wrap mb-6 -mx-3">
        <div>
            <label for="contact-name">
                Name
            </label>

            <input
                type="text"
                id="contact-name"
                placeholder="Jane Doe"
                name="name"

                required
            >
        </div>

        <div>
            <label for="contact-email">
                Email Address
            </label>

            <input
                type="email"
                id="contact-email"
                placeholder="email@domain.com"
                name="email"

                required
            >
        </div>
    </div>

    <div>
        <label for="contact-message">
            Message
        </label>

        <textarea
            id="contact-message"
            rows="4"
            name="message"

            placeholder="A lovely message here."
            required
        ></textarea>
    </div>

    <div>
        <input
            type="submit"
            value="Submit"

        >
    </div>
</form>**/ ?>
@stop