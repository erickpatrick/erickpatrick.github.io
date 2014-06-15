jQuery(document).ready(function(){
  // Adapt .box-main to the size of window
  jQuery('html').css({height:'auto'});
  jQuery('.box-main').css({minHeight:jQuery(window).height()});
  jQuery(window).on('resize',function(){
    jQuery('.box-main').css({minHeight:jQuery(window).height()});
  });
});
