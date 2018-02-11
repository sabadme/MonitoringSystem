<?php 
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db); 

?>
<div class="catalog-container">
<?php

$result_per_page=10;

$dir_path="EquipmentPicture/";
$option="";

$profile_display=mysql_query("SELECT * FROM equipment");
$result=mysql_num_rows($profile_display);   

 $number_of_pages=ceil($result / $result_per_page);  

 

if(!isset($_GET['page'])){
    $page=1;
}else{
    $page=$_GET['page'];
}


 $this_page_first_result=($page-1)*$result_per_page;


for ($page=1; $page <= $number_of_pages; $page++) { 
    echo '<a href="catalog-index.php?page='. $page .'">' .$page . '</a>';
}

if(is_dir($dir_path)){
    $files=opendir($dir_path);
    if($files){
        while(($file_name=readdir($files)) !== FALSE){
            if($file_name != '.' &&  $file_name != '..'){
            
             } 



$sql=mysql_query("SELECT * FROM equipment LIMIT $this_page_first_result,$result_per_page");
while($row=mysql_fetch_array($sql)){
    $equipment_code=$row['equipment_code'];
    $equipment_name=$row['equipment_name'];
    $equipment_start=$row['equipment_start'];
    $equipment_end=$row['equipment_end'];
    $image=$row['equipment_filename'];

    if($image==$file_name){
    
?>
<div class="equipments">
    <img src="images/placeholder-grid.png" style="background-image: url(<?php echo "EquipmentPicture/$image" ?>);">
    <span class="equipment-code"><?php echo $equipment_code; ?></span>
    <span class="equipment-name"><?php echo $equipment_name; ?></span>
    <span class="equipment-start">Registered: <?php echo $equipment_start; ?></span>
    <span class="equipment-end">Expiration Date: <?php echo $equipment_end; ?></span>
    <form action="" method="POST">
    <button name="equipment_page" type="submit" value="<?php echo $catalog_id; ?>">View Equipment</button>
    </form>
</div>
<?php
}
}


}
}
?>
</div>
<?php
}  

?>