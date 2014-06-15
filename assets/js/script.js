$(document).ready(function(){
  var overlay = $('.overlay'),
      cta = $('#cta-contact'),
      close = $('.overlay-close');

  // Adapt .box-main to the size of window
  $('html').css({height:'auto'});
  $('.box-main').css({minHeight:$(window).height()});
  $(window).on('resize',function(){
    $('.box-main').css({minHeight:$(window).height()});
  });

  cta.on('click', function(e) {
    e.preventDefault();
    overlay.toggleClass('open');
  });
  close.on('click', function(e) {
    e.preventDefault();
    overlay.toggleClass('open');
  })
});
