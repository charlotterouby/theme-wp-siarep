//Effet Parallax
$(document).ready(function () {
	"use strict";
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
	
	// variables page rejoignez-nous
	var $ninthBG = $('#slide9');
	var $tenthBG = $('#slide10');
	var $eleventhBG = $('#slide11');

	//variable hauteur d'écran
	var windowHeight = $window.height();

	//Ajouter la class inview quand visible à l'écran
	$('#slide1, #slide2, #slide3, #slide4, #slide5, #slide6, #slide7, #slide8, #slide9, #slide10, #slide11').bind('inview', function (event, visible) {
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
				'backgroundPosition': newPos(50, windowHeight, pos, 1, 0.3)
			});
			$carres.css({
				'backgroundPosition': newPos(18.5, windowHeight, pos, 740, 0.6) + ", " +
					newPos(28.25, windowHeight, pos, 970, 0.5) + ", " +
					newPos(18, windowHeight, pos, 1560, 0.4) + ", " +
					newPos(26, windowHeight, pos, 1320, 0.3) + ", " +
					newPos(34, windowHeight, pos, 2900, 0.2) + ", " +
					newPos(19, windowHeight, pos, 5650, 0.1)
			});
		}
		if ($secondBG.hasClass("inview")) {
			$secondBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 1000, 0.3)
			});
		}
		if ($thirdBG.hasClass("inview")) {
			$thirdBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 2500, 0.3)
			});
		}
		if ($fourthBG.hasClass("inview")) {
			$fourthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 3300, 0.3)
			});
		}
		if ($fifthBG.hasClass("inview")) {
			$fifthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 4500, 0.3)
			});
		}

		//page nos engagements
		if ($sixthBG.hasClass("inview")) {
			$sixthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, -500, 0.3)
			});
		}
		if ($seventhBG.hasClass("inview")) {
			$seventhBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 600, 0.3)
			});
		}
		if ($eigthBG.hasClass("inview")) {
			$eigthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 700, 0.3)
			});
		}
		
		//page rejoignez-nous
		if ($ninthBG.hasClass("inview")) {
			$ninthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, -100, 0.3)
			});
		}
		if ($tenthBG.hasClass("inview")) {
			$tenthBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 500, 0.3)
			});
		}
		if ($eleventhBG.hasClass("inview")) {
			$eleventhBG.css({
				'backgroundPosition': newPos(50, windowHeight, pos, 1800, 0.3)
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

//Les graphiques de données
$(document).ready(function () {
	"use strict";
	var dataBar = {
		labels: ["2008", "2009", "2010", "2011", "2012", "2013", "2014"],
		datasets: [
			{
				label: "Evolution annuel du CA en milliers d'euros",
				fillColor: "rgba(63, 187, 203, 0.5)",
				strokeColor: "rgba(63, 187, 203, 0.8)",
				highlightFill: "rgba(63, 187, 203, 0.75)",
				highlightStroke: "rgba(63, 187, 203, 1)",
				data: [7521.952, 8813.913, 13207.953, 11424.317, 10184, 13056, 12000.803]
			}
		]
	};
	var ctxBar = $("#CAannuel").get(0).getContext("2d");
	var myBarChart = new Chart(ctxBar).Bar(dataBar, {
		responsive: true
	});

	var dataPie = [
		{
			value: 37,
			color: "#ed9e10",
			highlight: "#fce8cc",
			label: "Réhabilitation logement en site occupé"
		},
		{
			value: 8,
			color: "#3ebaca",
			highlight: "#e3f2f6",
			label: "Rénovation ouvrages fonctionnels"
		},
		{
			value: 14,
			color: "#968881",
			highlight: "#e8e4e2",
			label: "Construction neuve"
		},
		{
			value: 40,
			color: "#9ec419",
			highlight: "#ecf3da",
			label: "Travaux sur l'enveloppe de bâtiment"
		},
		{
			value: 1,
			color: "#4e4797",
			highlight: "#dad7ed",
			label: "Installations photovoltaïques"
		}
	];
	var ctxPie = $("#CAactivite").get(0).getContext("2d");
	var myDoughnutChart = new Chart(ctxPie).Doughnut(dataPie, {
		responsive: true,
		animateScale: true
	});

});
