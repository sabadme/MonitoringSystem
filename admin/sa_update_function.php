<?php 
if(isset($_REQUEST['sa_update_function'])){
	$sa_update_function=$_REQUEST['sa_update_function'];

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$status=$_REQUEST['status'];
$middlename=$_REQUEST['middlename'];
$FL=$firstname.' '.$lastname;

$servername ="localhost";
$username="root";
$password1="";	
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);


if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$update_status="UPDATE tbl_login SET `account`='$FL',`firstname`='$firstname',`middlename`='$middlename',`Status`='$status',`lastname`='$lastname' WHERE id='$sa_update_function'";

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