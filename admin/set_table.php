<?php 
include"admin/connection.php";

$view_set=mysql_query("SELECT DISTINCT `set_name`,`img_filename`,`date`,`time`,`setQr_code` FROM equipmentSet ORDER BY id desc");
while($data_viewset=mysql_fetch_array($view_set)){
	$img=$data_viewset['img_filename'];
	?>
	<tr>
		<td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $img . "'>" ?></td>
		<td><?php echo $data_viewset['setQr_code']; ?></td>
		<td><?php echo $data_viewset['date']; ?></td>
		<td><?php echo $data_viewset['time']; ?></td>
	</tr>
	<?php
}

 ?>