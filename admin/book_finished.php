<div class="booking-container">
    <div class="top-container">
        <strong>Finished</strong>
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
        <th>Date End</th>
        <th>Time Start</th>
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


date_default_timezone_set('Asia/Manila');
 $dd= date('Y-m-d');

date_default_timezone_set('Asia/Manila');
 $tt=date('H:i:A');


        $sql_booking = mysql_query("SELECT * FROM booking WHERE status='Approved' ORDER BY id desc");
        while($dataBooking = mysql_fetch_array($sql_booking)){

            $equipmentID = $dataBooking['equipment'];
             $time = $dataBooking['time_start'];
            $time_e = $dataBooking['time_end'];
             $dateStart = $dataBooking['date_start'];
             $dateEnd = $dataBooking['date_end'];

            //time start
      $timestamp = strtotime($time);



//time end
     $timestamps = strtotime($time_e);

   
        $timeStart = date("H:i:A", $timestamp);

      if($timeStart == "00:00:AM"){
         $timeStart="12:00:AM";
      }else{
        $timeStart;
      }



        $timeEnd = date("H:i:A", $timestamps);

      if($timeEnd == "00:00:AM"){
         $timeEnd="12:00:AM";
    }else{
         $timeEnd;
    }
     
    if($dd > $dateEnd ){

        ?>
            <tr>
                <td data-th="Booker"><?php echo $dataBooking['booker']; ?></td>
                <td data-th="Venue"><?php echo $dataBooking['venue']; ?></td>
                <td data-th="Semester"><?php echo $dataBooking['sem']; ?></td>
                <td data-th="Date Start"><?php echo $dataBooking['date_start']; ?></td>
                <td data-th="Date End"><?php echo $dataBooking['date_end']; ?></td>
                <td data-th="Time Start"><?php echo date("H:i:A", $timestamp); ?></td> 
                <td data-th="Time End"><?php echo date("H:i:A", $timestamps); ?></td>
                <?php 
                if($equipmentID == ""){
                    ?>
                    <td></td>
                    <?php
                }else{
                    ?>
                    <td data-th="Action"><form action="" method="POST"><button name="equipmentBookingView" type="submit" value="<?php echo $equipmentID; ?>">View</button></form></td>
                    <?php
                }
                 ?>
                
                
                
                <td data-th="Status"><?php echo $dataBooking['status']; ?></td>
            </tr>
            <?php

    }else if($dd > $dateEnd && $timeEnd > $tt){
         ?>
            <tr>
                <td data-th="Booker"><?php echo $dataBooking['booker']; ?></td>
                <td data-th="Venue"><?php echo $dataBooking['venue']; ?></td>
                <td data-th="Semester"><?php echo $dataBooking['sem']; ?></td>
                <td data-th="Date Start"><?php echo $dataBooking['date_start']; ?></td>
                <td data-th="Date End"><?php echo $dataBooking['date_end']; ?></td>
                <td data-th="Time Start"><?php echo date("H:i:A", $timestamp); ?></td> 
                <td data-th="Time End"><?php echo date("H:i:A", $timestamps); ?></td>
                <?php 
                if($equipmentID == ""){
                    ?>
                    <td></td>
                    <?php
                }else{
                    ?>
                    <td data-th="Action"><form action="" method="POST"><button name="equipmentBookingView" type="submit" value="<?php echo $equipmentID; ?>">View</button></form></td>
                    <?php
                }
                 ?>
                
                <td data-th="Status"><?php echo $dataBooking['status']; ?></td>
            </tr>
            <?php
    }

    
        }

     ?>
    </tbody>
   
    </table>
    </div>

</div>