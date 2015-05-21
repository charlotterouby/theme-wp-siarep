<!DOCTYPE html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <title>
            <?php bloginfo('name'); ?>
            <?php if(is_home() || is_front_page()) : ?> 
                &mdash; <?php bloginfo('description'); ?> 
                <?php else : ?>
                &mdash; <?php wp_title("", true); ?>
            <?php endif; ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
        ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="conteneur" class="grid-container grid-parent"><!-- conteneur principal du site -->
            <header class="grid-100 grid-parent">
                <div class="push-5 grid-15"><a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://localhost/siarep/wp-content/themes/theme-wp-siarep/images/logo.png" alt="logo" class="img-100"/></a></div>
                <nav id="menuHeader" class="push-5 grid-80 grid-parent menuHorizontal">
                    <?php wp_nav_menu(array(
                        'sort_column'=>'menu_order',
                        'theme_location'=>'principal')
                                     ); ?>
                </nav>
               <!-- <div class="newsletter">
                    <?php echo do_shortcode("[mc4wp_form]"); ?>
                </div>-->
            </header>