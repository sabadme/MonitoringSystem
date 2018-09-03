<?php 
if(isset($_REQUEST['equipmentLocation'])){
	$equipmentData = $_REQUEST['equipmentData'];

	include"admin/connection.php";	


	$viewEquipment = mysql_query("SELECT * FROM equipment WHERE equipment_code = '$equipmentData'");
	$dataEquipment = mysql_fetch_array($viewEquipment);
	 $equipmentName = $dataEquipment['equipment_name'];
	 $image_filename = $dataEquipment['equipment_filename'];
	 $qrImg = $dataEquipment['equipment_code'];
	 $dateStart = $dataEquipment['equipment_start'];
	 $dateEnd = $dataEquipment['equipment_end'];
	 $equipmentStatus = $dataEquipment['status'];
	 $equipmentID = $dataEquipment['id'];
	?>


<div class="equipments-container">
	<div class="top-container">
    <strong><?php echo $equipmentName; ?></strong>

    <div class="notifs-container">
        <strong class="notifs"></strong>
        <span id="count" class="counter"></span>

        <div class="notifs-wrapper">
            <strong>Notifications</strong>

            <table id="myTable">
                <thead>
                    <th>Name</th>
                    <th>Equipment</th>
                    <th>Message</th>
                </thead>    

                <tbody>
                    <?php include"admin/viewreport_table.php"; ?>
                </tbody>
            </table>

            <form action="" method="POST">
                <button title="Notifications" name="notifs" type="submit">View All</button>
            </form>
        </div>

    </div>
    <a href="logout.php" class="logout"></a>
</div>


	<div class="EQ-Page">
		<div class="EQ-Container">
			<div class="EQ-Img">
				<?php echo "<img src='EquipmentPicture/" . $image_filename . "'>" ?>
			</div>
			<div class="EQ-Date">
				<div>
					<i>Date Start</i>
					<span><?php echo $dateStart ?></span>
				</div>

				<div>
					<i>Date End</i>
					<span><?php echo $dateEnd ?></span>
				</div>
			</div>
		</div>

	<div class="EQ-Info">
		<span> Room:
			<?php if ($equipmentStatus == "Unassigned"){

			$sqlRoom = mysql_query("SELECT * FROM rooms_equipment WHERE equipment = '$equipmentID'");
			$dataRoom = mysql_fetch_array($sqlRoom);
			$roomName = $dataRoom['room'];
			echo "None";

			} else {
				echo $roomName;
				$roomLocation = mysql_query("SELECT * rooms WHERE room ='$roomName'");
				$data_roomLocation = mysql_fetch_array($roomLocation);
				echo $building = $data_roomLocation['building'];
				echo $floor = $data_roomLocation['floor'];
			}
			?>
		</span>

		<span><?php echo $equipmentName; ?></span>

		<span><?php echo "<img src='QRimg/" . $qrImg . ".png'>" ?></span>

		<span><i><?php echo $equipmentData; ?></i></span>


		<span class="status"><?php echo $equipmentStatus; ?></span>

	</div>
	</div>
</div>
<?php
}
?>