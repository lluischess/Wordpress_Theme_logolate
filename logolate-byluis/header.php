<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="container2">
        <div id="section-header" class="section-header">
            <div class="logo">
            <!-- search template ubication folder to img logo -->
                <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>\img\logo.svg" alt="logo"></a>
            </div>
            <?php 

            $gymluis_nav = array(
                'theme_location' => 'main-nav',
                'container2' => 'nav',
                'container_class' => 'main-nav'
            );
            wp_nav_menu($gymluis_nav);
            
            ?>
        </div>
    </div>
        <div id="L-Slider">
            <img class="fondo mySlides" src="<?php echo get_template_directory_uri() ?>\img\Caramelos-personalizados.png">
            <img class="fondo mySlides" src="<?php echo get_template_directory_uri() ?>\img\Chocolates-personalizados.png">
            <img class="fondo mySlides" src="<?php echo get_template_directory_uri() ?>\img\Caramelos-personalizados.png">
            <img class="fondo mySlides" src="<?php echo get_template_directory_uri() ?>\img\Chocolates-personalizados.png">

            <button class="button Lblack display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="button Lblack display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
    
    
    
</header>
