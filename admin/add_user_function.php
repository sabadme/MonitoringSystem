<?php 
if(isset($_REQUEST['add_user'])){

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$user=$_REQUEST['username'];
$pass=$_REQUEST['password'];
$account="User";

$servername ="localhost";
$username="root";
$password1="";	
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password1);
mysql_select_db($db);

$adduser=mysql_query("INSERT INTO tbl_login VALUES(0,'$user','$user','$pass','$firstname','$lastname')");
echo mysql_error();     
  
if($adduser){ ?> <script> 

 alert("Record Successfully Added"); </script>
 <?php
}else {
  echo "Error adding record"; 
}
}
 ?>