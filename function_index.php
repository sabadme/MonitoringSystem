<?php 
if(isset($_REQUEST['dashboard'])){
	include"dashboard.php";
}else if(isset($_REQUEST['adduser'])){
	include"admin/add_user_design.php";
}
 ?>
