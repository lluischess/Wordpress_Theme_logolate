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

    # Img Size Personalizada
    # Tamaños de IMG Por defecto: thumbnail,medium,large,full
    add_image_size( 'Ss', 150, 160);
    add_image_size( 'S', 250, 250);
    add_image_size( 'SM', 375, 400);
    add_image_size( 'M', 450, 400);
    add_image_size( 'L', 750, 600);
    add_image_size( 'XL', 1200, 900);
}
add_action( 'after_setup_theme','byluis_activate');

# Consultas reutilizables
require get_template_directory() . '/inc/querys.php';

# Enable Widgets byluis

function byluis_widgets(){
    register_sidebar( array(
        'name' => 'Sidebar_catalogos',
        'id' => 'sidebar_catalogos',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    register_sidebar( array(
        'name' => 'Sidebar_blog',
        'id' => 'sidebar_blog',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action( 'widgets_init', 'byluis_widgets');





?>