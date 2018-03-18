<?php 
include"teacher/send_report.php";
include "admin/booking_function.php";

if(isset($_REQUEST['dashboard'])){
	include"teacher/dashboard.php";
}else if(isset($_REQUEST['reports'])){
	include"teacher/report.php";
}else if(isset($_REQUEST['equipment_report'])){
	include"teacher/report_message.php";	
}else if(isset($_REQUEST['send_report'])){
	include"teacher/report.php";	
}else if(isset($_REQUEST['booking'])){
	include"admin/booking_page.php";
}else if (isset($_REQUEST['save_booking'])){
	include"admin/booking_page.php";		
} else if (isset($_REQUEST['equipment_page'])) {

    include "admin/product_page.php";
}else{
	include"teacher/dashboard.php";
}

 ?>