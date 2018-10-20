
<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="csss/styles.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jQuery.print.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
</head>

<body class="home-index">
	<div class="block-loader">
 		<div class="loader-gear"></div> 
	</div>

	<div class="page-wrapper">
	
		<header>

			<div class="logo-container">
				<img src="images/Projcheck-logo.png">

				<span></span>
			</div>

			<div class="login-container">
				<a href="#about">About</a> 
				<a href="#what">What's Inside</a> 
				<span class="login">LOGIN</span>
				<?php include"login.php"; ?> 
			</div>

		</header>

		<div class="page-main">
			<!-- <div class="banner-slider owl-carousel">
				
					<div><img src="images/banner-placeholder1.jpg"></div>
					<div><img src="images/banner-placeholder2.jpg"></div>
					<div><img src="images/banner-placeholder.jpg"></div>
					<div><img src="images/banner-placeholder.jpg"></div>
			</div> -->
			<!-- <div class="slider"> 
				<img src="images/1.jpg" class="mySlide">
				<img src="images/2.jpg" class="mySlide">
				<img src="images/3.jpg" class="mySlide">
				<img src="images/4.jpg" class="mySlide">
				<img src="images/5.jpg" class="mySlide">
			</div> -->
			<div class="banner">
				<center>
				<img src="images/Projcheck-logotype.png" style="width: 230px;">
				</center>
				<span class="sample">An Immutable Transparency</span>			
			</div>
			<?php include"includehome.php"; ?>		
		</div>
	</div>
</body>

	
</html>

<style>
.about {
	display: block;
	padding: 30px;
	background: aliceblue;
}

.about h1 {
	font-size: 20px;
}

.about p {
	padding: 30px;
}

.whats-container {
	padding: 30px;
	background: #e7e7e7;
}

.whats-container h1 {
  	font-size: 20px;
}

.page-text-container {
	max-width: 100%;
	margin: 0 auto;
	padding-top: 30px;
	display: flex;
}

.page-text-container .page-text {	
	max-width: 33.33%;
	margin: 0 auto 50px;
	text-align: center;	
}
.page-text-container img {
	max-width: 150px;
	width: 100%;
	height: 150px;
	margin-bottom: 20px;
	padding: 10px;
}

.page-text {
	padding: 10px;
	background: #fff;
	border-radius: 15px;
}

.page-text span {
	font-weight: 600;
    padding: 15px 0;
     margin: 10px 0; 
    display: block;
}

.page-text p {
	padding: 10px;
    font-size: 14px;
}
</style>

<script>
	function addActive(){
		$('.login').click(function(){
			if ($('.login').hasClass('active')) {
				$(this).removeClass('active');
			}

			else {
				$(this).addClass('active');
			}

		});
	}

	function links() {
	// Add smooth scrolling to all links
	  $(".login-container > a").on('click', function(event) {

	    // Make sure this.hash has a value before overriding default behavior
	    if (this.hash !== "") {
	      // Prevent default anchor click behavior
	      event.preventDefault();

	      // Store hash
	      var hash = this.hash;

	      // Using jQuery's animate() method to add smooth page scroll
	      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	      $('html, body').animate({
	        scrollTop: $(hash).offset().top
	      }, 800, function(){
	   
	        // Add hash (#) to URL when done scrolling (default click behavior)
	        window.location.hash = hash;
	      });
	    } // End if
	  });
	}

	/*var index = 0;
	carousel ();

	function	carousel(){
	var i;
	var x=document.getElementsByClassName("mySlide");

	for (i = 0; i <x.length;i++){
		x[i].style.display = "none";
	}
	index++;
	if(index > x.length){index = 1}
		x[index - 1].style.display = "block";
	setTimeout(carousel,2000);
	}*/


	/*function loadCarousel() {
        var itemListContainer = $('.banner-slider');
            itemListContainer.show();
    }

    function owlCarousel() {
    	$('.banner-slider').owlCarousel({
            loop: true,
            margin: 5,
            items: 1,
            autoplay:true,
    		autoplayTimeout:2000
        });
    }*/

	jQuery(document).ready(function(){
		$('.block-loader').fadeOut("slow");
		$('body').addClass('loaded');
		addActive();
	 	/*loadCarousel();
        owlCarousel();*/
        links();
	});

	jQuery(window).on('unload', function(){
		$('.block-loader').fadeIn("slow");
	});
</script>


