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



// register Author type

register_post_type('zubu_author' ,[
    'public' => true,
    'labels' => [
        'name' => 'Aurhor',
        'all_items' => 'All Author',
        'add_new' => 'Add new Author',
        'add_new_item' => 'Add new Author',
        'featured_image' => 'Author Image',
        'set_featured_image' => 'Set Author Image',
    ],

    'supports' => ['title' , 'editor' ,  'thumbnail' ],
    'menu_icon' => get_template_directory_uri().'/assets/img/icon/author.png',
    'menu_position' => 100,
    
]);

// Add Author tEXIONOMY

register_taxonomy('author_tag','zubu_author',[
    'public' => true,
    'hierarchical' => true,

]);


// register widget sidebar

register_sidebar([
    'name' => 'Footer Widegrt',
    'description' => '',
    'id' => 'zubu-footer-one',
]);


// Style & Script File Load

function style_scripts(){ 

    

    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css' );
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/magnific.min.css' );
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.min.css' );
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.min.css' );
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick-slide.min.css' );
    wp_enqueue_style('fontawsome', get_template_directory_uri() . '/assets/css/fontawesome.min.css' );
    wp_enqueue_style('stylesheet' , get_stylesheet_uri());
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css' );


    // wp_enque scripts

    wp_enqueue_script("jquery");

    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('imageload', get_template_directory_uri().'/assets/js/imageloded.min.js');
    wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/counterup.js');
    wp_enqueue_script('waypoint', get_template_directory_uri().'/assets/js/waypoint.js');
    wp_enqueue_script('magnific', get_template_directory_uri().'/assets/js/magnific.min.js');
    wp_enqueue_script('isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js');
    wp_enqueue_script('nice', get_template_directory_uri().'/assets/js/nice-select.min.js');
    wp_enqueue_script('fontawesome', get_template_directory_uri().'/assets/js/fontawesome.min.js');
    wp_enqueue_script('ripple', get_template_directory_uri().'/assets/js/ripple.js"');
    // wp_enqueue_script('owl', get_template_directory_uri().'/assets/js/owl.min.js');
    wp_enqueue_script('slick', get_template_directory_uri().'/assets/js/slick-slider.min.js');
    wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js');
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js');
    
  

}

add_action("wp_enqueue_scripts","style_scripts");





?>