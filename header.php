
<?php 
session_start();
error_reporting(0);
$accountname=$_SESSION['account'];
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

			<a href="logout.php" class="logout"><img src="images/svg/logout.svg" alt="LOGOUT" /></a>
		</div>
	<?php else: ?>
		<span class="login">LOGIN</span>
	<?php endif; ?>

	<?php include"login.php"; ?> 
</div>

</header>