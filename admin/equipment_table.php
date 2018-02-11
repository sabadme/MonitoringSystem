<?php
include"admin/connection.php";

$equipment_sql=mysql_query("SELECT * FROM equipment ORDER BY id desc");
while($data_equipment=mysql_fetch_array($equipment_sql)){
	?>
	<tr>
	<td><?php echo $data_equipment['equipment_code']; ?></td>
	<td><?php echo $data_equipment['equipment_name']; ?></td>
	<td><?php echo $data_equipment['equipment_start']; ?></td>
	<td><?php echo $data_equipment['equipment_end']; ?></td>
	</tr>
	<?php
}

?>