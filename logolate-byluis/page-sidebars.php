<?php 
/*
* Template Name: Paguina sin Sidebars
*/

get_header(); ?>

<main>
    <div class="container page section with-sidebar">
        <?php get_template_part('template-parts/pages'); ?>
        <?php get_sidebar() ?>
    </div>
</main>

<?php get_footer(); ?>
