<?php 
if(isset($_REQUEST['save_item'])){
	$item = $_REQUEST['item'];
	$brand = $_REQUEST['brand'];
	$price = $_REQUEST['price'];

	include"admin/connect.php";

	$insertMultipleImg=mysql_query("INSERT INTO items VALUES(0,'$item','$brand','$price')");
	if($insertMultipleImg){
	}else{
	echo"Error";
	}


}

 ?>