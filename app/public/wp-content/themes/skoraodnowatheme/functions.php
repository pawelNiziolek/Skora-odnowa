<?php

function skora_odnowa()
{
  // wp_enqueue_script('skoraodnowa_slider_home_js', get_theme_file_uri('/scripts/slider-blog.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('skoraodnowa_main_styles', get_theme_file_uri('/styles/main.css'));
  wp_enqueue_style('skoraodnowa_nav_styles', get_theme_file_uri('/styles/header.css'));
  wp_enqueue_style('skoraodnowa_footer_styles', get_theme_file_uri('/styles/footer.css'));
  wp_enqueue_style('skoraodnowa_home_styles', get_theme_file_uri('/styles/home.css'));
  wp_enqueue_style('skoraodnowa_price-list_styles', get_theme_file_uri('/styles/price-list.css'));
}

add_action('wp_enqueue_scripts', 'skora_odnowa');

// add title tag to new site in url
function skora_odnowa_home()
{
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'skora_odnowa_home');