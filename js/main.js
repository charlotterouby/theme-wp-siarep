//Effet Parallax
$(document).ready(function () {

	var $window = $(window);

	// variables page découvrez-nous
	var $firstBG = $('#slide1');
	var $secondBG = $('#slide2');
	var $thirdBG = $('#slide3');
	var $fourthBG = $('#slide4');
	var $fifthBG = $('#slide5');
	var $carres = $('#bg');

	// variables page nos engagements
	var $sixthBG = $('#slide6');
	var $seventhBG = $('#slide7');
	var $eigthBG = $('#slide8');

	//variable hauteur d'écran
	var windowHeight = $window.height();

	$('#slide1, #slide2, #slide3, #slide4, #slide5, #slide6, #slide7, #slide8').bind('inview', function (event, visible) {
		if (visible === true) {
			$(this).addClass("inview");
		} else {
			$(this).removeClass("inview");
		}
	});

	function newPos(x, windowHeight, pos, adjuster, inertia) {
		return x + "% " + (-((windowHeight + pos) - adjuster) * inertia) + "px";
	}

	function Move() {
		var pos = $window.scrollTop();
		//page découvrez-nous
		if ($firstBG.hasClass("inview")) {
			$firstBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 700, 0.3)
			});
			$carres.css({
				'backgroundPosition': newPos(18.5, windowHeight, pos, 780, 0.6) + ", " +
					newPos(28.25, windowHeight, pos, 1000, 0.5) + ", " +
					newPos(18, windowHeight, pos, 1600, 0.4) + ", " +
					newPos(26, windowHeight, pos, 1390, 0.3) + ", " +
					newPos(34, windowHeight, pos, 3000, 0.2) + ", " +
					newPos(19, windowHeight, pos, 5650, 0.1)
			});
		}
		if ($secondBG.hasClass("inview")) {
			$secondBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 1780, 0.3)
			});
		}
		if ($thirdBG.hasClass("inview")) {
			$thirdBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 2980, 0.3)
			});
		}
		if ($fourthBG.hasClass("inview")) {
			$fourthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 4100, 0.3)
			});
		}
		if ($fifthBG.hasClass("inview")) {
			$fifthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 5000, 0.3)
			});
		}

		//page nos engagements
		if ($sixthBG.hasClass("inview")) {
			$sixthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 700, 0.3)
			});
		}
		if ($seventhBG.hasClass("inview")) {
			$seventhBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 1650, 0.3)
			});
		}
		if ($eigthBG.hasClass("inview")) {
			$eigthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 2600, 0.3)
			});
		}
	}

	$window.resize(function () {
		Move();
	});

	$window.bind('scroll', function () {
		Move();
	});

});


//Script pour créer une Google Map
$(document).ready(function($) {

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

});