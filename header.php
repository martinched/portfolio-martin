<!DOCTYPE html>
<html>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overlock&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
  </head>
  

<body <?php body_class()?>>
    <nav id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_id'     => 'primary-menu',
            )
        );
        ?>
    </nav>
    <header>
        <div class="container">
            <div class="row entete">
                <div class="col-6 sm-col-12 header__title">
                    <h1>Martin Chédaille</h1>
                </div>
                <div class="col-6 sm-col-12" >
                    <ul class="header__menu">
                        <li class="header__menu-list"> <a href="http://localhost/wordpress/">Accueil</a> </li>
                        <li class="header__menu-list"> <a href="http://localhost/wordpress/a-propos-de-moi/">Apropos</a> </li>
                        <li class="header__menu-list"> <a href="http://localhost/wordpress/Contactez-moi/">Contact</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <hr>