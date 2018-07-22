
<?php
if ($status == "Admin") {
 

 ?>
   
  <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#count").load('admin/notif_count.php')
        },1000);
    });
    </script>

    <nav class="main-nav">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button type="submit" name="dashboard" class="dashboard">DASHBOARD</button>
                </li>
                <li class="manage-btn">
                    
                    <span class="manage">MANAGE</span>
                    <ul>
                        <li>
                            <button class="adduser" name="accounts" type="submit">Accounts</button>
                        </li>
                        <li>
                            <button class="addequipment" name="add_equipment" type="submit">Equipments</button>
                        </li>
                        <li>
                            <button class="rooms" name="rooms" type="submit">Rooms</button>
                        </li>
               
                    </ul>

                    <!--Assigned -->

                </li>
                      <li class="manage-btn">
                    <span class="manage">Assigned Room</span>
                    <ul>
                         <li>
                            <button class="rooms" name="setTeachersRoom" type="submit">Set Teachers Room</button>
                        </li>
                        <li>
                            <button class="rooms" name="ViewTeachers" type="submit">View Teachers Room</button>
                        </li>
                         <li>
                            <button class="rooms" name="unassgnedView" type="submit">View Unassigned</button>
                        </li>
                    </ul>
                </li>

                <li>
                    <button class="notifs" name="notifs" type="submit">Notifications</button>
                    <span id="count" class="counter"></span>


                </li>
                <li class="booking-btn">
                    <button class="booking" name="booking" type="submit">Booking</button>
                     <?php include "admin/notifacation.php"; ?>
                        
                        <?php 
                        if($count == 0){
                        }else{
                            ?>
                              <span class="counter"><?php echo $count; ?></span>
                            <?php
                        }
                         ?>
                        
                        
                        
                      
               

                   
                </li>
                <li>
                    <button class="equips" name="equipment_list" type="submit">Equipment List</button>
                </li>
            
            </ul>
        </form>
    </nav>
    <?php
} else if ($status == "Office") {
    ?>
    <nav class="main-nav">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button type="submit" name="dashboard" class="dashboard" value="<?php echo $id; ?>">DASHBOARD</button>
                </li>
       
                <li>
                    <button class="booking" name="booking" type="submit">Booking</button>
                </li>
                <li>
                    <button type="submit" name="report" class="reports">Report</button>
                </li>
            </ul>
        </form>
    </nav>
    <?php
} else {

    ?>
    <nav class="main-nav">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button type="submit" name="dashboard" class="dashboard" value="<?php echo $id; ?>">DASHBOARD</button>
                </li>
                <li>
                    <button class="booking" name="booking" type="submit">Booking</button>
                </li>
                <li>
                    <button class="reports" name="reports" type="submit">Reports</button>
                </li>
                <li>
                    <button class="reports" name="viewrooms" type="submit" value="<?php echo $id; ?>">Rooms</button>
                </li>

            </ul>
        </form>
    </nav>
    <?php
}
?>
  



