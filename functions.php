<?php
// Enregistrement des emplacements des menus
if ( function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'principal' => 'Menu principal',
            'secondaire' => 'Menu secondaire'
        )
    );
}

//Enregistrements des emplacements Widgets
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

//Enregistrement utilisation des images à la Une
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150);

// Filtre widget Nuage de tags
function custom_tag_cloud($args) {
  $args['unit'] = 'em';
  $args['smallest'] = 0.9;
  $args['largest'] = 2;
  $args['order'] = 'RAND';
  //$args['separator'] = ' &#9632; ';
  return $args;
}
add_filter('widget_tag_cloud_args', 'custom_tag_cloud');

// Rendre les images responsives en supprimant les attributs width et height
/*function bbx_images( $html ) {
    $html = preg_replace( '/(width|height)="\d*"\s/',"", $html ); 
    return $html; 
} 
add_filter( 'post_thumbnail_html', 'bbx_images' ); 
add_filter( 'image_send_to_editor', 'bbx_images'); 
add_filter( 'wp_get_attachment_link', 'bbx_images');*/


//Fin de la balise '<?php' du début de fichier
?>