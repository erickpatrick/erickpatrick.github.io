@extends('_layouts.panel')

@push('scriptsHead')
<script src="https://identity.netlify.com/v1/netlify-identity-widget.js" nonce="yeahItsAllowed"></script>
@endpush

@push('scriptsBeforeBodyend')
<script src="https://unpkg.com/netlify-cms@^2.0.0/dist/netlify-cms.js" nonce="yeahItsAllowed"></script>
<script nonce="yeahItsAllowed">
  if (window.netlifyIdentity) {
    window.netlifyIdentity.on("init", user => {
      if (!user) {
        window.netlifyIdentity.on("login", () => {
          document.location.href = "/panel/";
        });
      }
    });
  }
</script>
@endpush