<?php 
if(isset($_REQUEST['dashboard'])){
	include"Technician/report.php";
}else if(isset($_REQUEST['viewCommentReport'])){
	include"Technician/viewCommentReport.php";
}else{
	include"Technician/report.php";
}

 ?>