<?php 
if(isset($_REQUEST['equipment_report'])){
    $equipment_report=$_REQUEST['equipment_report'];

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db); 

    $get_equipmentName=mysql_query("SELECT * FROM room WHERE id='$equipment_report'");
    $data_equipmentName=mysql_fetch_array($get_equipmentName);
    $name=$data_equipmentName['equipment'];
    $room=$data_equipmentName['room'];

    $get_equipmentImage=mysql_query("SELECT * FROM equipment WHERE equipment_name='$name'");
    $data_EquipmentImage=mysql_fetch_array($get_equipmentImage);
    $image_filename=$data_EquipmentImage['equipment_filename'];

 ?>

<div class="product-page-container report-form">
        <strong class="title">Create Report</strong>
        <div class="product-inner-container">

            <div class="image-container">
                <?php echo "<img src='EquipmentPicture/".$image_filename."'>" ?>
            </div>

            <div class="product-info-container">
                <span class="equipment-code"><b>Equipment QR/Code:</b> <?php echo $data_EquipmentImage['equipment_code']; ?></span>
                <h1 class="equipment-name"><?php echo $name; ?></h1>
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

 