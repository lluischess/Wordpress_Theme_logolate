<?php
//************************************************************************************* */
// SI existe el post, recorrerá los post existentes e imprimira el post seleccionado
if ( have_posts()): while (have_posts()): the_post(); ?>

<!-- Esta iteracion con condicional sirve para imprimir el articulo al que hace referencia -->
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if
//************************************************************************************* */
?>

<!-- Titulo del Post o articulo -->
<h1><?php the_title(); ?></h1>

<!-- Imagen destacada del Articulo -->
<?php the_post_thumbnail('L'); ?>

<!-- Contenido del Articulo -->
<?php the_content(); ?>

<!-- El autor que ha publicado el articulo -->
<p>Escrito por: <?php the_author(); ?></p>

<!-- Fecha de publicación del articulo -->
<a href=""><?php the_date(); ?></a>

<!-- ************************************************************************************* -->



<?php } ?>