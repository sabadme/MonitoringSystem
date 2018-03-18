<?php 
if(isset($_REQUEST['addoffices'])){

$account=$_REQUEST['account'];
$usernames=$_REQUEST['username'];
$passwords=$_REQUEST['password'];

$servername ="localhost";
$username="root";
$password1="";	
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);

$null="null";
$status="Office";
$under="Admin";
$ed_status="0";
$middlename="null";

$add_office=mysql_query("INSERT INTO tbl_login VALUES(0,'$account','$usernames','$passwords','$null','$null','$status','$under','$ed_status','$middlename')");
echo mysql_error();  
if($add_office){
	
	?> <script> 
 alert("Record Successfully Added "); </script>
 <?php 
}else {
  echo "Error adding record"; 
}

}
 ?>