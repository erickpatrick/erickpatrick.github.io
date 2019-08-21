import hljs from 'highlight.js/lib/highlight';

// Syntax highlighting
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

