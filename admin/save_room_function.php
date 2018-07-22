<?php 	
if(isset($_REQUEST['save_room'])){
include"admin/connection.php";

$roomName=$_REQUEST['roomName'];
$uptodate="Up To Date";

if(isset($_REQUEST['check_list'])){
	 $check_list=$_REQUEST['check_list'];

	 for ($i=0; $i < count($check_list) ; $i++) { 
	 	 $check=$check_list[$i];

	 	 $select_status=mysql_query("SELECT * FROM equipmentset WHERE id='$check'");
	 	 $data_status=mysql_fetch_array($select_status);
	 	 	$id=$data_status['id'];
	 	 	$set_name=$data_status['set_name'];




	 	 	 if($check==$id){
	 	 	$equipment_status="Set";
	 	 }else{
	 	 	$equipment_status="None";
	 	 }
	 



				 $insert_room=mysql_query("INSERT INTO room VALUES(0,'$roomName','$check','$uptodate','$equipment_status')");
				 echo mysql_error();  
			  if($insert_room){
				
				?>
			 <?php 
			}else {
			  echo "Error adding record"; 
			}

	 	 




	 	
$assign_status="Assigned";

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

	 	

 	 if($check==$id){

 	

 $update_status1="UPDATE equipmentset SET `assigned_unassigned`='$assign_status' WHERE set_name='$set_name'";

if (mysql_query($update_status1)) {?>


     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}
	 	 	
	 	 }else{
$update_status="UPDATE equipment SET `status`='$assign_status' WHERE id='$check'";

if (mysql_query($update_status)) {?>


     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}
	 	 }
		
	 
}
}
mysql_close($conn);
}
?>