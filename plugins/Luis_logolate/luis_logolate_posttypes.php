<?php
/*

    * Plugin Name:       Luis_logolate
    * Plugin URI:        https://luiscasamajor.trimetastudio.com/
    * Description:       Este plugin fundiona especialmente con el tema logolate para añadir Post Types
    * Version:           1.0.0
    * Requires at least: 5.7.2
    * Requires PHP:      8.0
    * Author:            Luis Casamajor Paloma
    * Author URI:        https://luiscasamajor.trimetastudio.com/
    * License:           GPL v2 or later
    * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
    * Text Domain:       Luis_logolate
    * Domain Path:       /languages

*/

# Sirve para ocultar el codigo editable dentro del wordpress
if(!defined('ABSPATH')) die();


// Registrar Custom Post Type
function Luis_logolate_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Catálogos', 'Post Type General Name', 'Luis_logolate' ),
		'singular_name'         => _x( 'Catálogo', 'Post Type Singular Name', 'Luis_logolate' ),
		'menu_name'             => __( 'Catálogos', 'Luis_logolate' ),
		'name_admin_bar'        => __( 'Catálogo', 'Luis_logolate' ),
		'archives'              => __( 'Archivo', 'Luis_logolate' ),
		'attributes'            => __( 'Atributos', 'Luis_logolate' ),
		'parent_item_colon'     => __( 'Catálogo Padre', 'Luis_logolate' ),
		'all_items'             => __( 'Todos los Catálogos', 'Luis_logolate' ),
		'add_new_item'          => __( 'Agregar Catálogo', 'Luis_logolate' ),
		'add_new'               => __( 'Agregar Catálogo', 'Luis_logolate' ),
		'new_item'              => __( 'Nuevo Catálogo', 'Luis_logolate' ),
		'edit_item'             => __( 'Editar Catálogo', 'Luis_logolate' ),
		'update_item'           => __( 'Actualizar Catálogo', 'Luis_logolate' ),
		'view_item'             => __( 'Ver Catálogo', 'Luis_logolate' ),
		'view_items'            => __( 'Ver Catálogos', 'Luis_logolate' ),
		'search_items'          => __( 'Buscar Catálogo', 'Luis_logolate' ),
		'not_found'             => __( 'No Encontrado', 'Luis_logolate' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'Luis_logolate' ),
		'featured_image'        => __( 'Imagen Destacada', 'Luis_logolate' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'Luis_logolate' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'Luis_logolate' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'Luis_logolate' ),
		'insert_into_item'      => __( 'Insertar en Catálogo', 'Luis_logolate' ),
		'uploaded_to_this_item' => __( 'Agregado en Catálogo', 'Luis_logolate' ),
		'items_list'            => __( 'Lista de Catálogos', 'Luis_logolate' ),
		'items_list_navigation' => __( 'Navegación de Catálogos', 'Luis_logolate' ),
		'filter_items_list'     => __( 'Filtrar Catálogos', 'Luis_logolate' ),
	);
	$args = array(
		'label'                 => __( 'Catálogos', 'Luis_logolate' ),
		'description'           => __( 'Catálogos para el Sitio Web', 'Luis_logolate' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false, # true = posts, false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Luis_logolate_clases', $args );

}
    # init es cuando wordpress inicia con prioridad 0 para que imediatamente wordpress ejecute totdo el codigo
add_action( 'init', 'Luis_logolate_clases_post_type', 0 );



?>