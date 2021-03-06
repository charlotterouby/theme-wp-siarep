<?php
// Enregistrement des scripts
function theme_js(){
	wp_enqueue_script('Chart',
					  get_template_directory_uri().'/js/chart.js',
					  array(),
					  '',
					  true
	);
	wp_enqueue_script('graphiques',
					  get_template_directory_uri().'/js/graphiques.js',
					  array('Chart'),
					  '',
					  true
	);
}

add_action('wp_enqueue_scripts', 'theme_js');

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

//Tailles d'images personnalisée
if(function_exists('add_image_size')){
	add_image_size('Bannière', 1920, 300, true);
	add_image_size('Diaporama', 1920, 700, true);
}

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



//Fin de la balise '<?php' du début de fichier
?>