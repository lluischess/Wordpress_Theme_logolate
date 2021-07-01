<?php
# Lista de Catálogos
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
        <li class="catalogo card gradient">
            <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()){
                    the_post_thumbnail('SM', array( 'class' => 'default-img'));
                } ?></a>
            <div class="container-card">
                <a href="<?php the_permalink(); ?>">
                    <h3 class=""><?php the_title(); ?></h3>
                </a>
                <p class="p-catalogo-card"><?php the_field('resumen'); ?></p>
            </div>
            
            
        </li>
    <?php } wp_reset_postdata(); ?>
</ul>


<?php
}
?>