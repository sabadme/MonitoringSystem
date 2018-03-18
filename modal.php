<?php 
if(isset($_REQUEST['equipment_report'])){  
    $equipment_report=$_REQUEST['equipment_report'];

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

    $equipment_reportNAME=mysql_query("SELECT * FROM room WHERE id='$equipment_report'");
    $data_reportNAME=mysql_fetch_array($equipment_reportNAME);
    $name=$data_reportNAME['equipment'];

    $get_equipment=mysql_query("SELECT * FROM equipment WHERE equipment_name='$name'");
    $data_equipment=mysql_fetch_array($get_equipment);
    $equipment_filename=$data_equipment['equipment_filename'];


 ?>
 <div class="manage-container">
    <strong class="title">Create Report</strong>

    <div class="manage-inner-container">
    
        <div class="table-container" id="wrapper">
            <div class="btndivstyle">
                <h1><?php echo $name; ?></h1>
                <h1><?php echo $data_reportNAME['room']; ?></h1>
                <?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$equipment_filename."'>" ?>
        <form action="" method="POST">
            <textarea placeholder="Status/Problem" name="messagereport"></textarea>
            <button type="submit" name="send_report" value="<?php echo $equipment_report; ?>">Send</button>
        </form>
        </div>
    </div>
</div>
<?php 
}
 ?>