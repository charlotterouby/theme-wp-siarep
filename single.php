<!--appel de l'en-tête-->
<?php get_header(); ?> 

<!-- contenu principal-->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<main class="articleSeul push-5 grid-90 grid-parent"> 
    <!---------------- bannière--------------------->
    <?php if(get_field('img_banner')): ?>
        <div class="grid-100 grid-parent">
            <img src="<?php the_field('img_banner'); ?>" alt="banner" class="img-100"/>
        </div>
    <?php endif; ?>
    <?php 
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs" class="grid-100">','</p>');
        } 
    ?>
    <!----------- contenu principal----------------->
    <section class="grid-66 grid-parent">
        <h1 class="grid-100"><?php the_title(); ?></h1>
        <div class="contenu-principal grid-100"><?php the_content(); ?></div>
    </section>
    
    <!-------------------- ASIDE-------------------->
    <aside class="grid-33 grid-parent">
        <!----------- .asideUn --------------------->
        <section class="asideUn">
            <h2>Donneurs d'ordre</h2>
            
            <!-- Maître d'ouvrage -->
            <?php if(get_field('maitre_douvrage')): ?>      
                <article class=" grid-100">
                    <h3 class="grid-100">Maître d'ouvrage</h3>
                    <?php if(get_field('logo_maitre_douvrage')): ?> 
                        <div class="grid-33 grid-parent"><img src="<?php the_field('logo_maitre_douvrage'); ?>" alt="logo maitre d'ouvrage" class="img-100"/></div>
                        <div class="grid-66"><?php the_field('maitre_douvrage'); ?></div>
                    <?php else: ?>
                        <div class="grid-100"><?php the_field('maitre_douvrage'); ?></div>
                    <?php endif; ?> 
                </article>
            <?php endif; ?>
            
            <!-- Maître d'oeuvre -->
            <?php if(get_field('maitre_doeuvre')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Maître d'oeuvre</h3>
                    <?php if(get_field('logo_maitre_doeuvre')): ?>
                        <div class="grid-33 grid-parent"><img src="<?php the_field('logo_maitre_doeuvre'); ?>" alt="logo maître d'oeuvre" class="img-100" /></div>
                        <div class="grid-66"><?php the_field('maitre_doeuvre'); ?></div>
                    <?php else: ?>
                        <div class="grid-100"><?php the_field('maitre_doeuvre'); ?></div>
                    <?php endif; ?>
                </article>
            <?php endif; ?>
            
            <!-- Bureau d'étude -->
            <?php if(get_field('maitre_bureau_detude')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Bureau d'étude</h3>
                    <?php if(get_field('logo_bureau_detude')): ?>
                        <div class="grid-33 grid-parent"><img src="<?php the_field('logo_bureau_detude'); ?>" alt="logo bureau d'étude" class="img-100" /></div>
                    <?php endif; ?>
                    <div class="grid-66"><?php the_field('bureau_detude'); ?></div>
                </article>
            <?php endif; ?>
        </section>
        
        <!-------------- .asideDeux---------------->
        <section class="asideDeux">
            <h2>Le chantier en bref</h2>
            
            <!-- Localisation chantier-->
            <?php if(get_field('localisation_du_chantier')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Adresse</h3>
                    <div class="grid-100"><?php the_field('localisation_du_chantier'); ?></div>
                </article>
            <?php endif; ?>
            
            <?php 
                $location = get_field('localisation_du_chantier');
                if( !empty($location) ):
            ?>
                <div class="push-5 grid-90 acf-map">
	               <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">  
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Calendrier -->
            <?php if(get_field('date_dinstallation')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Calendrier</h3>
                    <div class="grid-100">
                        <p>Date d'installation : <?php the_field('date_dinstallation'); ?></p>
                    </div>
                    <div class="grid-100">
                    <p>Date de livraison : <?php the_field('date_de_livraison'); ?></p>
                    </div>
                </article>
            <?php endif; ?>
            
            <!-- Infos sur le marché -->
            <?php if(get_field('marche')): ?> 
                <article class="grid-100">
                <h3 class="grid-100">Marché</h3>
                <div class="grid-100"><?php the_field('marche'); ?></div>
            </article>
            <?php endif; ?>
            
            <!-- Moyens de production-->
            <?php if(get_field('production')): ?> 
                <article class="grid-100">
                <h3 class="grid-100">Moyens de production</h3>
                <div class="grid-100"><?php the_field('production'); ?></div>
            </article>
            <?php endif; ?>
            
            <!--Matériaux de référence--> 
            <?php if(get_field('materiaux_de_reference')): ?> 
                <article class="grid-100">
                <h3 class="grid-100">Matériaux de référence</h3>
                <div class="grid-100"><?php the_field('materiaux_de_reference'); ?></div>
            </article>
            <?php endif; ?>
            
            <!-- Partenaires sur le chantier-->
            <?php if(get_field('partenaires')): ?> 
                <article class="grid-100">
                    <h3 class="grid-100">Partenaires</h3>
                    <div class="grid-100"><?php the_field('partenaires'); ?></div>
            </article>
            <?php endif; ?>
        </section>
    </aside>
</main>
<?php endwhile; ?>
<?php endif; ?>

<!-- Script pour la Google Map --
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 14,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.HYBRID
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 14 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);
</script>

<!-- appel du pied de page-->
<?php get_footer(); ?> 