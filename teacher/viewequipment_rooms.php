<?php 
if(isset($_REQUEST['viewequipment_rooms'])){

	$viewequipment_rooms=$_REQUEST['viewequipment_rooms'];


  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "monitoringsystemdatabase";


  $conn = mysql_connect($servername, $username, $password);
  mysql_select_db($db);
 ?>

<div class="manage-container with-banner">
	<strong class="title"><?php echo $viewequipment_rooms; ?></strong>

	<div class="manage-inner-container">
	
		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
			</div>
				<table id="myTable">
				<thead>
					<th>Equipment</th>
					<th>Name</th>
					<th>Date Start</th>
					<th>Date End</th>
					
				</thead>

				<tbody>
					<?php 

						$sql_room=mysql_query("SELECT * FROM room WHERE room='$viewequipment_rooms'");
						while($data_room=mysql_fetch_array($sql_room)){
							$equipment_room=$data_room['equipment'];

							$sql_equipment=mysql_query("SELECT * FROM equipment WHERE id='$equipment_room'");
							$data_equipment=mysql_fetch_array($sql_equipment);
							$equipment_pic=$data_equipment['equipment_filename'];

							?>
							<tr>
								 <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $equipment_pic . "'>" ?></td>
								 <td><?php echo $data_equipment['equipment_name']; ?></td>
								  <td><?php echo $data_equipment['equipment_start']; ?></td>
								   <td><?php echo $data_equipment['equipment_end']; ?></td>
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



