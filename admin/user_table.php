<?php 

$servername ="localhost";
$username="root";
$password1="";	
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);


$user_table=mysql_query("SELECT * FROM tbl_login ORDER BY id desc");
while($data_table=mysql_fetch_array($user_table)){
	$firstname=$data_table['firstname'];
	 $status=$data_table['ED_status'];
	 $id=$data_table['id'];

	if($firstname != "null"){
?>
<tr>
<td><?php echo $data_table['firstname']; ?></td>
<td>php <?php echo $data_table['middlename'] ?></td>
<td><?php echo $data_table['lastname']; ?></td>
<td><?php echo $data_table['Status']; ?></td>
<td><?php echo $data_table['ED_status']; ?></td>
<?php 
if($status=="Enabled"){
 ?>
  <td><form action="" method="POST"><button class="action disable" name="disable" type="submit" value="<?php echo $id; ?>">Disable</button></form></td>
<?php 
}else{
	?>
	<td><form action="" method="POST"><button class="action enable" name="enable" type="submit" value="<?php echo $id; ?>">Enable</button></form></td>

	<?php
}

 ?>
</tr>
<?php

}
}
 ?>

