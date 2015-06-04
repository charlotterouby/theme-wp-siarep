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
			
			$('#slide1, #slide2, #slide3, #slide4, #slide5').bind('inview', function (event, visible) {
				if (visible == true) {
					$(this).addClass("inview");
    			}else{
      				$(this).removeClass("inview");
    			}
			});
			
			function newPos(x, windowHeight, pos, adjuster, inertia){
				return x + "% " + (-((windowHeight + pos) - adjuster) * inertia)  + "px";
			}
			
			function Move(){
				var pos = $window.scrollTop();
				//page découvrez-nous
    			if($firstBG.hasClass("inview")){
					$firstBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 700, 0.3)});
					$carres.css({'backgroundPosition': 
								   newPos(18.5, windowHeight, pos, 780, 0.6)+", "+
								   newPos(28.25, windowHeight, pos, 1000, 0.5)+", "+
								   newPos(18, windowHeight, pos, 1600, 0.4)+", "+
								   newPos(26, windowHeight, pos, 1390, 0.3)+", "+
								   newPos(34, windowHeight, pos, 3000, 0.2)+", "+
								   newPos(19, windowHeight, pos, 5650, 0.1)
								  });
				}
				if($secondBG.hasClass("inview")){
					$secondBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 1780, 0.3)});
				}
				if($thirdBG.hasClass("inview")){
					$thirdBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 2980, 0.3)});
				}
				if($fourthBG.hasClass("inview")){
					$fourthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 4100, 0.3)});
				}
				if($fifthBG.hasClass("inview")){
					$fifthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 5000, 0.3)});
				}
				
				//page nos engagements
				if($sixthBG.hasClass("inview")){
					$sixthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 700, 0.3)});
				}
				if($seventhBG.hasClass("inview")){
					$seventhBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 1780, 0.3)});
				}
				if($eigthBG.hasClass("inview")){
					$eigthBG.css({'backgroundPosition': newPos(50, windowHeight, pos, 2980, 0.3)});
				}
			}
			
			$window.resize(function(){
				Move();
			});
			
			$window.bind('scroll', function(){
    			Move();
			});

		})