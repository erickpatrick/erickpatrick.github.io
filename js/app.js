yepnope([{
  load: '//ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js',
  complete: function () {
    if (!window.jQuery) {
      yepnope('js/jquery.min.js');
    }

    var header = $('.header'),
    	resizeHeader = function() {
    		var screenWidth = $(window).width(),
    			screenHeight = $(window).height();

    		// setting header to screen's height and width
		    header.width(screenWidth);
		    header.height(screenHeight);
    	};

    resizeHeader();

    setInterval(resizeHeader, 100);

    $('document').on('resize', function() {
    	resizeHeader();
    });
    
  }
}]);