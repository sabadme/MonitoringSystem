<?php 
if(isset($_REQUEST['equipment_report'])){
    $equipment_report=$_REQUEST['equipment_report'];

include"admin/connection.php";

    $sql_booking = mysql_query("SELECT * FROM booking WHERE equipment='$equipment_report'");
    $data_booking = mysql_fetch_array($sql_booking);
    $equipmentBooking_ID = $data_booking['equipment'];

    if($equipmentBooking_ID == $equipment_report){

        $sqlEquipment = mysql_query("SELECT * FROM equipment WHERE id='$equipmentBooking_ID'");
        $data_equipment = mysql_fetch_array($sqlEquipment);
        $image_filename = $data_equipment['equipment_filename'];
         $qr_value=$data_equipment['equipment_code'];
         $equipment_name=$data_equipment['equipment_name'];
         $room = $data_booking['venue'];

    }else{

    $get_equipmentName=mysql_query("SELECT * FROM rooms_equipment WHERE equipment='$equipment_report'");
    $data_equipmentName=mysql_fetch_array($get_equipmentName);
    $name=$data_equipmentName['equipment'];
    $room=$data_equipmentName['room'];
    $set_status=$data_equipmentName['set_status'];

    if($set_status=="Set"){

        $equipment_Set=mysql_query("SELECT * FROM equipmentset WHERE id='$name'");
        $dataEquipment_set=mysql_fetch_array($equipment_Set);
        $image_filename=$dataEquipment_set['img_filename'];
        $qr_value=$dataEquipment_set['setQr_code'];
        $equipment_name = $dataEquipment_set['set_name'];

    }else{

    $get_equipmentImage=mysql_query("SELECT * FROM equipment WHERE id='$name'");
    $data_EquipmentImage=mysql_fetch_array($get_equipmentImage);
    $image_filename=$data_EquipmentImage['equipment_filename'];
    $equipment_name=$data_EquipmentImage['equipment_name'];
    $qr_value=$data_EquipmentImage['equipment_code'];

    }
}





 ?>

<div class="product-page-container report-form">
        <strong class="title">Create Report</strong>
        <div class="product-inner-container">

            <div class="image-container">
                <?php echo "<img src='EquipmentPicture/".$image_filename."'>" ?>
            </div>

            <div class="product-info-container">
                <span class="equipment-code"><b>Equipment QR/Code:</b> <?php echo $qr_value; ?></span>
                <h1 class="equipment-name"><?php echo $equipment_name; ?></h1>
                 <h1><?php echo $room; ?></h1>

                <form action="" method="POST">
                    <textarea placeholder="Status/Problem" name="messagereport"></textarea>
                    <button style="margin-bottom: 10px;" class="action" type="submit" name="send_report" value="<?php echo $equipment_report; ?>">Send</button>
                </form>
            </div>

        </div>
    </div>

<?php 
}
 ?>

 