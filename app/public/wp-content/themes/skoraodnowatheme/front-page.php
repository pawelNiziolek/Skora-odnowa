<?php get_header();

// while(have_posts()) {
//   the_post(); 
?>
<div class="wrapper-content wrap-home">
  <!-- <div class="hide-all"></div> -->
  <section class="video-prime">
    <!-- <video src="" class="video-prime__movie" autoplay mute loop
      poster="<?php echo get_theme_file_uri('/img/video-poster.jpg') ?>"></video> -->
    <picture>
      <source srcset="<?php echo get_theme_file_uri('/img/foto-agata/home-baner.jpg') ?>" media="(min-width: 1024px)" />
      <img src="<?php echo get_theme_file_uri('/img/foto-agata/home-baner-mob.jpg') ?>"
        alt="Skóra Odnowa Gabinet kosmetologii holistycznej baner główny" />
    </picture>
  </section>
  <section class="blog-carousel">

    <h2 class="h2-title">Dowiedz się wiecej</h2>
    <!-- Swiper -->
    <article class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg') ?>"
              alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg') ?>"
              alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg') ?>"
              alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg') ?>"
              alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg') ?>"
              alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
      </div>
      <div class="swiper-pagination"></div>
    </article>
  </section>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>

<!-- Initialize Swiper -->
<script>
gsap.registerPlugin(ScrollTrigger);
gsap.fromTo(['.wrap-btn-mob-btn__logo img', '.menu-deskt-logo img'], {
  opacity: 1,
  yPercent: 0
}, {
  yPercent: 0,
  opacity: 1,
  duration: 1,
  ease: 'power3.out'
});

/* Logo to header animation */
let logoTl = gsap.timeline({
  scrollTrigger: {
    trigger: document.body,
    start: 0,
    end: () => window.innerHeight,
    scrub: 0.6
  }
});

logoTl.fromTo('.wrap-btn-mob-btn__logo img', {
  top: 0,
  yPercent: 0,
  scale: 1
}, {
  top: 0,
  yPercent: -45.3,
  scale: 0.132,
  duration: 1
});

logoTl.fromTo('.menu-deskt-logo img', {
  top: 0,
  yPercent: 0,
  scale: 1
}, {
  top: 0,
  yPercent: -47,
  scale: 0.07,
  duration: 1
}, 0.4);

logoTl.fromTo(['.wrap-btn-mob__nav-btn', '.btn-visit', '.menu-primary-deskt__wrap'], {
  opacity: 0
}, {
  opacity: 1,
  duration: 1
}, 0.1);


document.addEventListener("DOMContentLoaded", function(event) {

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", function(e) {
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


  }, false);

});
</script>
<?php

get_footer();
?>