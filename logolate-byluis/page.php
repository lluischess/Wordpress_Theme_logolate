
<?php get_header(); ?>

<?php
# Page template here
# Templete tags like the_title(); it prints all from de DB
while (have_posts() ) { the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <p>Escrito por: <?php the_author(); ?></p>
    <a href=""><?php the_date(); ?></a>

<?php } ?>

<?php get_footer(); ?>
