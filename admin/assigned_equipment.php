<?php           
 include"admin/connection.php";

 $sql_broken = mysql_query("SELECT * FROM equipment WHERE status ='Assigned'");
 $dataBroken = mysql_fetch_array($sql_broken);
 $equipmentBroken = $dataBroken['status'];

 if($equipmentBroken == ""){
    ?>
    <script>
        alert("No expired equipment.");
    </script>
    <?php
    include "dashboard.php"; 
 }else{

 ?>
<div class="accounts-container">
    <div class="top-container">
            <strong>Assigned</strong>
            <div class="notifs-container">
            <strong id="adminNotifHide" class="notifs"></strong>
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

            <div class="table-container" id="wrapper">
                <div class="btndivstyle">
                    <input class="search" id='myInput' onkeyup='searchTable()' type='text' placeholder="Search equipments..">
                </div>


                <table id='myTable'>
                    <thead>
                    <th></th>
                    <th>Name</th>
                    <th>Status</th>
                    </thead>

                    <tbody>
                    <?php 

                    $servername ="localhost";
                    $username="root";
                    $password="";
                    $db="monitoringsystemdatabase";


                    $conn =mysql_connect($servername,$username,$password);
                    mysql_select_db($db);

                   
                       $sql_assigned=mysql_query("SELECT * FROM equipment WHERE status='Assigned'");
                       while($data_assigned=mysql_fetch_array($sql_assigned)){
                        $image_filename=$data_assigned['equipment_filename'];
                        ?>
                        <tr>
                            <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $image_filename . "'>" ?></td>
                            <td>
                                <form action="" method="POST">
                                    <button class="equipment-name" title="<?php echo $data_assigned['equipment_name']; ?>" name="equipmentPage"  value="<?php echo $data_assigned['id']; ?>"><?php echo $data_assigned['equipment_name']; ?></button>
                                </form>
                            </td>
                            <td><?php echo $data_assigned['status']; ?></td>

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
</div>
<?php           
}
 ?>

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




