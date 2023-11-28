<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
   
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
                        <li class="header__menu-list"> <a href="http://localhost/wordpress/a-propos-de-moi/">A-propos</a> </li>
                        <li class="header__menu-list"> <a href="http://localhost/wordpress/contact/">Contact</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>