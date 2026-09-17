/* =====================================================================
   Copycats — Front-end UI behaviors (override layer)
   Depends on: jQuery (theme already loads it), Bootstrap's Carousel.
   ===================================================================== */
(function ($) {
  "use strict";

  $(document).ready(function () {
    // Flag JS so CSS reveals can activate without FOUC risk.
    document.documentElement.classList.add("cc-js");

    /* ---- Sticky header shadow on scroll ---- */
    var $header = $("#master.site-header");
    if ($header.length) {
      var onScroll = function () {
        $header.toggleClass("is-stuck", window.scrollY > 30);
      };
      onScroll();
      $(window).on("scroll", onScroll);
    }

    /* ---- Hero carousel: guarantee exactly one active slide.
       The PHP template renders every slide with class "carousel-item
       active", which breaks Bootstrap. Fix it client-side as a safety
       net (the PHP is also being corrected). ---- */
    var $carousel = $("#featuredCarouselFade");
    if ($carousel.length) {
      var $items = $carousel.find(".carousel-item");
      if ($items.filter(".active").length !== 1) {
        $items.removeClass("active").first().addClass("active");
      }
      // Re-init to make sure Bootstrap picked up the corrected state.
      try {
        var inst = bootstrap.Carousel.getOrCreateInstance(
          $carousel[0],
          { interval: 2000, touch: true }
        );
        if (inst) { inst.dispose(); }
        new bootstrap.Carousel($carousel[0], { interval: 2000, touch: true });
      } catch (e) { /* no-op */ }
    }

    /* ---- Scroll-reveal for marked sections ---- */
    var revealEls = document.querySelectorAll(".reveal-init");
    if ("IntersectionObserver" in window && revealEls.length) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });
      revealEls.forEach(function (el) { io.observe(el); });
    } else {
      // Graceful fallback: just show everything.
      revealEls.forEach(function (el) { el.classList.add("is-visible"); });
    }
  });
})(jQuery);
