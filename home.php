
<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
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
				<img src="images/lccb.png" />

				<span>Online Equipment Monitoring System</span>
			</div>

			<div class="login-container">
				<span class="login">LOGIN</span>
				<?php include"login.php"; ?> 
			</div>

		</header>

		<div class="page-main">
			<div class="banner-slider owl-carousel">
				
					<div><img src="images/banner-placeholder1.jpg"></div>
					<div><img src="images/banner-placeholder2.jpg"></div>
					<div><img src="images/banner-placeholder.jpg"></div>
					<div><img src="images/banner-placeholder.jpg"></div>
			</div>
		

			<div class="page-text-container">
				<div class="page-text">
					<img src="images/scaning.png">
					<div>				
						<span>MANAGE / MONITOR EQUIPMENTS</span>
						<p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.
						</p>
					</div>
				</div>

				<div class="page-text">
					<img src="images/printing.png">

					<div>
						<span>GENERATE / PRINT QR CODES</span>
						<p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.
						</p>
					</div>
				</div>

				<div class="page-text">
					<img src="images/monitoring.png">
					<div>
						<span>SCAN GENERATED QR CODES</span>
						<p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore etdolore magna aliqua.
						</p>
					</div>
				</div>
			</div>

		</div>

		<?php include"footer.php"; ?>
	</div>
</body>

	
</html>

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

		$('.login-form-container').mouseleave(function(){
			$('.login').removeClass('active');
		});
	}

	function loadCarousel() {
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
    }

	jQuery(document).ready(function(){
		$('.block-loader').fadeOut("slow");
		$('body').addClass('loaded');
		addActive();
	 	loadCarousel();
        owlCarousel();
	});

	jQuery(window).on('unload', function(){
		$('.block-loader').fadeIn("slow");
	});
</script>
