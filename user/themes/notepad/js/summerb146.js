'use strict';

(function ($) {
    var mobileMenuButton = '.summer-mobile-menu a',
      mobileMenuCloseButton = '.summer-mobile-close-btn',
      mainMenu = '.summer-menu';

    if($(mainMenu).length) {
        $(mobileMenuButton).on('click', function(e){
            e.preventDefault();
            $(mainMenu).addClass('opened');
        });
        $(mobileMenuCloseButton).on('click', function(e){
            e.preventDefault();
            $(mainMenu).removeClass('opened');
        });
    }

    $('p:has(img)').addClass('with-image');
})(jQuery);