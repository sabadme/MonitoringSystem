<?php 
if(isset($_REQUEST['save_equipment'])){
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

	$equipment_code=$_REQUEST['equipment_code'];
	$equipment_name=$_REQUEST['equipment_name'];
	$equipment_start=$_REQUEST['equipment_start'];
	$equipment_end=$_REQUEST['equipment_end'];

    $qrimg = "<img id='generated_img' src='module_qr/php/qr_img.php?d=$equipment_code'>";

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
			    	data: { image: canvas_icon, img_name: '$equipment_code'},
			    	success: success
			    });

			};	
    	</script>

    ";
include"admin/connection.php";

$upload_image=mysql_query("INSERT INTO equipment VALUES(0,'$equipment_code','$equipment_name','$equipment_start','$equipment_end','$name')");
echo mysql_error();  
if($upload_image){
	
	?> <script> 
 alert("Record Successfully Added in UserSubmit table"); </script>
 <?php 
}else {
  echo "Error adding record"; 
}


}

 ?>