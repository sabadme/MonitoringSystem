<?php 
include"admin/connection.php";

$sql_equipmentBook = mysql_query("SELECT * FROM booking WHERE booker='$accountname' And status='Approved'");
while($data_equipmentBook=mysql_fetch_array($sql_equipmentBook)){
	$quipmentBook_ID = $data_equipmentBook['equipment'];

	$get_equipment = mysql_query("SELECT * FROM equipment WHERE id='$quipmentBook_ID'");
	$data_get_equipment = mysql_fetch_array($get_equipment);
	$equipmentPicBook = $data_get_equipment['equipment_filename'];

	?>
<tr>
	<td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$equipmentPicBook."'>" ?></td>
	<td><?php echo $data_get_equipment['equipment_name'] ?></td>
	<td><?php echo $data_get_equipment['equipment_code'] ?></td>
	<td><?php echo $data_get_equipment['equipment_start'] ?></td>
	<td><?php echo $data_get_equipment['equipment_end'] ?></td>
	<td><?php echo $data_equipmentBook['venue']; ?></td>
</tr>
<?php

}

$sql_AssignedEquip = mysql_query("SELECT * FROM rooms_equipment WHERE room='$accountname'");
while($data_AssignedEquip=mysql_fetch_array($sql_AssignedEquip)){
$equipmentId = $data_AssignedEquip['equipment'];

$sql_equipment = mysql_query("SELECT * FROM equipment WHERE id='$equipmentId'");
$data_equipment = mysql_fetch_array($sql_equipment);
$equipmentPic = $data_equipment['equipment_filename'];

?>
<tr>
	<td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$equipmentPic."'>" ?></td>
	<td><?php echo $data_equipment['equipment_name'] ?></td>
	<td><?php echo $data_equipment['equipment_code'] ?></td>
	<td><?php echo $data_equipment['equipment_start'] ?></td>
	<td><?php echo $data_equipment['equipment_end'] ?></td>
	<td><?php echo $data_AssignedEquip['room']; ?></td>
</tr>
<?php
}
 ?>
