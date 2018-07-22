<?php 

$status=$_SESSION['status'];
include"admin/connection.php";

$booking=mysql_query("SELECT DISTINCT `booker`,`date_start`,`date_end`,`time_start`,`time_end`,`venue`,`sem` FROM booking ORDER BY id desc");
while($data_booking=mysql_fetch_array($booking)){
    $booker=$data_booking['booker'];
    $date=$data_booking['date_start'];
    $date_e=$data_booking['date_end'];
    $time=$data_booking['time_start'];
    $time_e=$data_booking['time_end'];


    $booking_status=mysql_query("SELECT * FROM booking WHERE booker='$booker' And date_start='$date' And date_end='$date_e' And time_start='$time' And time_end='$time_e'");
    $data_status=mysql_fetch_array($booking_status);
    $statuss=$data_status['status'];
    $booker_name=$data_status['booker'];

    $sql_bookerName=mysql_query("SELECT * FROM tbl_login WHERE id='$booker_name'");
    $data_bookerName=mysql_fetch_array($sql_bookerName);

    ?>
    <tr>
        <td><?php echo $data_bookerName['account']; ?></td>
        <td><?php echo $data_booking['venue']; ?></td>
        <td><?php echo $data_booking['sem']; ?></td>
        <td><?php echo $data_booking['date_start']; ?></td>
        <td><?php echo $data_booking['date_end']; ?></td>
        <td><?php echo date('H:i:s',strtotime($data_booking['time_start'])); ?></td>
        <td><?php echo date('H:i:s',strtotime($data_booking['time_end'])); ?></td>
        <td>
            <ul>
            <?php
            $venue=mysql_query("SELECT * FROM booking  WHERE booker='$booker' And date_start='$date' And date_end='$date_e' And time_start='$time' And time_end='$time_e'");
            while($data_venue=mysql_fetch_array($venue)){
            ?>
            <li><?php echo $data_venue['equipment']; ?></li>
            <?php } ?>
                </ul>
        </td>
       
        <?php 
        if($statuss=="Pending" And $status=="Admin"){
            ?>
            <td><form action="" method="POST"><button class="action" type="submit" name="approve_booking" value="<?php echo $data_status['id']; ?>">Approve</button></form></td>
            <?php
        }else{
            ?>
            <td><?php echo $statuss; ?></td>
            <?php
        }
         ?>
        
        
        
       
    </tr>
    <?php
}

 ?>
