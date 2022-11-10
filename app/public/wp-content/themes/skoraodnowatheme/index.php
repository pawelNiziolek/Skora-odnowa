<?php get_header(); 

// while(have_posts()) {
//   the_post(); 
  ?>
<div class="wrap-home">
  <section class="video-prime">
    <video src="" class="video-prime__movie" autoplay mute loop
      poster="<?php echo get_theme_file_uri('/img/video-poster.jpg')?>"></video>
  </section>
  <section class="blog-carousel">
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg')?>" alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg')?>" alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg')?>" alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg')?>" alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href=""><img src="<?php echo get_theme_file_uri('/img/video-poster.jpg')?>" alt="">
            <div class="slide-text">
              <h1>slide 1</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias aperiam</p>
            </div>
          </a></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
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
    480: {
      slidesPerView: 2.2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    720: {
      slidesPerView: 3.2,
      spaceBetween: 40
    }
  }
});
</script>
<?php 

get_footer();
?>