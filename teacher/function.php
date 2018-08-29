<?php 
include"teacher/send_report.php";
include "teacher/teacherBooking_function.php";

if(isset($_REQUEST['dashboard'])){
	include"teacher/dashboard.php";
}else if(isset($_REQUEST['reports'])){
	include"teacher/report.php";
}else if(isset($_REQUEST['equipment_report'])){
	include"teacher/report_message.php";	
}else if(isset($_REQUEST['send_report'])){
	include"teacher/report.php";	
}else if(isset($_REQUEST['booking'])){
	include"teacher/booking_page.php";
}else if (isset($_REQUEST['save_booking'])){
	include"teacher/booking_page.php";		
}else if (isset($_REQUEST['equipment_page'])) {
    include "admin/product_page.php";
}else if (isset($_REQUEST['viewrooms'])) {
    include "teacher/viewrooms.php";
}else if (isset($_REQUEST['viewequipment_rooms'])) {
    include "teacher/viewequipment_rooms.php";
}else if (isset($_REQUEST['room_page'])) {
    include "teacher/room_pageEquipment.php";
}else{
	include"teacher/dashboard.php";
}

 ?>