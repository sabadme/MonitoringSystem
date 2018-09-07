<?php 
include"admin/connection.php";


$sql_booking = mysql_query("SELECT * FROM booking WHERE booker='$accountname' ORDER BY id desc");
while($data_booking = mysql_fetch_array($sql_booking)){
?>
<tr>
	<td><?php echo $data_booking['venue']; ?></td>
	<td><?php echo $data_booking['date_start']; ?>  <?php echo $data_booking['time_start'] ?></td>
	<td><?php echo $data_booking['date_end']; ?>  <?php echo $data_booking['time_end'] ?></td>
</tr>
<?php
}

 ?>