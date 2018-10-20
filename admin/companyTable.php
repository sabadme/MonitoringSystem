<?php 

$servername ="localhost";
$username1="root";
$password1="";
$db="db_projcheck";


$conn =mysql_connect($servername,$username1,$password1);
mysql_select_db($db);

$count = "0";
$user_table=mysql_query("SELECT * FROM tbl_users ORDER BY id desc");
while($data_table=mysql_fetch_array($user_table)){
	$count++;
	$firstname=$data_table['firstname'];
	
	 $id=$data_table['id'];	


?>
<tr>
<td data-th="First Name"><?php echo $data_table['firstname']; ?></td>
<td data-th="Employment"><?php echo $data_table['status']; ?></td>

</tr>
<?php

}
 ?>

  

  

