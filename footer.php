

<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_footer(); ?>

    <?php edit_post_link(); ?>
    
        <div class="container">
            <div class="row">
                <div class="footer__logo">
                    <span class="col-4 md-col-12 rs"><img class="linkedin" src="http://localhost/wordpress/wp-content/themes/portfolio-martin/images/vectorlinkedin.png" alt="logo linkedin">    <strong>martin chédaille</strong></span>
                    <span class="col-4 md-col-12 rs"><img class="mail" src="http://localhost/wordpress/wp-content/themes/portfolio-martin/images/Vectormail.png" alt=" logo e-mail">   <a href="mailto:email@example.com"><strong>martin.dwwm@gmail.com</strong></a>    </span>
                    <span class="col-4 md-col-12 rs"><img class="wa" src="http://localhost/wordpress/wp-content/themes/portfolio-martin/images/Vector.png" alt="logo whatsapp">       <strong>0033 614 903 118</strong></span>
                </div>

                <div class="col-12 credits">
                    <p>Conçu sur Figma, codé dans Visual Studio Code et affiché sous Wordpress par Martin Chédaille, en novembre 2023.     </p>
                </div>

            </div>
        </div>
    
</body>
</html>