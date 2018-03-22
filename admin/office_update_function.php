<?php 
if(isset($_REQUEST['office_update_function'])){
$office_update_function=$_REQUEST['office_update_function'];
$account=$_REQUEST['account'];

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$update_status="UPDATE tbl_login SET `account`='$account' WHERE id='$office_update_function'";

if (mysql_query($update_status)) {?>
<script>
	alert("UPDATE STATUS");
</script>

     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}


}
 ?>


 