<?php 
include"Office/Add_user_function.php";
include"report.php";
include "admin/booking_function.php";

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
}else if (isset($_REQUEST['equipment_report'])){
	include"modal.php";		
}else if (isset($_REQUEST['send_report'])){
	include"modal.php";		
}else if (isset($_REQUEST['save_booking'])){
	include"admin/booking_page.php";		
} else if (isset($_REQUEST['equipment_page'])) {

    include "admin/product_page.php";
}else {
	include"office/dashboard.php";	
}

 ?>
