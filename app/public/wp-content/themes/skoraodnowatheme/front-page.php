<?php get_header();

// while(have_posts()) {
//   the_post(); 
?>

<div class="wrapper-content wrap-home">
  <!-- <div class="hide-all"></div> -->
  <section class="video-prime">
    <video src="<?php echo get_theme_file_uri('/img/video/strona-glowna.mp4') ?>" class="video-prime__movie"
      autoplay="true" mute loop>
    </video>
    <!-- <picture>
      <source srcset="<?php echo get_theme_file_uri('/img/foto-agata/home-baner.jpg') ?>" media="(min-width: 1024px)" />
      <img loading="lazy"  src="<?php echo get_theme_file_uri('/img/foto-agata/home-baner-mob.jpg') ?>"
        alt="Skóra Odnowa Gabinet kosmetologii holistycznej baner główny" />
    </picture> -->
  </section>

  <section class="blog-carousel">

    <h2 class="h2-title">Dowiedz się więcej o zabiegach</h2>
    <!-- Swiper -->
    <article class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="">
            <div class="slide-img kons-kos">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Konsultacja kosmetologiczna</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img spec-ter">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Specjalistyczne terapie skór trądzikowych</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img ocz-wod">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Oczyszczanie wodorowe</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img mik-skin">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Mikronakłuwanie SkinPen®</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img mez-igl">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Mezoterapia igłowa</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img mez-oko">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Mezoterapia okolicy oczu</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img sty-tka">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Stymulatory tkankowe</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img ind-ter">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Indywidualne terapie zabiegowe</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
        <div class="swiper-slide"><a href="">
            <div class="slide-img pee-med">
            </div>
            <div class="slide-text">
              <h2 class="slide-title">Zabiegi oczyszczające</h2>
              <p class="p-more">czytaj więcej ...
              </p>
            </div>
          </a></div>
      </div>
      <div class="swiper-pagination"></div>
    </article>
  </section>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>


<script>
document.addEventListener("DOMContentLoaded", function(event) {

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", function(e) {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 40,
      freeMode: true,
      // effect: 'flip',
      breakpoints: {
        // when window width is >= 280px
        280: {
          slidesPerView: 1.2,
          spaceBetween: 20
        },
        // when window width is >= 600px
        620: {
          slidesPerView: 2.2,
          spaceBetween: 25
        },
        // when window width is >= 1024px
        1024: {
          slidesPerView: 3.2,
          spaceBetween: 40
        },
        // when window width is >= 1024px
        1400: {
          spaceBetween: 60
        }
      }
    });

  }, false);

});
</script>

<!-- <script>
const observer = new IntersectionObserver(entries => {
  console.log(entries)
})
</script> -->

<?php

get_footer();
?>