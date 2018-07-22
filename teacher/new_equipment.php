<?php 


include"admin/connection.php";

$get_booking=mysql_query("SELECT * FROM booking WHERE booker='$accountname' And status='Approved'");
while($data_booking=mysql_fetch_array($get_booking)){
$venue=$data_booking['venue'];

$get_equipmentName=mysql_query("SELECT * FROM room WHERE room='$venue' ORDER BY id desc");
while($data_equipmentName=mysql_fetch_array($get_equipmentName)){
    $equipment_name=$data_equipmentName['equipment'];
    $equipment_status=$data_equipmentName['status'];

$equipment_check=mysql_query("SELECT * FROM equipment WHERE id='$equipment_name'");
$data_check=mysql_fetch_array($equipment_check);
$equipment=$data_check['equipment_filename'];
$equipments_name=$data_check['equipment_name'];
$equipment_code=$data_check['equipment_code'];
$equipment_start=$data_check['equipment_start'];
$equipment_end=$data_check['equipment_end'];
    if($equipment_status=="Up To Date"){
?>
    <div class="equipments">
    <img src="images/placeholder-grid.png" style="background-image: url(<?php echo "EquipmentPicture/$equipment" ?>);">
    <span class="equipment-code"><b>QR Code:  </b><?php echo $equipment_code; ?></span>
    <span class="equipment-name"><?php echo $equipments_name; ?></span>
    <span class="equipment-start">Registered: <?php echo $equipment_start; ?></span>
    <span class="equipment-end">Expiration Date: <?php echo $equipment_end; ?></span>
    <form action="" method="POST">
    <button name="equipment_page" type="submit" value="<?php echo $data_check['id']; ?>">View Equipment</button>
    </form>
</div>
<?php
    }else{




    }
}
}

$office_EquipmentAssigned=mysql_query("SELECT * FROM teachers_roomsset WHERE techears_id='$id' And set_unset='Assigned'");
while($data_EquipmentAssigned=mysql_fetch_array($office_EquipmentAssigned)){
    $teachers_room=$data_EquipmentAssigned['teachers_room'];

    $equipment_id=mysql_query("SELECT * FROM room WHERE room='$teachers_room'");
    while($data_EquipmentId=mysql_fetch_array($equipment_id)){
    $equipment_Idroom=$data_EquipmentId['equipment'];
    $set_status=$data_EquipmentId['set_status'];

    if($set_status=="Set"){

        $get_EquipmentSet=mysql_query("SELECT * FROM equipmentset WHERE id='$equipment_Idroom'");
        $data_EquipmentSet=mysql_fetch_array($get_EquipmentSet);
        $equipmentTR=$data_EquipmentSet['img_filename'];
        $equipment_codeTR=$data_EquipmentSet['setQr_code'];

    }else{



    $equipment_pic=mysql_query("SELECT * FROM equipment WHERE id='$equipment_Idroom'");
    $data_EquipmentPic=mysql_fetch_array($equipment_pic);

    $equipment_statusTR=$data_EquipmentPic['status'];
    $equipment_codeTR=$data_EquipmentPic['equipment_code'];
    $equipment_nameTR=$data_EquipmentPic['equipment_name'];
    $equipment_startTR=$data_EquipmentPic['equipment_start'];
    $equipment_endTR=$data_EquipmentPic['equipment_end'];
    $equipmentTR=$data_EquipmentPic['equipment_filename'];
}
?>
    <div class="equipments">
    <img src="images/placeholder-grid.png" style="background-image: url(<?php echo "EquipmentPicture/$equipmentTR" ?>);">
    <span class="equipment-code"><b>QR Code:  </b><?php echo $equipment_codeTR; ?></span>
    <span class="equipment-name"><?php echo $equipment_nameTR; ?></span>
    <span class="equipment-start">Registered: <?php echo $equipment_startTR; ?></span>
    <span class="equipment-end">Expiration Date: <?php echo $equipment_endTR; ?></span>
    <form action="" method="POST">
    <button name="equipment_page" type="submit" value="<?php echo $data_EquipmentPic['id']; ?>">View Equipment</button>
    </form>
</div>
<?php
}
}


 ?>