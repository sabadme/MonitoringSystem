<?php 
if(isset($_REQUEST['Update_assigned'])){
	$Update_assigned=$_REQUEST['Update_assigned'];

include"admin/connection.php";

$date = date('m/d/Y h:i:s a', time());

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$stat="Enabled";

$update_status="UPDATE teachers_roomsset SET `set_unset`='Assigned',`unassigned_date`='$date' WHERE id='$Update_assigned'";

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