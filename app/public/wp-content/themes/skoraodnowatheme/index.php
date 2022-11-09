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
    <div class="blog-carousel-slide center">

      <a href="">
        <div class="carousel--item">
          <figure><img
              src="https://images.unsplash.com/photo-1509339022327-1e1e25360a41?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
              alt="" /></figure>
          <h2>Slant</h2>
        </div>
      </a>

      <a href="">
        <div class="carousel--item">
          <figure><img
              src="https://images.unsplash.com/photo-1525417071002-5ee4e6bb44f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
              alt="" /></figure>
          <h2>Gravy</h2>
        </div>
      </a>

      <a href="">
        <div class="carousel--item">
          <figure><img
              src="https://images.unsplash.com/photo-1594072702031-f0e2a602dd2c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
              alt="" /></figure>
          <h2>Amuse</h2>
        </div>
      </a>

      <a href="">
        <div class="carousel--item">
          <figure><img
              src="https://images.unsplash.com/photo-1592989819277-a3aafa40c66a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
              alt="" /></figure>
          <h2>Truffle</h2>
        </div>
      </a>

      <a href="">
        <div class="carousel--item">
          <figure><img
              src="https://images.unsplash.com/photo-1548374797-d13fd5d2b2a8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
              alt="" /></figure>
          <h2>Locker</h2>
        </div>
      </a>
    </div>
  </section>
</div>

<?php 

get_footer();
?>