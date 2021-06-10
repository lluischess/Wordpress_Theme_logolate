
<?php get_header(); ?>

<main>
    <div class="container page section with-sidebar">
        <div class="main-content">
            <?php if ( have_posts()): while (have_posts()): the_post(); ?>
                <h1 class="title-center primary-title"><?php the_title(); ?></h1>
                
                <?php if (has_post_thumbnail()){
                    the_post_thumbnail('L', array( 'class' => 'default-img'));
                } ?>

                <?php the_content(); ?>

            <?php endwhile;
                endif; ?>
        </div>
        <?php get_sidebar() ?>
    </div>
</main>

<?php get_footer(); ?>
