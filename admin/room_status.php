<?php 
if(isset($_REQUEST['view_roomE'])){

$view_roomE=$_REQUEST['view_roomE'];

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);


$room=mysql_query("SELECT * FROM room WHERE room='$view_roomE'");
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
                        $room_equipment=mysql_query("SELECT * FROM room WHERE room='$view_roomE' ORDER BY id desc");
                        while($data_roomE=mysql_fetch_array($room_equipment)){
                            $equipment=$data_roomE['equipment'];
                            $room_id=$data_roomE['id'];

                    ?>
                       
                <tr>
             
                    <td><?php echo $data_roomE['equipment']; ?></td>
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