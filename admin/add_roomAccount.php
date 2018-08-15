
<div class="form-container">
    <div class="inner-form-container">
<?php include"admin/update_roomsModal.php"; ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="imgs"/>
            <input type="text" name="room" placeholder="Room Name">
            <input type="text" name="Building" placeholder="Building" required>
            <select name="floor">
                <option>1st Floor</option>
                <option>2nd Floor</option>
                <option>3rd Floor</option>
                <option>4th Floor</option>
                <option>5th Floor</option>
            </select>
            <button type="submit" name="add_roomAccount_function">SAVE</button>
        </form>

        <br>
        <div class="table-container" id="wrapper">
            <table id='myTable'>
                <thead>
                <th></th>
                <th>Name</th>
                <th>Building</th>
                <th>Floor</th>
                <th></th>
                </thead>

                <tbody>
                <?php include "admin/roomsAdded_table.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
