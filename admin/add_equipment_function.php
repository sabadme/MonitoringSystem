<?php 
if(isset($_REQUEST['save_equipment'])){


		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
		$str="";
	$size = strlen( $chars );
	for( $i = 0; $i < 10; $i++ ) {
		$str.= $chars[ rand( 0, $size - 1 ) ];
	}

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
		move_uploaded_file($tmp,"EquipmentPicture/".$name);
		
	}

	
	$equipment_name=$_REQUEST['equipment_name'];
	$equipment_start=$_REQUEST['equipment_start'];
	$equipment_end=$_REQUEST['equipment_end'];
	$equipmentType =$_REQUEST['equipmentType'];


	 	$qrimg = "<img id='generated_img' src='module_qr/php/qr_img.php?d=$str'>";
    ?><div style="display:none"><?php echo $qrimg;?></div> <?php
    echo "<canvas id='myCanvas' style='visibility:hidden' />";

    echo "

    	<script>
			window.onload = function() {
			    
				    var c=document.getElementById('myCanvas');
			    var ctx=c.getContext('2d');
			    c.width = 130;
			    c.height = 130;
			    var img=document.getElementById('generated_img');
			    ctx.drawImage(img,10,10);

			    var canvas_icon = c.toDataURL('image/png');

				    function success(response){

				    	// alert(response);

				    }

			    $.ajax({
			    	type: 'POST',
			    	url: 'save_generated.php',
			    	data: { image: canvas_icon, img_name: '$str'},
			    	success: success
			    });

			};	
    	</script>

    ";	


$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$status="Unassigned";
$insert=mysql_query("INSERT INTO equipment VALUES(0,'$str','$equipment_name','$equipmentType','$equipment_start','$equipment_end','$name','$status','Up to date','None')");
		if($insert){
			
			?> <script> 
		 alert("Record Successfully Added in UserSubmit table"); </script>
		 <?php 
		}else {
		  echo "Error adding record"; 
		}		



}

 ?>
