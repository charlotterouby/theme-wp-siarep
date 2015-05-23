<?php
if ( function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'principal' => 'Menu principal',
            'secondaire' => 'Menu secondaire'
        )
    );
}

if(function_exists('register_sidebar')) {
    
    register_sidebar(
        array(
            'id'=>'home',
            'name'=>'Page accueil',
            'description'=>'Widgets de la page accueil',
            'before_widget'=>'<div class="grid-100 grid-parent">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="clear">',
            'after_title'=>'</h2>'
        )
    );
    
    register_sidebar(
        array(
            'id'=>'banner',
            'name'=>'Bannière entête',
            'description'=>'Widgets images ou vidéos en haut des pages',
            'before_widget'=>'<div class="grid-100 grid-parent">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="clear">',
            'after_title'=>'</h2>'
        )
    );
    
    register_sidebar(
        array(
            'id'=>'premier',
            'name'=>'Rechercher nos références',
            'description'=>'Widgets de la liste des références',
            'before_widget'=>'<div class="grid-100 widget">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3 class="grid-100">',
            'after_title'=>'</h3>'
        )
    );
}

add_theme_support('post-thumbnails');


?>