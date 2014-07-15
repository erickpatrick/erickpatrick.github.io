$(document).ready(function(){
  var overlay = $('.overlay'),
      cta = $('#cta-contact'),
      close = $('.overlay-close');

  cta.on('click', function(e) {
    e.preventDefault();
    overlay.toggleClass('open');
  });
  close.on('click', function(e) {
    e.preventDefault();
    overlay.toggleClass('open');
  })
});
