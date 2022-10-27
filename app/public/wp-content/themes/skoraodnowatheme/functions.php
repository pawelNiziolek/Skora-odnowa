<?php

function skora_odnowa(){
  wp_enqueue_style('skoraodnowa_main_styles', get_theme_file_uri('/styles/main.css'));
  wp_enqueue_style('skoraodnowa_nav_styles', get_theme_file_uri('/styles/navigation.css'));
}

add_action('wp_enqueue_scripts', 'skora_odnowa')
?>