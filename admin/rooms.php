<?php 
include"admin/connection.php";
 ?>
<div class="form-container">
    <div class="inner-form-container">

        <div class="table-container" id="wrapper">
            <input class="search" type="text" placeholder="Search rooms..." />

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

                            $office=mysql_query("SELECT * FROM tbl_login WHERE account='$rooms'");
                            $data_office=mysql_fetch_array($office);
                            $office_name=$data_office['account'];

                            if($rooms == $office_name){
                             
                            }else{

                    ?>
                <tr>
                 
                    <td><?php echo $data_room['room']; ?></td>
                
                    <td>
                        <form action="" method="POST">
                        <button class="action secondary" name="view_roomE" type="submit" value="<?php echo $rooms; ?>">View</button>
                        </form>
                    </td>
                  
                </tr>
                  <?php 
                  }

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>