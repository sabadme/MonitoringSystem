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
	<div>
		<span>Equipment name :<?php echo $equipmentName; ?></span><br>
		<span>Equipment code :<?php echo $equipmentData; ?></span><br>
		<span>Date Start :<?php echo $dateStart ?></span><br>
		<span> Date End :<?php echo $dateEnd ?></span><br>
		<span>Equipment Picture :<?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $image_filename . "'>" ?></span><br>
		<span> Equipment Qr img :<?php echo "<img style='width: 50px; height: 50px' src='QRimg/" . $qrImg . ".png'>" ?></span><br>
		<span> Room :
	    <?php 
	    	if ($equipmentStatus == "Unassigned"){
	    		
	    		$sqlRoom = mysql_query("SELECT * FROM rooms_equipment WHERE equipment = '$equipmentID'");
	    		$dataRoom = mysql_fetch_array($sqlRoom);
	    		$roomName = $dataRoom['room'];
	    		echo "None";
	    	}else{
	    		echo $roomName;

	    		$roomLocation = mysql_query("SELECT * rooms WHERE room ='$roomName'");
	    		$data_roomLocation = mysql_fetch_array($roomLocation);
	    		echo $building = $data_roomLocation['building'];
	    		echo $floor = $data_roomLocation['floor'];
	    	}
	     ?>
	     </span><br>
	     <span>Status :<?php echo $equipmentStatus; ?></span>
		
		
	</div>
	<?php


}

 ?>