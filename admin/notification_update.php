<?php 
if(isset($_REQUEST['notif'])){

$servername ="localhost";
$username="root";
$password1="";  
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);

$check=mysql_query("SELECT * FROM booking WHERE notif='0'");
while($data_check=mysql_fetch_array($check)){
$notif=$data_check['notif'];

if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$notification="1";	

$update_status="UPDATE booking SET `notif`='$notification'";

if (mysql_query($update_status)) {?>


     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}

}
mysql_close($conn);
}
 ?>
