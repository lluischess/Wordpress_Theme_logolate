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
    <div class="container">
        <div class="bar-header">
            <div class="logo">
            <!-- search template ubication folder to img logo -->
                <img src="<?php echo get_template_directory_uri() ?>\img\logo.svg" alt="logo">
            </div>
            <?php 

            $gymluis_nav = array(
                'theme_location' => 'main-nav',
                'container' => 'nav',
                'container_class' => 'main-nav'
            );
            wp_nav_menu($gymluis_nav);
            
            ?>
        </div>
    </div>
</header>