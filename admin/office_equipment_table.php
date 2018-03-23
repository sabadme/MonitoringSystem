<?php 
if(isset($_REQUEST['office_equipment_table'])){

$office_equipment_table=$_REQUEST['office_equipment_table'];

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);


$room=mysql_query("SELECT * FROM room WHERE room='$office_equipment_table'");
$data_room=mysql_fetch_array($room);
$officename=$data_room['room'];
 ?>
<div class="manage-container room-update with-banner">
    <strong class="title">Update <?php echo $officename; ?> Equipments</strong>

    <input class="search" type="text" placeholder="Search equipments..." />
    <div class="inner-form-container">
 
        <div class="table-container" id="wrapper">
            <table>
                <thead>
                <th>Equipments</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
                </thead>

                <tbody>
                    
                       <?php 
                        $room_equipment=mysql_query("SELECT * FROM room WHERE room='$office_equipment_table' ORDER BY id desc");
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
                            <option value="" disabled selected>Please Select..</option>
                            <option>Up to date</option>
                            <option>Broken</option>
                            <option>Expired</option>
                            <option>Unassigned</option>
                        </select>
                </td>
                <td>
                    
                        <button class="action secondary" name="Update_roomStatus" type="submit" value="<?php echo $room_id; ?>">Update</button>
                         
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