"use strict";

(function ($) {
  $(document).ready(function () {
    $('.woo_categories_menu__toggle').on('click', function () {
      $('.header_woo_categories').toggleClass('active');
    });
    $('.woo_categories_menu__overlay').on('click', function () {
      $('.header_woo_categories').removeClass('active');
    });
  });
})(jQuery);
