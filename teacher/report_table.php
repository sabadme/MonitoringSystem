<?php 
$accountname=$_SESSION['account'];
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db); 

$get_booking=mysql_query("SELECT * FROM booking WHERE booker='$accountname'");
while($data_booking=mysql_fetch_array($get_booking)){
	$venue=$data_booking['venue'];

	$get_room=mysql_query("SELECT * FROM room WHERE room='$venue'");
	$data_room=mysql_fetch_array($get_room);
	$equipment=$data_room['equipment'];
	$status=$data_room['status'];

	$get_equipment=mysql_query("SELECT * FROM equipment WHERE equipment_name='$equipment'");
	$data_equipment=mysql_fetch_array($get_equipment);
	$equipment_filename=$data_equipment['equipment_filename'];

	if($status=="Up To Date"){
	?>
	
	<tr>
		<td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$equipment_filename."'>" ?></td>
		<td><?php echo $data_equipment['equipment_name']; ?></td>
		<td><?php echo $data_equipment['equipment_code']; ?></td>
		<td><form action="" method="POST"><button class="reportBtn" name="equipment_report" type="submit" value="<?php echo $data_room['id']; ?>">Report</button></form></td>
	</tr>
	<?php

}

	


}
 ?>