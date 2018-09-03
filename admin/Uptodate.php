<div class="accounts-container">
    <div class="top-container">
            <strong>Up to Date</strong>
            <div class="notifs-container">
            <strong class="notifs"></strong>
            <span id="count" class="counter"></span>

            <div class="notifs-wrapper">
                <strong>Notifications</strong>

                <table id="myTable">
                    <thead>
                        <th>Name</th>
                        <th>Equipment</th>
                        <th>Message</th>
                    </thead>    

                    <tbody>
                        <?php include"admin/viewreport_table.php"; ?>
                    </tbody>
                </table>

                <form action="" method="POST">
                    <button title="Notifications" name="notifs" type="submit">View All</button>
                </form>
            </div>

        </div>
            <a href="logout.php" class="logout"></a>
    </div>

    <div class="form-container">
    <div class="inner-form-container">

        <div class="table-container" id="wrapper">
            <div class="btndivstyle">
                <input class="search" id='myInput' onkeyup='searchTable()' type='text'
                       placeholder="Search equipments..">
            </div>


            <table id='myTable'>
                <thead>
                <th></th>
                <th>Name</th>
                <th>Status</th>
                </thead>

                <tbody>
                <?php
              include"admin/connection.php";

                $get_image = mysql_query("SELECT * FROM equipment WHERE equipment_status='Up To Date'");
                while ($data_image = mysql_fetch_array($get_image)) {
                    $image_status = $data_image['equipment_status'];
                    $image_filename = $data_image['equipment_filename'];
                    ?>
                    <tr>
                        <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $image_filename . "'>" ?></td>
                        <td><?php echo $data_image['equipment_name']; ?></td>
                        <td><?php echo $data_image['equipment_status']; ?></td>
                    </tr>
                    <?php


                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<script>
    function searchTable() {
        var input, filter, found, table, tr, td, i, j;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                }
            }
            if (found) {
                tr[i].style.display = "";
                found = false;
            } else {
                tr[i].style.display = "none";
            }
        }
    }
</script>



