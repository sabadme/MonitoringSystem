<?php 
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db); 

$equipment=mysql_query("SELECT * FROM room WHERE room='$accountname'");
while($data_equipment=mysql_fetch_array($equipment)){
	$equipment_name=$data_equipment['equipment'];
	$equipment_status=$data_equipment['status'];

	$get_equipment=mysql_query("SELECT * FROM equipment WHERE equipment_name='$equipment_name'");
	$dataget_equipment=mysql_fetch_array($get_equipment);
	$equipment_image=$dataget_equipment['equipment_filename'];

	if($equipment_status=="Broken" || $equipment_status=="Expired" || $equipment_status=="Unassigned"){

	}else{


	?>
	<tr>
		<td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$equipment_image."'>" ?></td>
		<td><?php echo $dataget_equipment['equipment_name']; ?></td>
		<td><?php echo $dataget_equipment['equipment_code']; ?></td>
		<td><form action="" method="POST"><button class="action disable" name="equipment_report" type="submit" value="<?php echo $data_equipment['id']; ?>">Report</button></form></td>
	</tr>
	<?php
}
}
 ?>