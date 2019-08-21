<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description or $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

{{--        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">--}}
        <style>.hljs-comment,.hljs-quote{color:#696969}.hljs-deletion,.hljs-name,.hljs-regexp,.hljs-selector-class,.hljs-selector-id,.hljs-tag,.hljs-template-variable,.hljs-variable{color:#d91e18}.hljs-attribute,.hljs-built_in,.hljs-builtin-name,.hljs-link,.hljs-literal,.hljs-meta,.hljs-number,.hljs-params,.hljs-type{color:#aa5d00}.hljs-addition,.hljs-bullet,.hljs-string,.hljs-symbol{color:green}.hljs-section,.hljs-title{color:#007faa}.hljs-keyword,.hljs-selector-tag{color:#7928a1}.hljs{display:block;overflow-x:auto;background:#fefefe;color:#545454;padding:.5em}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}@media screen and (-ms-high-contrast:active){.hljs-addition,.hljs-attribute,.hljs-built_in,.hljs-builtin-name,.hljs-bullet,.hljs-comment,.hljs-link,.hljs-literal,.hljs-meta,.hljs-number,.hljs-params,.hljs-quote,.hljs-string,.hljs-symbol,.hljs-type{color:highlight}.hljs-keyword,.hljs-selector-tag{font-weight:700}}
/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted}b,strong{font-weight:bolder}code{font-family:monospace,monospace;font-size:1em}small{font-size:80%}img{border-style:none}button,input,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}html{box-sizing:border-box;font-family:sans-serif}*,:after,:before{box-sizing:inherit}h1,h2,hr,p,pre{margin:0}button{background:transparent;padding:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}ul{list-style:none;margin:0;padding:0}html{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{border:0 solid #e2e8f0}hr{border-top-width:1px}img{border-style:solid}textarea{resize:vertical}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#a0aec0}input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:#a0aec0}input::-ms-input-placeholder,textarea::-ms-input-placeholder{color:#a0aec0}input::placeholder,textarea::placeholder{color:#a0aec0}[role=button],button{cursor:pointer}table{border-collapse:collapse}h1,h2{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}button,input,select,textarea{padding:0;line-height:inherit;color:inherit}code,pre{font-family:Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace}canvas,img,object,svg{display:block;vertical-align:middle}img{max-width:100%;height:auto}.container{width:100%}@media (min-width:640px){.container{max-width:640px}}@media (min-width:768px){.container{max-width:768px}}@media (min-width:1024px){.container{max-width:1024px}}@media (min-width:1280px){.container{max-width:1280px}}h1,h2{padding-top:.75rem;font-family:Georgia,Cambria,Times New Roman,Times,serif}.w-full h1:first-child,.w-full h2:first-child{padding-top:0}.sm\:w-9\/12 a,.sm\:w-9\/12 a:link,.sm\:w-9\/12 a:visited{background-color:#edf2f7}.sm\:w-9\/12 a:hover{background-color:#e2e8f0}.sm\:w-9\/12 code,.sm\:w-9\/12 h2,.sm\:w-9\/12 p,.sm\:w-9\/12 pre,.sm\:w-9\/12 ul{padding-bottom:1.25rem}.sm\:w-9\/12 pre>code{max-height:400px}.sm\:w-9\/12 code{font-size:.875rem}.sm\:w-9\/12 p code{display:inline-block;background-color:#edf2f7;padding-bottom:0}.sm\:w-9\/12 ul{list-style-type:disc;padding-left:2.5rem}.sm\:w-9\/12 ul ul{padding-left:1.25rem;padding-bottom:0}.sm\:w-9\/12 h1{font-size:2.25rem}.sm\:w-9\/12 h2{font-size:1.875rem}.sm\:w-9\/12 p{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1rem;line-height:1.5;overflow-wrap:break-word}.bg-transparent{background-color:transparent}.bg-white{background-color:#fff}.bg-gray-100{background-color:#f7fafc}.bg-gray-200,.hover\:bg-gray-200:hover{background-color:#edf2f7}.rounded{border-radius:.25rem}.rounded-full{border-radius:9999px}.rounded-b-lg{border-bottom-right-radius:.5rem;border-bottom-left-radius:.5rem}.cursor-pointer{cursor:pointer}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.table{display:table}.hidden{display:none}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.flex-1{flex:1 1 0%}.order-last{order:9999}.font-sans{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji}.font-serif{font-family:Georgia,Cambria,Times New Roman,Times,serif}.font-light{font-weight:300}.font-normal{font-weight:400}.font-semibold{font-weight:600}.font-bold{font-weight:700}.h-4{height:1rem}.h-10{height:2.5rem}.leading-none{line-height:1}.leading-tight{line-height:1.25}.m-auto{margin:auto}.my-0{margin-top:0;margin-bottom:0}.my-1{margin-top:.25rem;margin-bottom:.25rem}.mx-4{margin-left:1rem;margin-right:1rem}.mx-auto{margin-left:auto;margin-right:auto}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.mb-2{margin-bottom:.5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mt-10{margin-top:2.5rem}.mb-12{margin-bottom:3rem}.-mt-px{margin-top:-1px}.max-w-sm{max-width:24rem}.focus\:outline-none:focus,.outline-none{outline:0}.overflow-hidden{overflow:hidden}.p-4{padding:1rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pb-0{padding-bottom:0}.pt-2{padding-top:.5rem}.pb-2{padding-bottom:.5rem}.pr-4{padding-right:1rem}.pl-4{padding-left:1rem}.pt-5{padding-top:1.25rem}.pb-5{padding-bottom:1.25rem}.pt-10{padding-top:2.5rem}.pb-10{padding-bottom:2.5rem}.pb-20{padding-bottom:5rem}.static{position:static}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.shadow-lg{box-shadow:0 10px 15px -3px rgba(0,0,0,.1),0 4px 6px -2px rgba(0,0,0,.05)}.text-left{text-align:left}.text-right{text-align:right}.text-black{color:#000}.text-gray-600{color:#718096}.text-gray-700{color:#4a5568}.text-gray-800{color:#2d3748}.text-xs{font-size:.75rem}.text-sm{font-size:.875rem}.text-xl{font-size:1.25rem}.text-3xl{font-size:1.875rem}.text-4xl{font-size:2.25rem}.italic{font-style:italic}.uppercase{text-transform:uppercase}.w-2{width:.5rem}.w-3{width:.75rem}.w-4{width:1rem}.w-20{width:5rem}.w-2\/5{width:40%}.w-3\/5{width:60%}.w-full{width:100%}.z-10{z-index:10}@media (min-width:640px){.sm\:justify-end{justify-content:flex-end}.sm\:order-first{order:-9999}.sm\:mr-auto{margin-right:auto}.sm\:ml-auto{margin-left:auto}.sm\:pt-20{padding-top:5rem}.sm\:pb-20{padding-bottom:5rem}.sm\:text-6xl{font-size:3.5rem}.sm\:w-1\/2{width:50%}.sm\:w-2\/5{width:40%}.sm\:w-3\/5{width:60%}.sm\:w-3\/12{width:25%}.sm\:w-9\/12{width:75%}}@media (min-width:768px){.md\:flex{display:flex}.md\:hidden{display:none}.md\:mx-0{margin-left:0;margin-right:0}.md\:mt-0{margin-top:0}.md\:mt-10{margin-top:2.5rem}.md\:px-0{padding-left:0;padding-right:0}.md\:pr-3{padding-right:.75rem}.md\:relative{position:relative}.md\:w-3\/5{width:60%}.md\:w-2\/12{width:16.666667%}.md\:w-7\/12{width:58.333333%}}@media (min-width:1024px){.lg\:w-1\/2{width:50%}.lg\:w-1\/3{width:33.333333%}.lg\:w-2\/3{width:66.666667%}.lg\:w-3\/4{width:75%}.lg\:w-2\/5{width:40%}.lg\:focus\:w-3\/4:focus{width:75%}}</style>

    </head>

    <body class="{{ $page->getFilename() }}">
        @yield('nav')

        <div class="container mx-auto px-4">
            @yield('header')
        </div>

        @yield('body')

        <div class="bg-gray-100">
            <div class="container mx-auto px-4">
                <div class="footer flex flex-wrap -mx-3 pt-5 pb-5" role="contentinfo">
                    <p class="w-full sm:w-2/5 px-3">&copy; <a href="https://erickpatrick.net" title="Erick Patrick">Erick
                            Patrick</a> {{ date('Y') }}.</p>
                    <ul class="w-full sm:w-3/5 px-3 flex flex-wrap sm:justify-end">
                        <li>
                            <a title="{{ $page->siteName }} Blog" href="/blog"
                               class="pr-4">Blog</a>
                        </li>
                        <li>
                            <a title="{{ $page->siteName }} Contact"
                               href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
