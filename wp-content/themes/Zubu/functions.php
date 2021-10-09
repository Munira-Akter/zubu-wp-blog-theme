<?php

// Theme Support Add 

function theme_support(){ 
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
add_theme_support('post-formats');
add_theme_support('title-tag');
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('custom-logo');

}

add_action('after_setup_theme','theme_support');

// menu register

register_nav_menus([

    'primary_menu' => 'Primary Menu',

]);


// Style & Script File Load

function style_scripts(){ 

    wp_enqueue_style('stylesheet' , get_stylesheet_uri());
}

add_action("wp_enqueue_scripts","style_scripts")


?>