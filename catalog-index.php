<?php 
session_start();
error_reporting(0);
$accountname=$_SESSION['account'];
 ?>
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

<body class="main-index">
	<div class="block-loader">
  	
 		<div class="loader-gear"></div> 
	</div>

	<div class="page-wrapper">
		
<?php 


?>
<header>

<div class="logo-container">
	<img src="images/lccb.png" />

	<span>Online Equipment Monitoring System</span>
</div>	
<div class="login-container">
	<?php if ($accountname =="Admin"): ?>
		<div class="mainUser-container">
			<span class="username"><?php echo $accountname; ?></span>

			<a href="logout.php" class="logout"><!-- <img src="images/svg/logout.svg" alt="LOGOUT" /> --></a>
		</div>
	<?php else: ?>
		<span class="login">LOGIN</span>
	<?php endif; ?>

	<?php include"login.php"; ?> 	
</div>

</header>
		<div class="page-main">
			<?php include "navigation.php"; ?>
	
			<?php include"admin/catalog-function.php"; ?>

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
