<?php 
if(isset($_REQUEST['Update_roomStatus'])){

$Update_roomStatus=$_REQUEST['Update_roomStatus'];
$equipment_action=$_REQUEST['equipment_action'];

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

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
mysql_close($conn);
}
 ?>