<?php

get_header();

while (have_posts()) {
  the_post(); ?>

<div class="wrapper-content wrap-single-post">
  <section class="post-header">
    <article class="post-header__wrap">
      <img src="<?php echo get_theme_file_uri('/img/foto-agata/post1a.jpg') ?>" alt="" class="post-header__img">
      <h1 class="post-header__title"><?php the_title(); ?></h1>
    </article>
  </section>

  <section class="post-content">
    <article class="post-content__text">
      <?php the_content(); ?>
    </article>
  </section>
</div>
<?php }

get_footer();
?>