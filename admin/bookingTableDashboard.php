<?php 
        $servername ="localhost";
        $username="root";
        $password="";
        $db="monitoringsystemdatabase";


        $conn =mysql_connect($servername,$username,$password);
        mysql_select_db($db);


        $sql_booking = mysql_query("SELECT * FROM booking ORDER BY id desc");
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