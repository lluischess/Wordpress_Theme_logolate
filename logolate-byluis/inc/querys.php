<?php

function byluis_lista_catalogos(){ ?>

<ul class="lista-catalogos">
    <?php
        $args = array(
            'post_type' => 'Luis_logolate_clases',
            'post_pe_page' => 100
        );
        $catalogos = new WP_Query($args);
        while( $catalogos->have_posts()){
            $catalogos->the_post(); ?>
        <li class="catalogo card">
            <?php if (has_post_thumbnail()){
                    the_post_thumbnail('medium', array( 'class' => 'default-img'));
                } ?>
            <div class="container-card">
                <a href="<?php the_permalink(); ?>">
                    <h2 class=""><?php the_title(); ?></h2>
                </a>
                <p class="p-catalogo-card"><?php the_field('resumen'); ?></p>
            </div>
            
            
        </li>
    <?php } wp_reset_postdata(); ?>
</ul>


<?php
}
?>