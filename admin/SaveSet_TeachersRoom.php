<?php 

if(isset($_REQUEST['SaveSet_TeachersRoom'])){

$teacher=$_REQUEST['teacher'];

include"admin/connection.php";

$date = date('m/d/Y h:i:s a', time());


if($teacher==""){
	?>
	<script>alert("Please input search name...");</script>
	<?php
}else{


$SELECT_teacherId=mysql_query("SELECT * FROM tbl_login WHERE account='$teacher'");
$data_teacherId=mysql_fetch_array($SELECT_teacherId);
$Id_teacher=$data_teacherId['id'];
$ED_status=$data_teacherId['ED_status'];

if($ED_status=="Disable"){
	?>
	 <script> 
 alert("User is disable"); </script>
	<?php
}else{

if(isset($_REQUEST['SelectedRoom'])){
	 $SelectedRoom=$_REQUEST['SelectedRoom'];

	 for ($i=0; $i < count($SelectedRoom) ; $i++) { 
	 	 $roomSelect=$SelectedRoom[$i];

$getRooms=mysql_query("SELECT * FROM teachers_roomsset WHERE techears_id='$Id_teacher'");
$data_getRooms=mysql_fetch_array($getRooms);
$roomSave=$data_getRooms['teachers_room'];

if($roomSave==$roomSelect){
	?>
	<script>alert("This room is already added");</script>
	<?php
}else{

$Insert_AssignRooms=mysql_query("INSERT INTO teachers_roomsset VALUES(0,'$Id_teacher','$roomSelect','Assigned','$date','None')");
echo mysql_error();  
if($Insert_AssignRooms){
	
	?> <script> 
 alert("Record Successfully Added"); </script>
 <?php 
}else {
  echo "Error adding record"; 
}
}

}
}
}
}
}

 ?>