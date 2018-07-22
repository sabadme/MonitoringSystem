<?php 
if(isset($_REQUEST['view_roomE'])){

$view_roomE=$_REQUEST['view_roomE'];

include"admin/connection.php";


$room=mysql_query("SELECT * FROM room WHERE room='$view_roomE'");
$data_room=mysql_fetch_array($room);
$room_name=$data_room['room'];
 ?>
<div class="manage-container room-management with-banner">
    <strong class="title">ROOM     <?php echo $room_name; ?></strong>

    <input class="search" type="text" placeholder="search room..." />
    <div class="manage-inner-container">
 
        <div class="table-container" id="wrapper">
            <table>
                <thead>
                <th></th>
                <th>Room</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
                </thead>

                <tbody>
                    
                       <?php 
                        $room_equipment=mysql_query("SELECT * FROM room WHERE room='$view_roomE' ORDER BY id desc");
                        while($data_roomE=mysql_fetch_array($room_equipment)){
                            $equipment=$data_roomE['equipment'];
                            $room_id=$data_roomE['id'];
                            $set_status=$data_roomE['set_status'];

                            if($set_status=="Set"){
                                $sql_set=mysql_query("SELECT * FROM equipmentset WHERE id='$equipment'");
                                $data_set=mysql_fetch_array($sql_set);
                                $img_filenames=$data_set['img_filename'];



                            }else{

                               $equipment_name=mysql_query("SELECT * FROM equipment WHERE id='$equipment'");
                            $data_name=mysql_fetch_array($equipment_name);
                            $img_filenames=$data_name['equipment_filename'];
                          
                            }

                    ?>
                       
                <tr>
                   <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $img_filenames . "'>" ?></td>
                    <td><?php echo $data_name['equipment_name']; ?></td>
                    <td><?php echo $data_roomE['status']; ?></td>
                    <td>
                           <form action="" method="POST">
                        <select name="equipment_action">
                             
                            <option>Up to date</option>
                            <option>Broken</option>
                            <option>Expired</option>
                            <option>Unassigned</option>
                        </select>
                </td>
                <td>
                    
                        <button class="action" name="Update_roomStatus" type="submit" value="<?php echo $room_id; ?>">Update</button>
                         
                          </form>
                    </td>
               
                </tr>
                   
                  <?php 
                    }
                    ?>
            
                </tbody>
            </table>
        </div>

        <div class="banner-container">
            <img src="images/message-banner.jpg" alt="Banner">
        </div>
       
    </div>
</div>
<?php 
}
 ?>