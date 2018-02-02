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
	if($firstname != "null"){
?>
<tr>
<td><?php echo $data_table['firstname']; ?></td>
<td><?php echo $data_table['lastname']; ?></td>
</tr>
<?php
}
}
 ?>
