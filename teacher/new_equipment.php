
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

$getRooms=mysql_query("SELECT * FROM rooms ORDER BY id DESC");
while($dataRooms=mysql_fetch_array($getRooms)){
     $image=$dataRooms['img'];
     $building=$dataRooms['building'];
     $floor=$dataRooms['floor'];
     $roomName=$dataRooms['room'];
   
     $roomID=$dataRooms['id'];

$sql_techerRoom=mysql_query( "SELECT * FROM teachers_roomsset WHERE techears_id='$id'");
$dataTeacherRoom=mysql_fetch_array($sql_techerRoom);
  $techerRoom=$dataTeacherRoom['teachers_room'];

 if($roomName == $techerRoom){
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
}   
?>