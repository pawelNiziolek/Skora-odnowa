<?php get_header();

// while(have_posts()) {
//   the_post(); 
?>

<div class="wrapper-content wrap-blog">
  <section class="wrap-blog-list">
    <h2 class="h2-title">Blog</h2>

    <article class="content-wrapper">

      <div class="news-card">
        <a href="/pierwszy-post" class="news-card__card-link"></a>
        <img loading="lazy"
          src="https://images.pexels.com/photos/127513/pexels-photo-127513.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
          alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h1 class="h2-title">Terapie skór trądzikowych</h1>
          <div class="news-card__post-date">Jan 29, 2018</div>
          <div class="news-card__details-wrapper">
            <p class="p-normal p-normal--small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est pariatur
              nemo
              tempore
              repellat? Ullam sed officia iure architecto deserunt distinctio, pariatur&hellip;</p>

          </div>
        </div>
      </div>

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img loading="lazy"
          src="https://images.pexels.com/photos/631954/pexels-photo-631954.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
          alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="h2-title">Amazing Second Title that is Quite Long</h2>
          <div class="news-card__post-date">Jan 29, 2018</div>
          <div class="news-card__details-wrapper">
            <p class="p-normal p-normal--small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam
              obcaecati ex
              natus
              nulla rem sequi laborum quod fugit&hellip;</p>

          </div>
        </div>
      </div>

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img loading="lazy"
          src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
          alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="h2-title">Amazing Title</h2>
          <div class="news-card__post-date">Jan 29, 2018</div>
          <div class="news-card__details-wrapper">
            <p class="p-normal p-normal--small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis
              beatae&hellip;
            </p>

          </div>
        </div>
      </div>

    </article>
</div>

<?php

get_footer();
?>