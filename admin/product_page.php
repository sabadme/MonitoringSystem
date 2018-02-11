<?php 
if(isset($_REQUEST['equipment_page'])){

include"admin/connection.php";
	$equipment_id=$_REQUEST['equipment_page'];


$dir_path="EquipmentPicture/";
$option="";

if(is_dir($dir_path)){
    $files=opendir($dir_path);
    if($files){
        while(($file_name=readdir($files)) !== FALSE){
            if($file_name != '.' &&  $file_name != '..'){
            
             } 

$view=mysql_query("SELECT * FROM equipment WHERE `id`='$equipment_id'");
$data_view=mysql_fetch_array($view);
     $image=$data_view['equipment_filename'];
     $equipment_code=$data_view['equipment_code'];
     $equipment_name=$data_view['equipment_name'];
     $equipment_start=$data_view['equipment_start'];
     $equipment_end=$data_view['equipment_end'];
     

 
if($image==$file_name){
    
?>
<div class="product-page-container">
	<div class="image-container">
        <img src="images/placeholder-product.png" style="background: url(<?php echo "EquipmentPicture/$image" ?>) no-repeat;">
    	
    </div>
    <div class="product-info-container">
		<span class="equipment-code"><?php echo $equipment_code; ?></span>
		<span class="equipment-name"><?php echo $equipment_name; ?></span>
		<span class="equipment-start">Registered: <?php echo $equipment_start; ?></span>
		<span class="equipment-end">Expiration Date: <?php echo $equipment_end; ?></span>
    </div>
</div>
<?php

}
}
}

}  

}
?>