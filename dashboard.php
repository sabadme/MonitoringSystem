<?php 
session_start();
error_reporting(0);
$accountname=$_SESSION['account'];
?>

<?php if ($accountname){
	include"navigation.php";
}?>

<div class="dashboard">
	HEY
</div>