
<?php 
if(isset($_REQUEST['dashboard'])){
	include"dashboard.php";
}else if(isset($_REQUEST['adduser'])){
	include"admin/add_user_design.php";
}else if(isset($_REQUEST['add_equipment'])){
	
	include"admin/add_equipment_design.php";
}else if(isset($_REQUEST['Catalog'])){
	
	include"admin/catalog-index.php";
}else if(isset($_REQUEST['generate_code'])){
	include"admin/add_equipment_design.php";
} else if(isset($_REQUEST['equipment_page'])){
	
	include"admin/product_page.php";
}
else{
	include"dashboard.php";
}
?>
<?php 

include"admin/add_user_function.php";
include"admin/add_equipment_function.php";


 ?>