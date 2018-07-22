<?php 	
if(isset($_REQUEST['save_room'])){
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$roomName=$_REQUEST['roomName'];
$uptodate="Up To Date";

if(isset($_REQUEST['check_list'])){
	 $check_list=$_REQUEST['check_list'];

	 for ($i=0; $i < count($check_list) ; $i++) { 
	 	 $check=$check_list[$i];

	 	 $sql_check=mysql_query("SELECT * FROM room WHERE equipment='$check'");
	 	 $data_equipment=mysql_fetch_array($sql_check);
	 	 $equipment_name=$data_equipment['equipment'];

	 	 if($equipment_name==$check){
	 	 	
	 	 }else{

	 $insert_room=mysql_query("INSERT INTO room VALUES(0,'$roomName','$check','$uptodate')");
	 echo mysql_error();  
  if($insert_room){
	
	?>
 <?php 
}else {
  echo "Error adding record"; 
}
}






$assign_status="Assigned";

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$update_status="UPDATE equipment SET `status`='$assign_status' WHERE equipment_name='$check'";

if (mysql_query($update_status)) {?>


     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}

 


	 }
}
mysql_close($conn);
}
?>