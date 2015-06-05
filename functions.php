<?php
// Enregistrement des scripts
function theme_js(){
	wp_enqueue_script('jquery.parallax', 
					  get_template_directory_uri().'/js/jquery.parallax-1.1.3.js',
					  array('jquery'),
					  '1.1.3',
					  true
					 );
	wp_enqueue_script('jquery.inview',
					  get_template_directory_uri().'/js/jquery.inview.js',
					  array('jquery'),
					  false,
					  true
	);
	wp_enqueue_script('jquery.countTo',
					  get_template_directory_uri().'/js/jquery.countTo.js',
					  array('jquery'),
					  false,
					  true
	);
	wp_enqueue_script('jquery.localscroll',
					  get_template_directory_uri().'/js/jquery.localscroll-1.2.7-min.js',
					  array('jquery'),
					  '1.2.7',
					  true
	);
	wp_enqueue_script('jquery.scrollTo',
					  get_template_directory_uri().'/js/jquery.scrollTo-1.4.2-min.js',
					  array('jquery'),
					  '1.4.2',
					  true
	);
	wp_enqueue_script('googleMapsAPI',
					  'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false',
					  array(),
					  false,
					  true
	);
	wp_enqueue_script('main',
					  get_template_directory_uri().'/js/main.js',
					  array('jquery','jquery.parallax', 'jquery.inview','googleMapsAPI'),
					  false,
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



//Fin de la balise '<?php' du début de fichier
?>