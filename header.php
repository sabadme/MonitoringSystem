<?php
session_start();
include("include/dbconnect.php");
include("include/signup.php");
include("include/login.php");
include("include/logout.php");
include("include/form_process.php");

if (isset($_SESSION['u_email']))
{
include("include/upload.php");
include("include/post.php");
}
?>

<link rel="stylesheet" href="css/popupform.css">
<link rel="stylesheet" href="css/headerstyle.css">

<div class="headerspace">

</div>

<header>
	<div class="wrapper">
		<div class="logo"></div>
		<div class="navleft">
			
		</div>

		<div class="navright">
			<ul>
				<a onclick="myFunction2()">
					<li>Help</li>
				</a>
				<hr class="vertical">
				<?php

                if (isset($_SESSION[ 'u_email' ])) {
                    $sql = "SELECT * FROM tbl_users WHERE id = '$id'";
                    $result = mysqli_query($dbcon, $sql);
                    $row = mysqli_fetch_assoc($result);

                    echo '<form action="" method="post"><button type="submit" name="logout">Log-out</button></form>';
                    echo "<a href='profile.php' class='greet'>";
                    echo "<div class='ppicon'>";
                    if ($row[ 'user_pp_status' ] == 1) {
                        echo "<img src='uploads/" . $row[ 'user_pp' ] . "'>";
                    } else {
                        echo "<img src='uploads/profiledefault.jpg'>";
                    }
                    echo "</div>" . $_SESSION[ 'u_fname' ] . "</a>";
                } else {
                    echo '<a onclick="myFunction1()"><li>Log-in</li></a>';
                }
                ?>
			</ul>
		</div>
		<hr class="vertical">
		<div class="navright">
			<ul>
				<a href="aboutPage.php">
					<li>About</li>
				</a>
				<a href="index.php">
					<li>Home</li>
				</a>

			</ul>
		</div>
	</div>

	<div id="modal-wrapper" class="modal1">

		<div class="modal-content animate">

			<div class="imgcontainer">
				<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
				<img src="img/1.png" alt="Avatar" class="avatar">
			</div>

			<form id="login" action="" method="post">
				<h1>Log-in</h1>
				<div class="container">
					<input type="email" placeholder="Enter Email Address" name="user_email">
					<input type="password" placeholder="Enter Password" name="user_password">
					<button class="insidemodal" type="submit" name="login">Log-in</button>
					<p class="switcher">Don't have an account? <a onclick="switchVisible();">Register.</a>
					</p>
					<input type="checkbox" style="margin:20px 0 0 0;"> Remember me
					<a href="#" style="text-decoration:none; float:right; margin:20px 0 0 0;">Forgot Password?</a>
				</div>

			</form>

			<form id="signup" action="" method="post">
				<h1>Sign-up</h1>
				<div class="container">
					<!--<input type='hidden' name="submitted" id="submitted" value="1">-->
					<label><input type="radio" name="user_type" value="0" checked>As Buyer</label>
					<label><input type="radio" name="user_type" value="1">As Seller</label>
					<div class="formgrid">
						<input type="text" class="fnames" placeholder="Enter First Name" name="user_fname">
						<input type="text" class="lnames" placeholder="Enter Last Name" name="user_lname">
					</div>
					<input type="email" placeholder="Enter Email" name="user_email">
					<input type="password" placeholder="Enter Password" name="user_password">
					<input type="password" placeholder="Confirm Password" name="confirmpass">
					<button class="insidemodal" type="submit" name="signup">Create Account</button>
					<p class="switcher">Already had an account? <a onclick="switchVisible();">Log-in.</a>
					</p>
				</div>

			</form>

		</div>

	</div>

	<div id="modal-wrapper-help" class="modal2">

		<form class="modal-content animate" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

			<div class="imgcontainer">
				<span onclick="document.getElementById('modal-wrapper-help').style.display='none'" class="close" title="Close PopUp">&times;</span>
				<img src="img/2.png" alt="Avatar" class="avatar">
				<h1>Contact Us</h1>
				<h5>For any inquiries, concerns or any web-related assistance, kindly send us a message by filling up this form. </h5>
			</div>

			<div class="container">
				<input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
				<input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
				<textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5"></textarea>
				<button class="insidemodal" name="submit" type="submit" data-submit="...Sending">Submit</button>
				<div class="success">
					<?=  $success ?>
				</div>
			</div>

		</form>

	</div>

</header>

<script>
	function switchVisible() {
		var div1 = document.getElementById( 'login' );
		var div2 = document.getElementById( 'signup' );

		if ( div1 ) {

			if ( div1.style.display == 'none' ) {
				div1.style.display = 'block';
				div2.style.display = 'none';
			} else {
				div1.style.display = 'none';
				div2.style.display = 'block';
			}
		}
	}

	var modal1 = document.getElementById( 'modal-wrapper' );
	var modal2 = document.getElementById( 'modal-wrapper' );

	window.onclick = function ( event ) {
		if ( event.target == modal1 ) {
			modal1.style.display = "none";
		}
		if ( event.target == modal2 ) {
			modal1.style.display = "none";
		}
	}

	function myFunction1() {
		var x = document.getElementById( "modal-wrapper" );
		var y1 = document.getElementById( 'login' );
		var y2 = document.getElementById( 'signup' );

		if ( x.style.display === "block" ) {
			x.style.display = "none";
		} else {
			x.style.display = "block";
			y1.style.display = "block";
			y2.style.display = "none";
		}
	}

	function myFunction2() {
		var z = document.getElementById( "modal-wrapper-help" );
		if ( z.style.display === "block" ) {
			z.style.display = "none";
		} else {
			z.style.display = "block";
		}
	}
</script>
