<?php
# Importante que todas las funciones del tema añadan el nombre del tema al principio

# Styles and Scripts
function byluis_styles_scripts(){
    wp_enqueue_style('style.css', get_stylesheet_uri() , array(), '1.0.0');
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('slicknav', get_template_directory_uri().'/css/slicknav.css', array(), '1.0.10');
    wp_enqueue_script('jqueryslicknav', get_template_directory_uri().'/js/jquery.slicknav.js', array('jquery'), '1.0.10');
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery','jqueryslicknav'), '1.0.1');
}

add_action( 'wp_enqueue_scripts', 'byluis_styles_scripts');

# Navegation Nav 
function byluis_nav() {
    register_nav_menus( array(
        'main-nav' => __( 'Main menu', 'Logolate')
    ) );
}

add_action( 'init', 'byluis_nav');


# Delete admn css core
function byluis_my_filter_head() {
   remove_action('wp_head', '_admin_bar_bump_cb');
} 

add_action('get_header', 'byluis_my_filter_head');

#After Theme Activation
function byluis_activate(){
    # Activate Imatges Single
    add_theme_support( 'post-thumbnails' );

    # Img Size
    add_image_size( 'mediumL', 750, 600);
}
add_action( 'after_setup_theme','byluis_activate');


?>