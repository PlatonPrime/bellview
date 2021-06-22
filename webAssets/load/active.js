(function ($) {
    'use strict';

   var $window = $(window);


    // Preloader Active Code
    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

})(jQuery);