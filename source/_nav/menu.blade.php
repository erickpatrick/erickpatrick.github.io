<div class="nav">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="{{ $page->isActive('/blog') ? 'active' : '' }}">Blog</a>
    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="{{ $page->isActive('/contact') ? 'active' : '' }}">Contact</a>
</div>
