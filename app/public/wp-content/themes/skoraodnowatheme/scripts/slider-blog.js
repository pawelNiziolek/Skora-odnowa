document.addEventListener("DOMContentLoaded", function (event) {

  console.log("DOM loaded");

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", function (e) {

    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 40,
      freeMode: true,
      // effect: 'flip',
      breakpoints: {
        // when window width is >= 320px
        280: {
          slidesPerView: 1.2,
          spaceBetween: 20
        },
        // when window width is >= 480px
        600: {
          slidesPerView: 2.2,
          spaceBetween: 30
        },
        // when window width is >= 640px
        769: {
          slidesPerView: 3.2,
          spaceBetween: 40
        }
      }
    });

    console.log("window loaded");
  }, false);

});