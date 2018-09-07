<?php 
if(isset($_REQUEST['room_page'])){

include"admin/connection.php";
	$room_pageID=$_REQUEST['room_page'];


$dir_path="RoomPicture/";
$option="";

if(is_dir($dir_path)){  
    $files=opendir($dir_path);
    if($files){
        while(($file_name=readdir($files)) !== FALSE){
            if($file_name != '.' &&  $file_name != '..'){
            
             } 

$view=mysql_query("SELECT * FROM rooms WHERE room='$room_pageID'");
$data_view=mysql_fetch_array($view);
     $image=$data_view['img'];
     $roomName =$data_view['room'];
     $roomBuilding =$data_view['building'];
     $roomFloor =$data_view['floor'];


 
if($image==$file_name){
    
?>
<div class="product-page-container">
    <!-- <div class="product-banner-container">
        <img src="images/product-page-banner.jpg" />
    </div> -->

    <div class="product-inner-container">
        <div class="image-container">
            <img src="images/placeholder-product.png" style="background: url(<?php echo "RoomPicture/$image" ?>) no-repeat;">

        </div>
        <div class="product-info-container">
            <span class="equipment-code"><b>Room:</b> <?php echo $roomName.' '.$roomBuilding.' '.$roomFloor; ?></span>
           
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                    </tr>
                </thead>
                <tbody>
                 <?php 

                    $sql_roomEquipment = mysql_query("SELECT * FROM rooms_equipment WHERE room='$roomName'");
                    while($data_roomEquipment =mysql_fetch_array($sql_roomEquipment)){
                      $roomEquipment = $data_roomEquipment['equipment'];

                      $sql_equipment = mysql_query("SELECT * FROM equipment WHERE id='$roomEquipment'");
                      $data_Equipment = mysql_fetch_array($sql_equipment);
                      $imageEquipment=$data_Equipment['equipment_filename'];

                      ?>
                      <tr>
                        <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $imageEquipment . "'>" ?></td>
                          <td><?php echo $data_Equipment['equipment_name']; ?></td>
                          <td><?php echo $data_Equipment['equipment_start']; ?></td>
                          <td><?php echo $data_Equipment['equipment_end']; ?></td>
                      </tr>
                      <?php
                    }

                  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php

}
}
}

}
}


?>

