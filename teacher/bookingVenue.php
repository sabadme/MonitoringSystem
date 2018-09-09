<?php 

include"admin/connection.php";
$count = "0";
$sql_booking = mysql_query("SELECT DISTINCT booker,venue,sem,date_start,date_end,status FROM booking WHERE booker='$accountname'");
while($data_booking = mysql_fetch_array($sql_booking)){
	$bookingVenue = $data_booking['venue'];
	$count++;

	$sql_venue = mysql_query("SELECT * FROM rooms WHERE room='$bookingVenue'");
	$data_venue = mysql_fetch_array($sql_venue);

	$building = $data_venue['building'];
	$floor = $data_venue['floor'];
	$venueImg = $data_venue['img'];

	?>
	<tr>
		<td><?php echo "<img style='width: 50px; height: 50px' src='RoomPicture/".$venueImg."'>" ?></td>
		<td><?php echo $bookingVenue; ?></td>
		<td><?php echo $building; ?></td>
		<td><?php echo $floor; ?></td>
		<td><?php echo $data_booking['status']; ?></td>
		<td><button class="equipmentModal" id="<?php echo $count; ?>" value="<?php echo $bookingVenue; ?>">View</button></td>
		
	</tr>
	<?php
}


 ?>
 <?php 	
  $count;
$scriptcount="0";
for (	$i=0; 	$i <$count ; 	$i++) { 
	 $scriptcount++;

	?>

<script>

	var modal = document.getElementById('myModal');

	var btn = document.getElementById(<?php echo $scriptcount; ?>);

	var close = document.getElementsByClassName("close")[0];

	$(btn).click(function(){
		$(modal).css('display', 'block');

		var equipment  = $(this).attr("value");

            $.ajax({
                url : "teacher/modal_teacher.php",
                method : "POST",
                data : 'equipment=' + equipment,
            });


	});

	$(close).click(function(){
		$(modal).css('display', 'none');
	});

	$(window).click(function(){
		if (event.target == modal) {
	        $(modal).css('display', 'none');
	    }
	});

</script>

<?php
}


  ?>