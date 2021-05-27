<?php
# Importante que todas las funciones del tema añadan el nombre del tema al principio
function gymluis_nav() {
    register_nav_menus( array(
        'main-nav' => __( 'Main menu', 'Gymluis'),
        'second-nav' => __( 'Secondary menu', 'Gymluis')
    ) );
}

add_action( 'init', 'gymluis_nav');


?>