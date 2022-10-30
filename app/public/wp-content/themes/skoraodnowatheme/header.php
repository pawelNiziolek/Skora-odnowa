<!DOCTYPE html>
<html lang="pl">

<head>
  <?php wp_head(); ?>
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
          src="<?php echo get_theme_file_uri('/img/skora-odnowa-sigil-menu.png') ?>" alt="" />
      </a>
      <button class=" wrap-btn-mob-btn__visit">
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
            <a href="/"><img src="<?php echo get_theme_file_uri('/img/skora-odnowa-sigil-menu.png') ?>" alt="" />
            </a>
          </div>
          <div class="menu-primary-deskt__wrap menu-primary__wrap--right">
            <li class="menu-primary-deskt__elem-prime">
              <a href=""> Kontakt</a>
            </li> <button class="wrap-btn-mob-btn__visit">
              <a href="">Umów wizytę</a>
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

  <style>
  @import "https://use.typekit.net/aee0lxy.css";

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: como, sans-serif;
  }

  *:focus-visible {
    outline: -webkit-focus-ring-color auto 0px;
    outline-style: none;
    outline-color: transparent;
  }


  body {
    background-image: url(/app/public/wp-content/themes/skoraodnowatheme/img/gabinet-monika.jpg);
    background-position: top;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 100vh;
  }

  body.mob-nav-anim.active {
    max-height: 100vh;
  }

  input,
  textarea,
  button,
  select,
  a {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }

  /* body {
      background-color: #777;
    } */

  :root {
    --main-color: #111111;
    --venusian-soi-color: #f0e5d3;
    --venusian-skin-color: #dfc0a8;
    --earthling-mint: #acb493;
    --earthling-grass: #677462;
    --main-font-size: 10px;
    --nav-elem-font-size: 13px;
    --nav-list-font-size: 15px;
    --shadow-color: #444;
  }

  img {
    max-width: 100%;
  }

  .header-menu-deskt__overflow {
    display: none;
  }

  .header-menu-mob__overflow {
    position: fixed;
    top: 0;
    width: 100vw;
    max-width: 100vw;
    height: 72px;
    transition: 0.4s;
  }

  .header-menu-mob__overflow.active {
    height: auto;
    position: absolute;
    max-width: 450px;
    transition-delay: 0.2s;
  }

  .wrap-btn-mob {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: sticky;
    top: 0;
    padding: 15px 25px;
    z-index: 4;
    transition: 0.3s;
    transition-delay: 0.4s;
  }

  .wrap-btn-mob.active {
    background-color: #fff;
    transition: 0s;
    transition-delay: 0;
  }

  .wrap-btn-mob__nav-btn-wrap-span {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-around;
    height: 25px;
    width: 25px;
    cursor: pointer;
  }

  .wrap-btn-mob__span.active {
    transform: rotate(-45deg);
    transform-origin: 86%;
  }

  .wrap-btn-mob__span.wrap-btn-mob__span--sec.active {
    transform: rotate(45deg);
  }

  .wrap-btn-mob__span {
    display: block;
    width: 25px;
    height: 3px;
    background-color: var(--main-color);
    transition: 0.3s;
  }

  .wrap-btn-mob>* {
    width: 32%;
    max-width: 150px;
  }

  .wrap-btn-mob-btn__logo {
    margin: 0;
    height: auto;
    display: block;
    text-align: center;
    height: 42px;
  }

  .wrap-btn-mob-btn__logo img {
    height: 42px;
  }

  .wrap-btn-mob-btn__visit {
    background-color: var(--earthling-mint);
    border: none;
    overflow: hidden;
    border-radius: 4px;
    height: 42px;
    max-width: 150px;
    box-sizing: border-box;
    transition: 0.3s;
  }

  .wrap-btn-mob-btn__visit:hover {
    box-shadow: -2px 5px 12px 0px var(--shadow-color);
  }

  .wrap-btn-mob-btn__visit a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    padding: 0px 8px;
    height: 42px;
    color: #fff;
    text-decoration: none;
    line-height: 1.1;
    font-weight: 600;
    font-size: var(--nav-elem-font-size);
    letter-spacing: calc(var(--nav-elem-font-size) / 10);
    transition: 0.3s;
  }

  .header-menu-mob__nav {
    background-color: #fff;
    position: relative;
    opacity: 0;
    min-height: 0;
    transform: translateY(-100vh);
    transition: 0.4s 0.2s;
  }

  .header-menu-mob__nav.active {
    min-height: calc(100vh - 72px);
    transform: translateY(0);
    opacity: 1;
    transition: 0.3s;
  }

  .header-menu-mob__col {
    padding: 40px 25px;
    position: relative;
    opacity: 0;
    transition: 0.3s;
  }

  .header-menu-mob__col.active {
    opacity: 1;
    transition: 0.2s 0.3s;
  }

  .menu-primary {
    margin: 0;
    padding: 0;
    transform: translateX(-60vw);
    opacity: 0;
    color: transparent;
    transition: 0.3s;
  }

  .menu-primary.active {
    transform: translateX(0);
    opacity: 1;
    color: var(--main-color);
    transition: 0.2s 0.3s;
  }

  .menu-primary__elem-prime {
    margin-bottom: 25px;
    list-style: none;
    transition: 0.2s;
  }

  .menu-primary .menu-primary__elem-prime>a {
    font-size: var(--nav-list-font-size);
    letter-spacing: calc(var(--nav-list-font-size) / 12);
    font-weight: 700;
    text-transform: uppercase;
    display: inline-block;
    line-height: 1.2;
    text-decoration: none;
    color: var(--main-color);
    transition: .2s;
  }

  .menu-primary__show-offer {
    cursor: pointer;
  }

  .menu-primary__show-offer img {
    display: inline-block;
    margin-left: 5px;
    opacity: 0;
  }

  .active .menu-primary__show-offer img {
    opacity: 1;
    transition: 0.3s;
  }

  .menu-primary__show-offer img.active {
    transform: rotate(90deg);
  }

  .menu-primary__menu-sec {
    max-height: 0;
    margin-left: 10px;
    opacity: 0;
    overflow: hidden;
    transition: 0.4s ease-out;
  }

  .menu-primary__menu-sec.active {
    max-height: 400px;
    opacity: 1;
  }

  .menu-primary__elem-sec {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .menu-primary__elem-sec a {
    display: inline-block;
    font-size: var(--nav-elem-font-size);
    letter-spacing: calc(var(--nav-elem-font-size) / 10);
    text-decoration: none;
    text-transform: none;
    font-weight: 500;
    padding: 6px 0;
    color: var(--main-color);
  }

  .menu-primary__elem-sec a::after {
    height: 1px;
  }

  .social-button__icon {
    display: inline-block;
    width: 40px;
    margin-right: 20px;
    margin-top: 30px;
    box-sizing: border-box;
    transform: translateX(-160px);
    opacity: 0;
    transition: transform 0.4s;
    transition-delay: 0.4s;
  }

  .active .social-button__icon {
    opacity: 1;
  }

  .social-button__icon.social-button__icon--insta {
    transition-delay: 0.2s;
  }

  .social-button__icon.active {
    transform: translateX(0);
  }

  .social-button__icon img {
    border-radius: 50%;
    transition: 0.25s;
  }

  .social-button__icon img:hover {
    box-shadow: -2px 5px 12px 0px var(--shadow-color);
  }



  /* ----------- nav desktop ------------- */

  @media (min-width: 1024px) {
    .header-menu-mob__overflow {
      display: none;
    }

    .header-menu-deskt__overflow {
      display: block;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      padding: 0 10px;
      background-color: transparent;
      transition: background-color .35s;
    }

    .header-menu-deskt__overflow:hover {
      background-color: #fff;
    }

    .header-menu-deskt__nav {
      max-width: 1200px;
      margin: 0 auto;
    }

    .menu-primary-deskt,
    .menu-primary-deskt__wrap {
      display: flex;
      align-items: center;
      justify-content: space-around;
    }

    .menu-primary-deskt__wrap {
      width: calc(50% - 110px);
      justify-content: space-between;
    }

    .menu-deskt-logo {
      padding: 0 30px;
      box-sizing: border-box;
    }

    .menu-deskt-logo img {
      width: 50px;
    }

    .menu-primary-deskt__elem-prime {
      list-style: none;
      position: relative;
    }

    .menu-primary-deskt__elem-prime>a,
    .menu-primary-deskt__elem-sec>a {
      font-size: var(--nav-list-font-size);
      letter-spacing: calc(var(--nav-list-font-size) / 12);
      color: var(--main-color);
      font-weight: 700;
      text-transform: uppercase;
      display: inline-block;
      line-height: 1.2;
      text-decoration: none;
    }

    .menu-primary-deskt__elem-prime>a {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 65px;
    }


    .menu-primary-deskt__elem-prime:not(.menu-deskt-logo)>a::after,
    .menu-primary-deskt__elem-sec>a::after {
      content: "";
      height: 2px;
      width: 0;
      background-color: var(--earthling-mint);
      display: block;
      transition: 0.3s;
    }

    .menu-primary-deskt__elem-sec>a::after {
      height: 1px;
    }

    .menu-primary-deskt__elem-prime>a:hover::after,
    .menu-primary-deskt__elem-sec>a:hover::after {
      width: 100%;
    }

    .menu-primary-deskt__menu-sec {
      max-height: 0;
      list-style: none;
      overflow: hidden;
      position: absolute;
      top: 65px;
      left: 0;
      background-color: #fff;
      opacity: 0;
      box-shadow: -2px 5px 12px 0px var(--shadow-color);
      border-radius: 5px;
      transition: .3s;
    }

    .menu-primary-deskt__elem-sec>a {
      font-size: var(--nav-elem-font-size);
      font-weight: 400;
      text-transform: initial;
      padding: 15px 15px 0;
      width: max-content;
    }

    .menu-primary-deskt__elem-sec:last-child {
      padding-bottom: 15px;
    }

    .menu-primary-deskt__elem-prime--show-offer:hover .menu-primary-deskt__menu-sec {
      max-height: 1000px;
      opacity: 1;
      transition: max-height .6s;
    }

    .wrap-btn-mob-btn__visit a {
      padding: 0 20px;
    }

    .social-button__icon {
      transform: translateX(0px);
      margin-top: 0;
      margin-right: 0;
      margin-left: 30px;
      opacity: 1;
    }
  }
  </style>

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