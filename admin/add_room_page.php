<div class="manage-container add-room">
    <strong class="title">Room Registration</strong>

    <div class="field">
        <label>Room Name: </label>
        <input type="text" name="roomName" />
    </div>

    <div class="manage-inner-container">
        <div class="table-container" id="wrapper">
            <label>Equipments</label>
            <table>
                <thead>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>

                <tbody>
                <?php
                include"admin/connection.php";

                $equipment_sql=mysql_query("SELECT * FROM equipment ORDER BY id desc");
                while($data_equipment=mysql_fetch_array($equipment_sql)){
                    ?>
                    <tr>
                        <td><?php echo $data_equipment['equipment_name']; ?></td>
                        <td><?php echo $data_equipment['equipment_code']; ?></td>
                        <td>Assigned</td>
                        <td><a href="#">Assign</a></td>
                    </tr>
                    <?php
                }

                ?>
                </tbody>
            </table>
        </div>
    </div>

    <form action="" method="POST">
        <button name="save_room" type="submit">Save</button>
    </form>
</div>