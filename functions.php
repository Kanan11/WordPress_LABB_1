<?php

function my_styles() {
    wp_enqueue_style( ' test 1 ', get_template_directory_uri() . './bootstrap.css', true );
    wp_enqueue_style( ' test 2 ', get_template_directory_uri() . './style.css', true );
    wp_enqueue_style( ' test 3 ', get_template_directory_uri() . './font-awesome.css', true );

}



add_theme_support('post-thumbnails');
add_theme_support('menus');
add_action('wp_enqueue_scripts', 'my_styles');

?>