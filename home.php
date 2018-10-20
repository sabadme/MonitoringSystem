<!DOCTYPE html>
<html>
<head>
	<title>PROJECT: Budget Transparancy</title>
	<link rel="stylesheet" type="text/css" href="css/style1000.css">
</head>
	<header>
		<div class="header">
				<div class="navigation" id="nav">
				<div class="navleft">
					<img src="images/Projcheck-logo.png">
				</div>
				<div class="navright">
					<span>Whats Inside</span>
					<span>About</span>
					<span>Contact</span>
					<div class="login-form-container">

						<form action="" method="POST">

						<input style="padding: 10px 15px;" type="text" name="username" placeholder="Username">
						<input style="padding: 10px 15px;" type="password" name="password" placeholder="Password">
						<button name="login" type="submit">Login</button>

					</form>
				</div>
					<?php include"login.php"; ?> 
				
				</div>
			</div>
		</div>
	</header>
<body>
	<div class="home-container">
		<div class="banner">
			<center>
			<img src="images/Projcheck-logotype.png" style="    width: 230px;">
			</center>
			<span class="sample">An Immutable Transparency</span>
		
		</div>

<?php include"includehome.php"; ?> 
	</div>
</body>
	<footer>
		<div class="foot">
			<p class="copyright">Copyright Ⓒ 2017 Runikaperdihan Inc. All Rights Reserved</p>
		</div>
	</footer>
</html>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("nav");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
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
</script>