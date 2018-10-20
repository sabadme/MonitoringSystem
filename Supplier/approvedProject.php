<?php
if(isset($_REQUEST['approvedProject'])){
$approvedProject = $_REQUEST['approvedProject']; 
include"admin/connect.php";

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}


$update_status="UPDATE project_items SET `status`='Approved' WHERE id='$approvedProject'";

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