<?php 	

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$sqlEquipment = mysql_query("SELECT `status`,  COUNT(*) AS `count` FROM equipment WHERE status='Unassigned' ORDER BY id desc");
	$dataEquipment = mysql_fetch_array($sqlEquipment);
	$Unassigned = $dataEquipment['count'];

 ?>