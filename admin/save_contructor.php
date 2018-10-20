<?php 
if(isset($_REQUEST['save_contructor'])){

$firstname = $_REQUEST['firstname'];
$middlename = $_REQUEST['middlename'];
$lastname = $_REQUEST['lastname'];
$status = $_REQUEST['status'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($middlename == ""){
	 $middlename == "None";
}

if($lastname == ""){
	 $lastname == "None";
}


$servername ="localhost";
$username1="root";
$password1="";
$db="db_projcheck";


$conn =mysql_connect($servername,$username1,$password1);
mysql_select_db($db);

$insertMultipleImg=mysql_query("INSERT INTO tbl_users  VALUES(0,'$firstname','$middlename','$lastname','$status','$username','$password','Enable')");
if($insertMultipleImg){
}else{
echo"Error";
}	
}

 ?>