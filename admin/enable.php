<?php 
if(isset($_REQUEST['enable'])){

$enable=$_REQUEST['enable'];
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$stat="Enabled";

$update_status="UPDATE tbl_login SET `ED_status`='$stat' WHERE id='$enable'";

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