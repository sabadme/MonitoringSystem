<?php 
$servername ="localhost";
$username="root";
$password1="";  
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);

$report=mysql_query("SELECT * FROM report ORDER BY id desc");
while($data_report=mysql_fetch_array($report)){
	$equipment_id=$data_report['equipment_id'];
	$report_id=$data_report['report_id'];

	$user_report=mysql_query("SELECT * FROM tbl_login WHERE id='$report_id'");
	$data_user=mysql_fetch_array($user_report);

	$equipment=mysql_query("SELECT * FROm equipment WHERE id='$equipment_id'");
	$data_equipment=mysql_fetch_array($equipment);
	?>
	<tr>
		<td><?php echo $data_user['account'] ?></td>
		<td><?php echo $data_equipment['equipment_name'] ?></td>
		<td><?php echo $data_report['report_message']; ?></td>
	</tr>
	<?php
}

 ?>