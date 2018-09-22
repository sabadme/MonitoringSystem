<?php 
if(isset($_POST)){

	$date = date("Y-m-d");  
	$time = date("H:i:s");

$doneOrnot = $_POST['doneOrnot'];
$reportMessage = $_POST['reportMessage'];
$reportModalValue = $_POST['reportModalValue'];

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

	if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}


$sql_check = mysql_query("SELECT * FROM reportcomment WHERE report_id='$reportModalValue'");
$data_check = mysql_fetch_array($sql_check);
$check =$data_check['report_id'];

if($check == $reportModalValue){


$update_status="UPDATE reportcomment SET `report_status`='$doneOrnot',`report_message`='$reportMessage' WHERE report_id='$reportModalValue'";

if (mysql_query($update_status)) {?>
<script>
	alert("UPDATE STATUS");
</script>

     <?php
} else {?>
    <script>alert("Error"); </script>
    <?php
}
}

$insert=mysql_query("INSERT INTO reportcomment VALUES(0,'$reportModalValue','$doneOrnot','$reportMessage','$date','$time')");
echo mysql_error();     
  
if($insert){ ?> <script> 

 alert("Send"); </script>
 <?php
}else {
  echo "Error adding record"; 
}
mysql_close($conn);

}

 ?>