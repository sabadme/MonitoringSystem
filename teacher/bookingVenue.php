<?php 

include"admin/connection.php";

$sql_booking = mysql_query("SELECT DISTINCT booker,venue,sem,date_start,date_end,status FROM booking WHERE booker='$accountname'");
while($data_booking = mysql_fetch_array($sql_booking)){
	$bookingVenue = $data_booking['venue'];

	$sql_venue = mysql_query("SELECT * FROM rooms WHERE room='$bookingVenue'");
	$data_venue = mysql_fetch_array($sql_venue);

	$building = $data_venue['building'];
	$floor = $data_venue['floor'];
	$venueImg = $data_venue['img'];

	?>
	<tr>
		<td><?php echo "<img style='object-fit: contain; width: 150px;' src='RoomPicture/".$venueImg."'>" ?></td>
		<td><?php echo $bookingVenue; ?></td>
		<td><?php echo $building; ?></td>
		<td><?php echo $floor; ?></td>
		<td><?php echo $data_booking['status']; ?></td>
		<td><form action="" method="POST"><button type="submit" name="viewEquipmentBooking" value="<?php echo $bookingVenue; ?>">View</button></form></td>
		
	</tr>
	<?php
}


 ?>
