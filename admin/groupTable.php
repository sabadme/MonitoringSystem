	<?php
include"admin/connection.php";

$count= 0;
$equipment_sql=mysql_query("SELECT DISTINCT equipment_name,equipmentType  FROM equipment WHERE carrier='Group' ORDER BY id desc");
while($data_equipment=mysql_fetch_array($equipment_sql)){
	$EquipName = $data_equipment['equipment_name'];



	$sqlEquipment_Group = mysql_query("SELECT * FROM equipment WHERE equipment_name='$EquipName'");
	$data_sqlEquipment_Group = mysql_fetch_array($sqlEquipment_Group);

	$sql_count = mysql_query("SELECT `equipment_name`,  COUNT(*) AS `count`	 FROM equipment WHERE equipment_name='$EquipName' And status != 'Broken'");
	$data_count = mysql_fetch_array($sql_count);
	$count = $data_count['count'];


	?>
	<tr>
	<td><?php echo $data_sqlEquipment_Group['equipment_code']; ?></td>
	<td><?php echo $data_equipment['equipment_name']; ?></td>
	<td><?php echo $data_equipment['equipmentType'] ?></td>
	<td><?php echo $count; ?></td>
	<td><?php echo $data_sqlEquipment_Group['equipment_start']; ?></td>
	<td><?php echo $data_sqlEquipment_Group['equipment_end']; ?></td>
	<td><form action="" method="POST"><button name="viewGroupEquipment" type="submit" value="<?php echo $data_equipment['equipment_name']; ?>">View</button></form></td>
	<td><form action="" method="POST"><button class="action" type="submit" name="update_equipment" value="<?php echo $data_equipment['id']; ?>">Update</button></form></td>
	</tr>
	<?php
}

?>