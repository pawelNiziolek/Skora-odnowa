<?php

function skora_odnowa()
{
  // wp_enqueue_script('skoraodnowa_slider_home_js', get_theme_file_uri('/scripts/slider-blog.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('skoraodnowa_main_styles', get_theme_file_uri('/styles/css-full.css'));
  // wp_enqueue_style('skoraodnowa_main_styles', get_theme_file_uri('/styles/main.css'));
  // wp_enqueue_style('skoraodnowa_nav_styles', get_theme_file_uri('/styles/header.css'));
  // wp_enqueue_style('skoraodnowa_footer_styles', get_theme_file_uri('/styles/footer.css'));
  // wp_enqueue_style('skoraodnowa_home_styles', get_theme_file_uri('/styles/home.css'));
  // wp_enqueue_style('skoraodnowa_price-list_styles', get_theme_file_uri('/styles/price-list.css'));
  // wp_enqueue_style('skoraodnowa_blog-list_styles', get_theme_file_uri('/styles/blog-list.css'));
  // wp_enqueue_style('skoraodnowa_post_styles', get_theme_file_uri('/styles/post.css'));
}

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script()
{
  // The core GSAP library
  wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true);
  // ScrollTrigger - with gsap.js passed as a dependency
  wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true);
  // Your animation code file - with gsap.js passed as a dependency
  wp_enqueue_script('gsap-js2', get_template_directory_uri() . 'js/app.js', array('gsap-js'), false, true);
}
add_action('wp_enqueue_scripts', 'theme_gsap_script');

add_action('wp_enqueue_scripts', 'skora_odnowa');

// add title tag to new site in url
function skora_odnowa_home()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'skora_odnowa_home');