"use strict";
(function ($) {
  $(document).ready(function () {

    toggler();
    menuChilds();
    carouselInit();
  });

	var toggler = function toggler() {
    var selector = $('[data-toggle-selector]');
    selector.on('click', function () {
      var open = $(this).attr('data-toggle-selector');
      var $open = $(open);

      if ($open.length) {
        $(this).toggleClass('active');
        $open.toggleClass('active');
      }
    });
    // woocommerce categories menu cdtoggler
    $('.woo_categories_menu__toggle').on('click', function () {
      $('.header_woo_categories').toggleClass('active');
    });
    $('.woo_categories_menu__overlay').on('click', function () {
      $('.header_woo_categories').removeClass('active');
    });
  };

  var menuChilds = function menuChilds() {
    var parent = '.copycats-pages-menu';
    var $parent = $("".concat(parent, " > .menu-item-has-children"));
    $parent.each(function () {
      $(this).append('<span class="mobile_trigger"></span>');
    });
    $(parent).on('click', '.mobile_trigger', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $(this).closest('li').find('.sub-menu').toggleClass('active');
    });
  };

  var carouselInit = function carouselInit() {
    const myCarouselElement = document.querySelector( '#featuredCarouselFade' );

    const carousel = new bootstrap.Carousel( myCarouselElement, {
      interval: 2000,
      touch: true
    });

    console.log( myCarouselElement );
  }

  } )(jQuery);

// Import styles, to be compressed
import '../scss/styles.scss';

// Import Images
