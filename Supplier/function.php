<?php 

include"Supplier/itemFunction.php";
include"Supplier/approvedProject.php";

if(isset($_REQUEST['addItems'])){
	include"Supplier/items.php";
}else if(isset($_REQUEST['save_item'])){
	include"Supplier/items.php";
}else if(isset($_REQUEST['dashboard'])){
	include"Supplier/dashboard.php";
}else if(isset($_REQUEST['approvedProject'])){
	include"Supplier/dashboard.php";
}else if(isset($_REQUEST['projectApprovedList'])){
	include"Supplier/projectApprovedList.php";	
}

 ?>