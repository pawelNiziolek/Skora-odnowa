<?php

function skora_odnowa(){
  wp_enqueue_style('skoraodnowa_main_styles', get_theme_file_uri('/styles/main.css'));
  wp_enqueue_style('skoraodnowa_nav_styles', get_theme_file_uri('/styles/navigation.css'));
  wp_enqueue_style('skoraodnowa_footer_styles', get_theme_file_uri('/styles/footer.css'));
  wp_enqueue_style('skoraodnowa_home_styles', get_theme_file_uri('/styles/home.css'));
}

add_action('wp_enqueue_scripts', 'skora_odnowa')
?>