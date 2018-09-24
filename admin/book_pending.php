<div class="booking-container">
    <div class="top-container">
        <strong>Pending</strong>
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
    <div>

    <table>
    <thead>
    <tr>
        <th>Booker</th>
        <th>Venue</th>
        <th>Semester</th>
        <th>Date Start</th>
        <th>Time Start</th>
        <th>Date End</th>
        <th>Time End</th>
        <th>Equipments</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
         <?php 
        $servername ="localhost";
        $username="root";
        $password="";
        $db="monitoringsystemdatabase";


        $conn =mysql_connect($servername,$username,$password);
        mysql_select_db($db);


        $sql_booking = mysql_query("SELECT * FROM booking WHERE status='Pending' ORDER BY id desc");
        while($dataBooking = mysql_fetch_array($sql_booking)){

            $equipmentID = $dataBooking['equipment'];
            $time = $dataBooking['time_start'];
            $time_e = $dataBooking['time_end'];

            //time start
     $timestamp = strtotime($time);


//time end
     $timestamps = strtotime($time_e);

       
            ?>
            <tr>
                <td><?php echo $dataBooking['booker']; ?></td>
                <td><?php echo $dataBooking['venue']; ?></td>
                <td><?php echo $dataBooking['sem']; ?></td>
                <td><?php echo $dataBooking['date_start']; ?></td>
                <td><?php echo date("H:i:A", $timestamp); ?></td>
                <td><?php echo $dataBooking['date_end']; ?></td>
                <td><?php echo date("H:i:A", $timestamps); ?></td>
                <?php 
                if($equipmentID == ""){
                    ?>
                    <td></td>
                    <?php
                }else{
                    ?>
                    <td><form action="" method="POST"><button name="equipmentBookingView" type="submit" value="<?php echo $equipmentID; ?>">View</button></form></td>
                    <?php
                }
                 ?>
                
                
                
                <td><?php echo $dataBooking['status']; ?></td>
            </tr>
            <?php
        }

     ?>
    </tbody>
   
    </table>
    </div>

</div>