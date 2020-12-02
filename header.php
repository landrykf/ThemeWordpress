<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <title><?php the_title() ?></title>
    <?php wp_head() ?>
</head>

<body>
    <div id="head-presentaion">
        <p>Si vous souhaitez d'avantage d'informations, vous pouvez nous contacter via la <a href="#">page de contact</a></p>
        <p><a class="adherant" href="#">Espace Adhérent</a></p>
    </div>
    <nav class="navbar">
        <div class="logo">
            <a href="#"><img src="https://www.mag3.org/wp-content/uploads/2018/09/cropped-Mag3-logo2018-1.png" alt=""></a>
        </div>

        <!-- <a class="navbar-brand" href="#"><?php bloginfo('name') ?></a> -->
        <?php
        wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav'
        ])
        ?>


        <!-- <?= get_search_form() ?> -->
        </div>
    </nav>



    <div class="container">