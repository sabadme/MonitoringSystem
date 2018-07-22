<?php 
if(isset($_REQUEST['Update_roomStatus'])){

$Update_roomStatus=$_REQUEST['Update_roomStatus'];
$equipment_action=$_REQUEST['equipment_action'];

include"admin/connection.php";
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$update_status="UPDATE room SET `status`='$equipment_action' WHERE id='$Update_roomStatus'";

if (mysql_query($update_status)) {?>
<script>
	alert("UPDATE STATUS");
</script>

     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}

$get_equipmentName=mysql_query("SELECT * FROM room WHERE id='$Update_roomStatus'");
$data_equipmentName=mysql_fetch_array($get_equipmentName);
$equipment_name=$data_equipmentName['equipment'];

$get_equipmentId=mysql_query("SELECT * FROM equipment WHERE id='$equipment_name'");
$data_equipmentId=mysql_fetch_array($get_equipmentId);
$equipment_id=$data_equipmentId['id'];



$update_statuss="UPDATE equipment SET `equipment_status`='$equipment_action' WHERE id='$equipment_id'";

if (mysql_query($update_statuss)) {?>
<script>
	alert("UPDATE STATUS");
</script>

     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}
mysql_close($conn);
}
 ?>