<?php
# Importante que todas las funciones del tema añadan el nombre del tema al principio

# Scripts and Styles
function byluis_scripts_styles(){
    wp_enqueue_style('style.css', get_stylesheet_uri() , array(), '1.0.0');
    wp_enqueue_style('normalize.css', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
}

add_action( 'wp_enqueue_scripts', 'byluis_scripts_styles');

# Navegation Nav 
function byluis_nav() {
    register_nav_menus( array(
        'main-nav' => __( 'Main menu', 'Logolate')
    ) );
}

add_action( 'init', 'byluis_nav');






?>