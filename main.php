<?php 
session_start();
error_reporting(0);
$accountname=$_SESSION['account'];
$status=$_SESSION['status'];
 ?>
 <?php 
if(isset($status)){
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Monitoring</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link type="text/css" rel="stylesheet" href="css/simplePagination.css"/>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jQuery.print.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.simplePagination.js"></script>
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
	<?php if ($accountname): ?>
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
			<?php include"navigation.php"; ?>
			<?php 
			if($status=="Admin"){

			 ?>
			<?php include"admin/function.php"; ?>
			<?php 
			}else if($status=="Office"){
				$accountname;
			 ?>
			<?php include"Office/function.php"; ?>
			<?php 
			}else if($status=="Teacher"){
				$accountname;
			 include"teacher/function.php";
			}

			 ?>
		
			
						
		</div>

		<?php include"footer.php"; ?>
	</div>
</body>

	
</html>
<?php 
}else{
	header("location:home.php");
}	
 ?>
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

	/*function openModal() {
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementsByClassName("reportBtn")[0];

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        
    }*/

	
	jQuery(document).ready(function(){
		$('.block-loader').fadeOut("slow");
		$('body').addClass('loaded');
		addActive();
        /*openModal();*/
	});

	jQuery(window).on('unload', function(){
		$('.block-loader').fadeIn("slow");
	});
</script>
