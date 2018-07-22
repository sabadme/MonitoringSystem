<?php 
$accountname=$_SESSION['account'];
if(isset($_REQUEST['send_report'])){
	$send_report=$_REQUEST['send_report'];
	$messagereport=$_REQUEST['messagereport'];

include"admin/connection.php";

	$get_equipment=mysql_query("SELECT * FROM room WHERE equipment='$send_report'");
	$data_equipment=mysql_fetch_array($get_equipment);
	$equipment=$data_equipment['equipment'];

	$get_equipmentId=mysql_query("SELECT * FROM equipment WHERE id='$equipment'");
	$data_equipmentid=mysql_fetch_array($get_equipmentId);
	$equipment_id=$data_equipmentid['id'];

	$get_userId=mysql_query("SELECT * FROM tbl_login WHERE account='$accountname'");
	$data_userId=mysql_fetch_array($get_userId);
	$userid=$data_userId['id'];


	$insert=mysql_query("INSERT INTO report VALUES(0,'$send_report','$userid','$messagereport','1','1')");echo mysql_error();     
  
if($insert){ ?> <script> 

 alert("Record Successfully Added"); </script>
 <?php
}else {
  echo "Error adding record"; 
}
}

 ?>