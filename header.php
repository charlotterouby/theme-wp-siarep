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
        <link rel="shortcut icon" href="http://localhost/siarep/wp-content/themes/theme-wp-siarep/images/favicon.ico" alt="favicon"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
        
        <?php wp_head(); ?> <!-- hook head pour wordpress. Ne pas retirer -->
    </head>

    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- conteneur principal du site -->
        <div id="conteneur" class="grid-container grid-parent">
            
            <!--début header-->
            <header class=" grid-100 grid-parent">
                
                <!-- logo -->
                <div id="logo" class="grid-20">
                    <a class="home-link" 
                       href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                       title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                       rel="home">
                        <img src="http://localhost/siarep/wp-content/themes/theme-wp-siarep/images/logo.png" alt="logo"/>
                    </a>
                </div>
                
                <!-- barre newsletter & boutons call to action -->
                <div  id="newsletter" class="grid-80 grid-parent">
                    <?php echo do_shortcode("[mc4wp_form]"); ?>
                </div>
                
                <!-- menu de navigation principal -->
                <nav id="menuHeader" class="grid-80 grid-parent menuHorizontal">
                    <?php wp_nav_menu(array(
                        'sort_column'=>'menu_order',
                        'theme_location'=>'principal')
                                     ); ?>
                    </nav>

            </header>