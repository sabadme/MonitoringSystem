<?php 
$servername ="localhost";
$username="root";
$password1="";  
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);

$count="0";
$notification=mysql_query("SELECT * FROM booking WHERE notif='0'");
while($data_notification=mysql_fetch_array($notification)){
	$count++;
}
?>