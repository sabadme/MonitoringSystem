<?php 

include"admin/connection.php";



$sql_booking = mysql_query("SELECT * FROM booking WHERE booker='$accountname' And status='Approved'");
while($data_booking = mysql_fetch_array($sql_booking)){

	$equipmentBooking_ID = $data_booking['equipment'];

$sql_equipment = mysql_query("SELECT * FROM equipment WHERE id='$equipmentBooking_ID'");
$data_equipmentcheck = mysql_fetch_array($sql_equipment);
$equipmentID = $data_equipmentcheck['id'];
$equipmentBooking_image = $data_equipmentcheck['equipment_filename'];
$equipmentNameBooking = $data_equipmentcheck['equipment_name'];
$equipmentCodeBooking = $data_equipmentcheck['equipment_code'];
if($equipmentBooking_ID == $equipmentID){
	?>
		<tr>
		<td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$equipmentBooking_image."'>" ?></td>
		<td><?php echo $equipmentNameBooking; ?></td>
		<td><?php echo $equipmentCodeBooking; ?></td>
		<td><form action="" method="POST"><button class="action disable" name="equipment_report" type="submit" value="<?php echo $equipmentID; ?>">Report</button></form></td>
	</tr>
	<?php
}
}




$equipment=mysql_query("SELECT * FROM rooms_equipment WHERE room='$accountname'");
while($data_equipment=mysql_fetch_array($equipment)){
	$equipment_name=$data_equipment['equipment'];
	$equipment_status=$data_equipment['status'];
	$set_status=$data_equipment['set_status'];

	if($equipment_status=="Broken" || $equipment_status=="Expired" || $equipment_status=="Unassigned"){

	}else{

		if($set_status=="Set"){
			$sql_equipmentSet=mysql_query("SELECT * FROM equipmentset WHERE id='$equipment_name'");
			$data_equipmentSet=mysql_fetch_array($sql_equipmentSet);
			$equipmentName=$data_equipmentSet['set_name'];
			$equipment_image=$data_equipmentSet['img_filename'];
			$equipmentCode=$data_equipmentSet['setQr_code'];
			$idEquipment=$data_equipmentSet['id'];
		}else{

	$get_equipment=mysql_query("SELECT * FROM equipment WHERE id='$equipment_name'");
	$dataget_equipment=mysql_fetch_array($get_equipment);
	$equipment_image=$dataget_equipment['equipment_filename'];
	$equipmentName=$dataget_equipment['equipment_name'];
	$equipmentCode=$dataget_equipment['equipment_code'];
	$idEquipment=$dataget_equipment['id'];
}


	?>
	<tr>
		<td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$equipment_image."'>" ?></td>
		<td><?php echo $equipmentName; ?></td>
		<td><?php echo $equipmentCode; ?></td>
		<td><form action="" method="POST"><button class="action disable" name="equipment_report" type="submit" value="<?php echo $idEquipment; ?>">Report</button></form></td>
	</tr>
	<?php
}
}
 ?>