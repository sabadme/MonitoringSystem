<?php 
if(isset($_REQUEST['returnEuipment'])){
	$returnEuipment = $_REQUEST['returnEuipment'];

		    $servername ="localhost";
            $username="root";
            $password="";
            $db="monitoringsystemdatabase";



            $conn =mysql_connect($servername,$username,$password);
            mysql_select_db($db);

       if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

$update_status="UPDATE booking SET `equipmentStatus`='Return' WHERE equipment='$returnEuipment'";

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

 ?>