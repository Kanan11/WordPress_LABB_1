<?php

function my_styles() {
    wp_enqueue_style( ' bootstrap ', get_template_directory_uri() . './css/bootstrap.css', true );
    wp_enqueue_style( ' style ', get_template_directory_uri() . './style.css', true );
    wp_enqueue_style( ' font ', get_template_directory_uri() . './css/font-awesome.css', true );
}
add_action('wp_enqueue_scripts', 'my_styles');





add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');


register_sidebar(
    [
       'name' => 'kontakt',
       'Description' => 'mer_om_kontakt',
       'id' => 'kontaktwidget', 
       'before_widget' => ' ',
    ]
);

register_sidebar(
    [
       'name' => 'search',
       'Description' => 'top_bar_search',
       'id' => 'search_bar', 
       'before_widget' => ' ',
    ]
);

register_sidebar(
    [
       'name' => 'aside',
       'Description' => 'aside_link',
       'id' => 'page_link', 
       'before_widget' => ' ',
    ]
);



add_action('','registrera_menu');

function registrera_menu(){
    register_nav_menu('fotter_menu', 'Meny plaserad i footer');
    register_nav_menu('sidbar_menu', 'Meny plaserad i sidbar');
}

?>