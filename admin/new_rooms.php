
<?php 
include"admin/connect.php";

$dir_path="ProjectPic/";
$option="";

if(is_dir($dir_path)){
    $files=opendir($dir_path);
    if($files){
        while(($file_name=readdir($files)) !== FALSE){
            if($file_name != '.' &&  $file_name != '..'){
            
             } 

$profile_display=mysql_query("SELECT * FROM tbl_project  ORDER BY id DESC");
while($data_profile_display=mysql_fetch_array($profile_display)){
     $image=$data_profile_display['Pic'];
     $companyname=$data_profile_display['contructCost'];

   
     $roomID=$data_profile_display['id'];

 
if($image==$file_name){
        
?>
<div class="target" id="equipments">
    <span ><b>Name:  </b><?php echo $companyname; ?></span>
    <img src="images/placeholder-grid.png" style="background-image: url(<?php echo "ProjectPic/$image" ?>);">
    
    <form action="" method="POST">
    <button name="projectPage" type="submit" value="<?php echo $data_profile_display['id']; ?>">View </button>
    </form>
</div>
<?php
}
}
}
}
}   
?>