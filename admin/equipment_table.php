	<?php
include"admin/connection.php";

$equipment_sql=mysql_query("SELECT * FROM equipment WHERE carrier='Single' ORDER BY id desc");
while($data_equipment=mysql_fetch_array($equipment_sql)){
	?>
	<tr>
		<td><?php echo $data_equipment['id']; ?></td>
	<td><?php echo $data_equipment['equipment_code']; ?></td>
	<td><?php echo $data_equipment['equipment_name']; ?></td>
	<td><?php echo $data_equipment['status']; ?></td>
	<td><?php echo $data_equipment['equipment_start']; ?></td>
	<td><?php echo $data_equipment['equipment_end']; ?></td>
	<td><form action="" method="POST"><button class="action" type="submit" name="update_equipment" value="<?php echo $data_equipment['id']; ?>">Update</button></form></td>
	</tr>
	<?php
}

?>