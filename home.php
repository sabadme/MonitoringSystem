<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jQuery.print.js"></script>
</head>

<body class="home-index">
	<div class="block-loader">
  
 		<div class="loader-gear"></div> 
	</div>

	<div class="page-wrapper">
		<?php include"header.php"; ?>

		<div class="page-main">
			<div class="banner-slider">
				<ul>
					<li><img src="images/banner-placeholder.jpg" /></li>
					<li><img src="images/banner-placeholder.jpg" /></li>
					<li><img src="images/banner-placeholder.jpg" /></li>
					<li><img src="images/banner-placeholder.jpg" /></li>
					<li><img src="images/banner-placeholder.jpg" /></li>
				</ul>
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

	jQuery(document).ready(function(){
		$('.block-loader').fadeOut("slow");
		$('body').addClass('loaded');
		addActive();
	});

	jQuery(window).on('unload', function(){
		$('.block-loader').fadeIn("slow");
	});
</script>


