
<?php
if ($status == "Admin") {


 ?>



    <nav class="main-nav">

        <img src="images/monitor.png">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button title="Dashboard" type="submit" name="dashboard" class="dashboard">
                    <span>Dashboard</span>
                    </button>
                </li>
                <li>
                     <button title="QR Scanner" class="scanner" name="openScanner"> <span>QR Scanner</span></button>
                </li>
                <li class="parent">
                    <!-- <button title="Accounts" class="adduser" name="accounts" type="submit"><span>Accounts</span></button> -->
                    <span title="Accounts" class="adduser" name="accounts">Accounts</span>

                        <ul>
                            <li><button title="Users" class="users" name="adduser" type="submit"><span>Users</span></button></li>

                             <li><button title="Offices" class="office" name="addoffice" type="submit"><span>Offices    </span></button></li>
                        </ul>
                </li>
                <li class="parent">
                
                    <span title="Add Equipments" class="equips" name="add_equipment">
                        <span>Equipments</span>
                    </span>

                    <ul>
                            <li><button title="Single Equipment" class="single" name="single_equipment" type="submit"><span>Single Equipment</span></button></li>

                             <li><button title="Set Equipment" type="submit" class="set" name="view_equipment_set"><span>Set Equipment</span></button></li>

                             <li><button title="Group Equipment" class="groupSet" name="groupSet" type="submit"><span>Group Equipment</span></button></li>
                        
                            <li class="parent">
                                   <span title="Add Equipments" class="equips">
                                        <span>Equipment List</span>
                                    </span>
                                    <ul>
                                        <li><button title="Broken" name="broken" type="submit" class="broken"><span>Broken</span></button></li>

                                        <li><button title="Expired" name="expired" type="submit" class="expired"><span>Expired</span></button></li>

                                        <li><button title="Unassigned" name="unassigned" type="submit" class="unassigned"><span>Unassigned</span></button></li>

                                        <li><button title="Assigned" name="assigned" type="submit" class="assigned"><span>Assigned</span></button></li>

                                        <li><button title="Up to date" name="uptodate" type="submit" class="uptodate"><span>Up to date</span></button></li>
                                    </ul>
                            </li>   
                        </ul>
                </li>
                <li class="booking-btn">
                    <button title="Booking" class="booking" name="booking" type="submit">Booking</button>
                    <span id="bok_count"  class="counter"></span>

                </li>
             
                <li class="parent">

                        <span title="Facilities" class="facilities" name="facilities">
                       <span>Facilities</span>
                    </span>

                       <ul>
                            <li class="parent"><button title="Room" class="rooms" name="rooms" type="submit"><span>Room</span></button>
                            </li>

                             <li><button title="Venue" class="venue" name="venue" type="submit"><span>Venue </span></button></li>
                        </ul>
                </li>

              
               <!--  <li>
                    <button title="Notifications" class="notifs" name="notifs" type="submit">Notifications</button>
                    <span id="count" class="counter"></span>

                </li> -->


            </ul>
        </form>
          
    </nav>
    <?php
} else if ($status == "Office") {
    ?>
    <nav class="main-nav">
        <img src="images/monitor.png">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button type="submit" name="dashboard" class="dashboard" value="<?php echo $id; ?>"><span>DASHBOARD</span></button>
                </li>
                 <li>
                     <button title="QR Scanner" class="scanner" name="openScanner"> <span>QR Scanner</span></button>
                </li>

                <li>
                    <button class="booking" name="booking" type="submit"><span>Booking</span></button>
                </li>
                <li>
                    <button type="submit" name="report" class="reports"><span>Report</span></button>
                </li>
            </ul>
        </form>
    </nav>
    <?php
} else if($status == "Teacher") {

    ?>
    <nav class="main-nav">
        <img src="images/monitor.png">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button type="submit" name="dashboard" class="dashboard" value="<?php echo $id; ?>"><span>DASHBOARD</span></button>
                </li>
                 <li>
                     <button title="QR Scanner" class="scanner" name="openScanner"> <span>QR Scanner</span></button>
                </li>
                <li>
                    <button class="booking" name="booking" type="submit"><span>Booking</span></button>
                </li>
                <li>
                    <button class="reports" name="reports" type="submit"><span>Reports</span></button>
                </li>
                <li>
                    <button class="reports" name="viewrooms" type="submit" value="<?php echo $id; ?>"><span>Rooms</span></button>
                </li>

            </ul>
        </form>
    </nav>
    <?php
}
?>




<script>
    function parentActive(){
        $('.menu li.parent').click(function(e){
            e.stopPropagation();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            }

            else {
                $(this).addClass('active');
            }

        });
    }

    $(document).ready(function () {
        parentActive()
    });
</script>