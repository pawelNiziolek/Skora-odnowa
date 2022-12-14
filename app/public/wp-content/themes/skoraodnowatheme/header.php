<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body <?php body_class(); ?>>
  <div class="loading-page">
    <img src="<?php echo get_theme_file_uri('/img/loading-page.png') ?>" alt="">
  </div>

  <div class="header-menu-mob__overflow mob-nav-anim">
    <div class="wrap-btn-mob  mob-nav-anim">
      <div class="wrap-btn-mob__nav-btn">
        <div class="wrap-btn-mob__nav-btn wrap-btn-mob__nav-btn-wrap-span">
          <span class="wrap-btn-mob__span mob-nav-anim"></span><span
            class="wrap-btn-mob__span wrap-btn-mob__span--sec mob-nav-anim"></span>
        </div>
      </div>
      <a href="<?php echo site_url('/') ?>" class="wrap-btn-mob-btn__logo"><img
          src="<?php echo get_theme_file_uri('/img/skora-odnowa-sigil-logo-tablica.png') ?>" alt="" />
      </a>
      <button class="btn-visit">
        <a href="<?php echo site_url('/umow-wizyte') ?>">Umów wizytę</a>
      </button>
    </div>
    <header class="header-menu-mob__nav mob-nav-anim">
      <nav class="header-menu-mob__col mob-nav-anim">
        <ul class="menu-primary mob-nav-anim">
          <li class="menu-primary__elem-prime">
            <a href="<?php echo site_url('/o-mnie') ?>" class="is-active">O mnie</a>
          </li>
          <li class="menu-primary__elem-prime">
            <a class="menu-primary__show-offer">Oferta
              <img class="mob-nav-offer-anim"
                src="<?php echo get_theme_file_uri('/img/skoraodnowa_arrow_next-nav.png') ?>" alt="" />
            </a>
            <ul class=" menu-primary__menu-sec mob-nav-offer-anim">
              <li class="menu-primary__elem-sec">
                <a class="menu-primary__elem-sec menu-primary__elem-sec--offer"
                  href="<?php echo site_url('/oferta') ?>">Cała oferta</a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href="<?php echo site_url('oferta/konsultacja-kosmetologiczna') ?>"> Konsultacja kosmetologiczna
                </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Specjalistyczne terapie skór trądzikowych </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Oczyszczanie wodorowe </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Mikronakłówanie SkinPen® </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Mezoterapia igłowa </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Mezoterapia okolicy oczu </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Stymulatory tkankowe </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Indywidualne terapie zabiegowe </a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Peelingi medyczne </a>
              </li>
            </ul>
          </li>
          <li class="menu-primary__elem-prime">
            <a href="<?php echo site_url('/cennik') ?>">Cennik</a>
          </li>
          <li class="menu-primary__elem-prime">
            <a href="<?php echo site_url('/blog') ?>"> Blog</a>
          </li>
          <li class="menu-primary__elem-prime">
            <a href="<?php echo site_url('/kontakt') ?>"> Kontakt</a>
          </li>
        </ul>
        <div class="social-button">
          <a href="" class="social-button__icon social-button__icon--fb mob-nav-anim"><img
              src="<?php echo get_theme_file_uri('/img/facebook.png') ?>" alt="Facebook Skóra odnowa Gdynia" /></a>
          <a href="" class="social-button__icon social-button__icon--insta mob-nav-anim"><img
              src="<?php echo get_theme_file_uri('/img/instagram.png') ?>" alt="Instagram Skóra odnowa Gdynia" /></a>
          <a href="tel:+48733294468" class="social-button__icon social-button__icon--phone mob-nav-anim"><img
              src=" <?php echo get_theme_file_uri('/img/phone.png') ?>" alt="Numer telefonu Skóra odnowa Gdynia" /></a>
          <a href="mailto: skoraodnowagdynia@gmail.com"
            class="social-button__icon social-button__icon--email mob-nav-anim"><img
              src=" <?php echo get_theme_file_uri('/img/email.png') ?>" alt="Email Skóra odnowa Gdynia" /></a>
        </div>
      </nav>
    </header>
  </div>


  <!-- menu desktop -->

  <div class="header-menu-deskt__overflow">
    <header class="header-menu-deskt__nav">
      <nav class="header-menu-deskt__col">
        <ul class="menu-primary-deskt">
          <div class="menu-primary-deskt__wrap menu-primary__wrap--left">
            <li class="menu-primary-deskt__elem-prime <?php if (is_page('o-mnie')) echo 'elem-active' ?>">
              <a href="<?php echo site_url('/o-mnie') ?>" class="is-active">O mnie</a>
            </li>
            <li
              class="menu-primary-deskt__elem-prime <?php if (is_page('oferta/') or strpos($_SERVER['REQUEST_URI'], 'oferta/') !== false) echo 'elem-active' ?> menu-primary-deskt__elem-prime--show-offer">
              <a href="<?php echo site_url('/oferta') ?>" class="menu-primary-deskt__show-offer">Oferta
              </a>
              <ul class="menu-primary-deskt__menu-sec">
                <li
                  class="menu-primary-deskt__elem-sec <?php if (is_page('oferta/konsultacja-kosmetologiczna')) echo 'elem-active' ?>">
                  <a href="<?php echo site_url('oferta/konsultacja-kosmetologiczna') ?>"> Konsultacja kosmetologiczna
                  </a>
                </li>
                <li
                  class="menu-primary-deskt__elem-sec <?php if (is_page('oferta/specjalistyczne-terapie-skor-tradzikowych')) echo 'elem-active' ?>">
                  <a href="<?php echo site_url('oferta/specjalistyczne-terapie-skor-tradzikowych') ?>"> Specjalistyczne
                    terapie skór trądzikowych
                  </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Oczyszczanie wodorowe </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Mikronakłówanie SkinPen® </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Mezoterapia igłowa </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Mezoterapia okolicy oczu </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Stymulatory tkankowe </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Indywidualne terapie zabiegowe </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Peelingi medyczne </a>
                </li>
              </ul>
            </li>
            <li class="menu-primary-deskt__elem-prime <?php if (is_page('cennik')) echo 'elem-active' ?>">
              <a href="<?php echo site_url('/cennik') ?>">Cennik</a>
            </li>
            <li class="menu-primary-deskt__elem-prime <?php if (is_page('blog')) echo 'elem-active' ?>">
              <a href="<?php echo site_url('/blog') ?>">Blog</a>
            </li>
          </div>
          <div class="menu-deskt-logo">
            <a href="/"><img src="<?php echo get_theme_file_uri('/img/skora-odnowa-sigil-logo-tablica.png') ?>"
                alt="" />
            </a>
          </div>
          <div class="menu-primary-deskt__wrap menu-primary__wrap--right">
            <li class="menu-primary-deskt__elem-prime <?php if (is_page('kontakt')) echo 'elem-active' ?>">
              <a href="<?php echo site_url('/kontakt') ?>"> Kontakt</a>
            </li>
            <button class="btn-visit">
              <a href="<?php echo site_url('/umow-wizyte-stacjonarna') ?>">Umów wizytę stacjonarną</a>
            </button>
            <div class="social-button">
              <a href="" class="social-button__icon social-button__icon--fb"><img
                  src="<?php echo get_theme_file_uri('/img/facebook.png') ?>" alt="Facebook Skóra odnowa Gdynia" /></a>
              <a href="" class="social-button__icon social-button__icon--insta"><img
                  src="<?php echo get_theme_file_uri('/img/instagram.png') ?>"
                  alt="Instagram Skóra odnowa Gdynia" /></a>
            </div>
          </div>
        </ul>
      </nav>
    </header>
  </div>

  <script>
  const loadingPage = document.querySelector(".loading-page");
  window.addEventListener('DOMContentLoaded', () => {
    console.log("start");
    console.log(document.querySelector(".loading-page"));
    loadingPage.classList.add("loading-page--hide");
    console.log("end");
  })
  </script>

  <script>
  const hamMenu = document.querySelector(
    ".wrap-btn-mob__nav-btn.wrap-btn-mob__nav-btn-wrap-span"
  );
  const mobNavAnim = document.querySelectorAll(".mob-nav-anim");
  const mobNavOfferAnim = document.querySelectorAll(".mob-nav-offer-anim");
  const navShowOffers = document.querySelector(".menu-primary__show-offer");

  mobNavAnim.forEach(el => {
    hamMenu.addEventListener("click", () => {
      el.classList.toggle("active");

      mobNavOfferAnim.forEach(el => {
        el.classList.remove("active")
      })
    })
  })

  mobNavOfferAnim.forEach(el => {
    navShowOffers.addEventListener("click", () => {
      el.classList.toggle("active")
    })
  })
  </script>