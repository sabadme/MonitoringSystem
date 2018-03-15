<?php 
include"Office/Add_user_function.php";

if (isset($_REQUEST['addSA'])) {
	include"Office/Add_user.php";
}else if(isset($_REQUEST['add_user_SA'])){
	include"Office/Add_user.php";
}else if(isset($_REQUEST['dashboard'])){
	include"office/dashboard.php";
}else if (isset($_REQUEST['booking'])){
	include"admin/booking_page.php";		
}else if (isset($_REQUEST['report'])){
	include"Office/officeReport.php";		
}else {
	include"office/dashboard.php";	
}

 ?>
