<?php 
if(isset($_REQUEST['save_project'])){

	$file=$_FILES['imgs'];
	$name=$_FILES['imgs'] ['name'];
	$size=$_FILES['imgs'] ['size'];	
	$type=$_FILES['imgs'] ['type'];
	$error=$_FILES['imgs'] ['error'];
	$tmp=$_FILES['imgs'] ['tmp_name'];

	if ($error > 0) {
		die("Error uploading File! Code $error.");
	}
	if ($type=="video/avi") {
		die("That Format is not allowed!");
	}
	else{
		move_uploaded_file($tmp,"ProjectPic/".$name);
		
	}

$servername ="localhost";
$username="root";
$password="";
$db="db_projcheck";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$project = $_REQUEST['project'];
$location = $_REQUEST['location'];
$contractor  = $_REQUEST['contractor'];
$datestart  = $_REQUEST['datestart'];
$Contructcompletiondate  = $_REQUEST['Contructcompletiondate'];
$Contructcost  = $_REQUEST['Contructcost'];
$ConstructionConsultant  = $_REQUEST['ConstructionConsultant'];
$ImplementingOffice  = $_REQUEST['ImplementingOffice'];
$Sourcesoffund  = $_REQUEST['Sourcesoffund'];


$insertMultipleImg=mysql_query("INSERT INTO tbl_project  VALUES(0,'$contractor','$datestart','$Contructcompletiondate','$Contructcost','$ConstructionConsultant','$ImplementingOffice','$Sourcesoffund','$name','$project','$location')");
if($insertMultipleImg){
}else{
echo"Error";
}

}

 ?>