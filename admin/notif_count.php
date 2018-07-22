<?php 	
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);	
mysql_select_db($db);	

$sql=mysql_query("SELECT * FROM report WHERE notif_count = '1'"); 

 $rowcount=mysql_num_rows($sql);  
   printf("%d",$rowcount);  

 ?>