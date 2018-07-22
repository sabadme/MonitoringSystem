

 <?php 
if(isset($_REQUEST['saveGroupEquipementSet'])){

	$numbersOfEquipemnt=$_REQUEST['numbersOfEquipemnt'];

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


	for( $j=0; $j< $numbersOfEquipemnt; $j++){

		//generate QR code
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

		$size = strlen( $chars );
		for( $i = 0; $i < 10; $i++ ) {
			$str.= $chars[ rand( 0, $size - 1 ) ];
		}
		 $j."---".$str." test<br>";

			$equipment_name=$_REQUEST['equipment_name'];
			$equipment_start=$_REQUEST['equipment_start'];
			$equipment_end=$_REQUEST['equipment_end'];

		echo mysql_error();  
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
			    	url: 'GSFsave_generated.php',
			    	data: { image: canvas_icon, img_name: '$str'},
			    	success: success
			    });

			};	
    	</script>

    ";
		include"admin/connection.php";

		$status="Unassigned";

		$upload_image=mysql_query("INSERT INTO equipment VALUES(0,'$str','$equipment_name','$equipment_start','$equipment_end','$name','$status','Up To Date','None')");
		echo mysql_error();  
		if($upload_image){
			
			?> <script> 
		 alert("Record Successfully Added in UserSubmit table"); </script>
		 <?php 
		}else {
		  echo "Error adding record"; 
		}		

		$str = "";
		//end of QR code


	}

}
?>