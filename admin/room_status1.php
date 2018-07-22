<?php 
if(isset($_REQUEST['Update_roomStatus'])){

$Update_roomStatus=$_REQUEST['Update_roomStatus'];

include"admin/connection.php";


$room=mysql_query("SELECT * FROM room WHERE id='$Update_roomStatus'");
$data_room=mysql_fetch_array($room);
$room_name=$data_room['room'];
 ?>
<div class="manage-container room-management">
    <strong class="title">ROOM     <?php echo $room_name; ?></strong>

    <input class="search" type="text" placeholder="search room..." />
    <div class="manage-inner-container">
 
        <div class="table-container" id="wrapper">
            <table>
                <thead>
                <th>Room</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
                </thead>

                <tbody>
                    
                       <?php 
                        $room_equipment=mysql_query("SELECT * FROM room WHERE room='$room_name' ORDER BY id desc");
                        while($data_roomE=mysql_fetch_array($room_equipment)){
                            $equipment=$data_roomE['equipment'];
                            $room_id=$data_roomE['id'];

                            $equipment_name=mysql_query("SELECT * FROM equipment WHERE id='$equipment'");
                            $data_name=mysql_fetch_array($equipment_name);


                    ?>
                       
                <tr>
                
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
                    
                        <button name="Update_roomStatus" type="submit" value="<?php echo $room_id; ?>">Update</button>
                         
                       </form>
                    </td>
                  
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
 ?>