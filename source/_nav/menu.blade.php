<div class="nav">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="{{ $page->isActive('/blog') ? 'nav--active' : '' }}">Blog</a>
    <?php /**<a title="{{ $page->siteName }} Projects" href="/projects"
       class="{{ $page->isActive('/projects') ? 'nav--active' : '' }}">Projects</a>**/ ?>
    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="{{ $page->isActive('/contact') ? 'nav--active' : '' }}">Contact</a>
</div>
