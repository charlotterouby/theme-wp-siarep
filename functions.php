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
            'id'=>'premier',
            'name'=>'Premier emplacement',
            'description'=>'Premier emplacement des widgets',
            'before_widget'=>'<div class="grid-100 premierWidget">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="titre-widget">',
            'after_title'=>'</h2>'
            )
        );
    register_sidebar(
        array(
            'id'=>'deuxieme',
            'name'=>'Deuxième emplacement',
            'description'=>'Deuxième emplacement des widgets',
            'before_widget'=>'<div class="grid-100 secondWidget">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2 class="titre-widget">',
            'after_title'=>'</h2>'
            )
        );
}

add_theme_support('post-thumbnails');

?>