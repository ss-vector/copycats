!function(){var e={753:function(){new Swiper(".swiper-container",{speed:400,spaceBetween:100,effect:"slide",pagination:{el:".swiper-pagination",clickable:!0}})}},t={};function o(n){var r=t[n];if(void 0!==r)return r.exports;var a=t[n]={exports:{}};return e[n](a,a.exports,o),a.exports}o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,{a:t}),t},o.d=function(e,t){for(var n in t)o.o(t,n)&&!o.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){"use strict";o(753),function(e){e(document).ready((function(){t(),o(),n()}));var t=function(){e("[data-toggle-selector]").on("click",(function(){var t=e(this).attr("data-toggle-selector"),o=e(t);o.length&&(e(this).toggleClass("active"),o.toggleClass("active"))})),e(".woo_categories_menu__toggle").on("click",(function(){e(".header_woo_categories").toggleClass("active")})),e(".woo_categories_menu__overlay").on("click",(function(){e(".header_woo_categories").removeClass("active")}))},o=function(){var t=".copycats-pages-menu";e("".concat(t," > .menu-item-has-children")).each((function(){e(this).append('<span class="mobile_trigger"></span>')})),e(t).on("click",".mobile_trigger",(function(t){t.preventDefault(),t.stopPropagation(),e(this).closest("li").find(".sub-menu").toggleClass("active")}))},n=function(){const e=document.querySelector("#featuredCarouselFade");new bootstrap.Carousel(e,{interval:2e3,touch:!0}),console.log(e)}}(jQuery)}()}();