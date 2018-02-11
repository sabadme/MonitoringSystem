
<?php 
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db); 


$dir_path="EquipmentPicture/";
$option="";

if(is_dir($dir_path)){
    $files=opendir($dir_path);
    if($files){
        while(($file_name=readdir($files)) !== FALSE){
            if($file_name != '.' &&  $file_name != '..'){
            
             } 

$profile_display=mysql_query("SELECT * FROM equipment ORDER BY id DESC");
while($data_profile_display=mysql_fetch_array($profile_display)){
     $image=$data_profile_display['equipment_filename'];
     $equipment_code=$data_profile_display['equipment_code'];
     $equipment_name=$data_profile_display['equipment_name'];
     $equipment_start=$data_profile_display['equipment_start'];
     $equipment_end=$data_profile_display['equipment_end'];
     $equipment_id=$data_profile_display['id'];

 
if($image==$file_name){
        
?>
<div class="equipments">
    <img src="images/placeholder-grid.png" style="background-image: url(<?php echo "EquipmentPicture/$image" ?>);">
	<span class="equipment-code"><?php echo $equipment_code; ?></span>
	<span class="equipment-name"><?php echo $equipment_name; ?></span>
	<span class="equipment-start">Registered: <?php echo $equipment_start; ?></span>
	<span class="equipment-end">Expiration Date: <?php echo $equipment_end; ?></span>
    <form action="" method="POST">
	<button name="equipment_page" type="submit" value="<?php echo $equipment_id; ?>">View Equipment</button>
    </form>
</div>
<?php
}
}
}
}
}   
?>