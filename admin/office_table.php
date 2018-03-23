<?php 
include"admin/connection.php";

$office=mysql_query("SELECT * FROM tbl_login WHERE Status='Office'");
while($data_office=mysql_fetch_array($office)){
$ed_status=$data_office['ED_status'];
$office_id=$data_office['id'];
$office_name=$data_office['account'];




	?>
	<tr>
		<td><?php echo $data_office['account']; ?></td>
		<td><?php echo $ed_status; ?></td>
		<?php 
		if($ed_status=="Enabled"){
		 ?>
		<td><form action="" method="POST"><button class="action disable" name="officedisable" type="submit" value="<?php echo $data_office['id']; ?>">Disable</button></form></td>
		<?php 
		}else{
			?>
			<td><form action="" method="POST"><button class="action enable" type="submit" name="officeenable" value="<?php echo $data_office['id']; ?>">Enable</button></form></td>
			<?php
		}
		 ?>
		
		<td><form action="" method="POST"><button class="action secondary" type="submit" name="officeequipmentassign" value="<?php echo $office_id; ?>">Equipments</button></form></td>
		<td><form action="" method="POST"><button class="action tertiary" name="office_equipment_table" type="submit" value="<?php echo $office_name; ?>">Manage</button></form></td>
		<td><form action="" method="POST"><button class="action" type="submit" name="office_update" value="<?php echo $data_office['id']; ?>">Update</button></form></td>
	</tr>
	<?php
}

 ?>
