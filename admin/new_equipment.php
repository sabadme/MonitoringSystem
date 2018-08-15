
<?php 
include"admin/connection.php";


$dir_path="RoomPicture/";
$option="";

if(is_dir($dir_path)){
    $files=opendir($dir_path);
    if($files){
        while(($file_name=readdir($files)) !== FALSE){
            if($file_name != '.' &&  $file_name != '..'){
            
             } 

$profile_display=mysql_query("SELECT * FROM rooms ORDER BY id DESC");
while($data_profile_display=mysql_fetch_array($profile_display)){
     $image=$data_profile_display['img'];
     $building=$data_profile_display['building'];
     $floor=$data_profile_display['floor'];
     $roomName=$data_profile_display['room'];
   
     $roomID=$data_profile_display['id'];

 
if($image==$file_name){
        
?>
<div class="target" id="equipments">
    <img src="images/placeholder-grid.png" style="background-image: url(<?php echo "RoomPicture/$image" ?>);">
    <span class="equipment-code"><b>Building:  </b><?php echo $building; ?></span>
    <span class="equipment-code"><b>Floor:  </b><?php echo $floor; ?></span>
    <span class="equipment-name"><?php echo $roomName; ?></span>
    <form action="" method="POST">
    <button name="room_page" type="submit" value="<?php echo $roomID; ?>">View Equipment</button>
    </form>
</div>
<?php
}
}
}
}
}   
?>