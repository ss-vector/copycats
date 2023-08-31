"use strict";

(function ($) {
  $(document).ready(function () {

    toggler();
    menuChilds();
    featuredFrontPageCarousel;
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

  var featuredFrontPageCarousel = function carouselInit() {
    const myCarouselElement = document.querySelector( '#fetaruredCarouselFade' );

    const carousel = new bootstrap.Carousel( myCarouselElement, {
      interval: 2000,
      touch: false

      console.log("working");
    });
  }

  } )(jQuery);
