yepnope([{
  load: '//ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js',
  complete: function () {
    if (!window.jQuery) {
      yepnope('js/jquery.min.js');
    }
  }
}]);