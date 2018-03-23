<?php 
$accountname=$_SESSION['account'];
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db); 

$get_booking=mysql_query("SELECT * FROM booking WHERE booker='$accountname'");
while($data_booking=mysql_fetch_array($get_booking)){
$venue=$data_booking['venue'];

$get_equipmentName=mysql_query("SELECT * FROM room WHERE room='$venue' ORDER BY id desc");
while($data_equipmentName=mysql_fetch_array($get_equipmentName)){
    $equipment_name=$data_equipmentName['equipment'];
    $equipment_status=$data_equipmentName['status'];

$equipment_check=mysql_query("SELECT * FROM equipment WHERE equipment_name='$equipment_name'");
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

 ?>