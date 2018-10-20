<?php 

include"Contractor/buyItemsFunction.php";

if(isset($_REQUEST['dashboard'])){
	include"Contractor/dashboard.php";
}else if(isset($_REQUEST['supplierList'])){
	include"Contractor/supplierList.php";
}else if(isset($_REQUEST['viewSupplierItems'])){
	include"Contractor/viewSupplierItems.php";
}else if(isset($_REQUEST['buyItems'])){
	include"Contractor/supplierList.php";
}else{
	include"Contractor/dashboard.php";
}

 ?>
