<?php 	
if(isset($_REQUEST['save_selected_equipment'])){
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$save_selected_equipment=$_REQUEST['save_selected_equipment'];

$get_officename=mysql_query("SELECT * FROM tbl_login WHERE id='$save_selected_equipment'");
$data_officename=mysql_fetch_array($get_officename);
$officename=$data_officename['account'];


$uptodate="Up To Date";

if(isset($_REQUEST['check_lists'])){
	 $check_list=$_REQUEST['check_lists'];

	 for ($i=0; $i < count($check_list) ; $i++) { 
	 	 $check=$check_list[$i];

	 	 $sql_check=mysql_query("SELECT * FROM room WHERE equipment='$check'");
	 	 $data_equipment=mysql_fetch_array($sql_check);
	 	 $equipment_name=$data_equipment['equipment'];

	 	 if($equipment_name==$check){
	 	 	
	 	 }else{

	 $insert_room=mysql_query("INSERT INTO room VALUES(0,'$officename','$check','$uptodate')");
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