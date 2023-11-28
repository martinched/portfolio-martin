
/*
recupere la fin du code index
*/
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_footer(); ?>

    <?php edit_post_link(); ?>
</body>
</html>