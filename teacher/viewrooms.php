<?php 
if(isset($_REQUEST['viewrooms'])){
	$viewrooms=$_REQUEST['viewrooms']

 ?>

<div class="manage-container with-banner">
	<strong class="title">ROOMS</strong>

	<div class="manage-inner-container">
	
		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
			</div>
				<table id="myTable">
				<thead>
					<th>Room</th>
				
					<th></th>
					
				</thead>

				<tbody>
<?php 

include"admin/connection.php";

$sql_rooms=mysql_query("SELECT * FROM teachers_roomsset WHERE techears_id='$viewrooms' And set_unset='Assigned'");
while($data_rooms=mysql_fetch_array($sql_rooms)){
$teacher_rooms=$data_rooms['teachers_room'];

$roomEquipment=mysql_query("SELECT * FROM room WHERE room='$teacher_rooms'");
$dataEquipment=mysql_fetch_array($roomEquipment);


	?>
	<tr>
		<td><?php echo $data_rooms['teachers_room']; ?></td>
		<td><form action="" method="POST"><button class="action" name="viewequipment_rooms" value="<?php echo  $data_rooms['teachers_room']; ?>">View</button></form></td>
	</tr>
	<?php
}


					 ?>
				</tbody>
			</table>
		</div>
	</div>
</div> 
<?php 
}
 ?>


