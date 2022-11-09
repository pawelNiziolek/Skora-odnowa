<!DOCTYPE html>
<html lang="pl">

<head>
  <?php wp_head(); ?>
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
  <div class="header-menu-mob__overflow mob-nav-anim">
    <div class="wrap-btn-mob  mob-nav-anim">
      <div class="wrap-btn-mob__nav-btn">
        <div class="wrap-btn-mob__nav-btn wrap-btn-mob__nav-btn-wrap-span">
          <span class="wrap-btn-mob__span mob-nav-anim"></span><span
            class="wrap-btn-mob__span wrap-btn-mob__span--sec mob-nav-anim"></span>
        </div>
      </div>
      <a href="" class="wrap-btn-mob-btn__logo"><img
          src="<?php echo get_theme_file_uri('/img/skora-odnowa-logo-menu.png') ?>" alt="" />
      </a>
      <button class="btn-visit">
        <a href="">Umów wizytę</a>
      </button>
    </div>
    <header class="header-menu-mob__nav mob-nav-anim">
      <nav class="header-menu-mob__col mob-nav-anim">
        <ul class="menu-primary mob-nav-anim">
          <li class="menu-primary__elem-prime">
            <a href="" class="is-active">O mnie</a>
          </li>
          <li class="menu-primary__elem-prime">
            <a class="menu-primary__show-offer">Oferta
              <img class="mob-nav-offer-anim"
                src="<?php echo get_theme_file_uri('/img/skoraodnowa_arrow_next-nav.png')?>" alt="" />
            </a>
            <ul class=" menu-primary__menu-sec mob-nav-offer-anim">
              <li class="menu-primary__elem-sec">
                <a class="menu-primary__elem-sec menu-primary__elem-sec--offer" href="">Cała oferta</a>
              </li>
              <li class="menu-primary__elem-sec">
                <a href=""> Konsultacje kosmetologiczne </a>
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
            <a href="">Cennik</a>
          </li>
          <li class="menu-primary__elem-prime">
            <a href=""> Metamorfozy</a>
          </li>
          <li class="menu-primary__elem-prime">
            <a href=""> Kontakt</a>
          </li>
        </ul>
        <div class="social-button">
          <a href="" class="social-button__icon social-button__icon--fb mob-nav-anim"><img
              src="<?php echo get_theme_file_uri('/img/facebook.png')?>" alt="Facebook Skóra odnowa Gdynia" /></a>
          <a href="" class="social-button__icon social-button__icon--insta mob-nav-anim"><img
              src="<?php echo get_theme_file_uri('/img/instagram.png')?>" alt="Instagram Skóra odnowa Gdynia" /></a>
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
            <li class="menu-primary-deskt__elem-prime">
              <a href="" class="is-active">O mnie</a>
            </li>
            <li class="menu-primary-deskt__elem-prime menu-primary-deskt__elem-prime--show-offer">
              <a href="" class="menu-primary-deskt__show-offer">Oferta
              </a>
              <ul class="menu-primary-deskt__menu-sec">
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Konsultacje kosmetologiczne </a>
                </li>
                <li class="menu-primary-deskt__elem-sec">
                  <a href=""> Specjalistyczne terapie skór trądzikowych </a>
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
            <li class="menu-primary-deskt__elem-prime">
              <a href="">Cennik</a>
            </li>
            <li class="menu-primary-deskt__elem-prime">
              <a href=""> Metamorfozy</a>
            </li>
          </div>
          <div class="menu-deskt-logo">
            <a href="/"><img src="<?php echo get_theme_file_uri('/img/skora-odnowa-logo-menu.png') ?>" alt="" />
            </a>
          </div>
          <div class="menu-primary-deskt__wrap menu-primary__wrap--right">
            <li class="menu-primary-deskt__elem-prime">
              <a href=""> Kontakt</a>
            </li>
            <button class="btn-visit">
              <a href="">Umów wizytę stacjonarną</a>
            </button>
            <div class="social-button">
              <a href="" class="social-button__icon social-button__icon--fb"><img
                  src="<?php echo get_theme_file_uri('/img/facebook.png')?>" alt="Facebook Skóra odnowa Gdynia" /></a>
              <a href="" class="social-button__icon social-button__icon--insta"><img
                  src="<?php echo get_theme_file_uri('/img/instagram.png')?>" alt="Instagram Skóra odnowa Gdynia" /></a>
            </div>
          </div>
        </ul>
      </nav>
    </header>
  </div>

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