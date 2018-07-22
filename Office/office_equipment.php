<?php 
include"admin/connection.php"; 

$get_equipmentName=mysql_query("SELECT * FROM room WHERE room='$accountname' ORDER BY id desc");
while($data_equipmentName=mysql_fetch_array($get_equipmentName)){
	$equipment_name=$data_equipmentName['equipment'];
	$equipment_status=$data_equipmentName['status'];
	$set_status=$data_equipmentName['set_status'];

if($equipment_status=="Broken"  || $equipment_status=="Expired"){

	}else{

	if($set_status=="Set"){

		$sql_equipmentSet=mysql_query("SELECT * FROM equipmentset WHERE id='$equipment_name'");
		$data_equipmentSet=mysql_fetch_array($sql_equipmentSet);
		$equipment=$data_equipmentSet['img_filename'];
		$equipments_name=$data_equipmentSet['set_name'];
		$EquipmentID=$data_equipmentSet['id'];

	}else{


$equipment_check=mysql_query("SELECT * FROM equipment WHERE id='$equipment_name'");
$data_check=mysql_fetch_array($equipment_check);
$equipment=$data_check['equipment_filename'];
$equipments_name=$data_check['equipment_name'];
$equipment_code=$data_check['equipment_code'];
$equipment_start=$data_check['equipment_start'];
$equipment_end=$data_check['equipment_end'];
$EquipmentID=$data_check['id'];
}
	


?>
	<div class="equipments">
    <img src="images/placeholder-grid.png" style="background-image: url(<?php echo "EquipmentPicture/$equipment" ?>);">
	<span class="equipment-code"><b>QR Code:  </b><?php echo $equipment_code; ?></span>
	<span class="equipment-name"><?php echo $equipments_name; ?></span>
	<span class="equipment-start">Registered: <?php echo $equipment_start; ?></span>
	<span class="equipment-end">Expiration Date: <?php echo $equipment_end; ?></span>
    <form action="" method="POST">
	<button name="equipment_page" type="submit" value="<?php echo $EquipmentID; ?>">View Equipment</button>
    </form>
</div>
<?php

}
}

 ?>