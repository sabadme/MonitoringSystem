<?php 
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);
 ?>
<div class="manage-container room-management">
    <strong class="title">Room Management</strong>

    <input class="search" type="text" placeholder="search room..." />
    <div class="manage-inner-container">

        <div class="table-container" id="wrapper">
            <table>
                <thead>
                <th>Room</th>
                <th>Update</th>
                </thead>

                <tbody>
                       <?php 
                        $get_room=mysql_query("SELECT DISTINCT (room) FROM room ORDER BY id");
                        while($data_room=mysql_fetch_array($get_room)){
                            $rooms=$data_room['room'];

                    ?>
                <tr>
                 
                    <td><?php echo $data_room['room']; ?></td>
                    
                    <td>
                    </td>
                
                    <td>
                        <form action="" method="POST">
                        <button name="view_roomE" type="submit" value="<?php echo $rooms; ?>">View</button>
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