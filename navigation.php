
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

        <img src="images/monitor.png">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button title="Dashboard" type="submit" name="dashboard" class="dashboard">
                    <span>Dashboard</span>
                    </button>
                </li>
                <!-- <li class="manage-btn">
                    <span class="manage">MANAGE</span>
                </li> -->

                
                <li class="booking-btn">
                    <button title="Booking" class="booking" name="booking" type="submit"><span>Booking</span></button>
                     <?php include "admin/notifacation.php"; ?>
                     <?php if ($count == 0) {
                        ?>

                        <?php
                    } else { ?><span class="counter"><?php echo $count; ?></span> <?php } ?>


                </li>
               
                <li class="parent">
                    <!-- <button title="Accounts" class="adduser" name="accounts" type="submit"><span>Accounts</span></button> -->
                    <span title="Accounts" class="adduser" name="accounts">
                        <span>Accounts</span>
                    </span>

                    <ul>
                            <li><button title="Users" class="users" name="add_user" type="submit"><span>Users</span></button></li>

                             <li><button title="Users" class="users" name="add_user" type="submit"><span>Offices    </span></button></li>
                        </ul>
                </li>

                <li class="parent">
                    <!-- <button title="Accounts" class="adduser" name="accounts" type="submit"><span>Accounts</span></button> -->
                    <span title="Add Equipments" class="equips" name="add_equipment">
                        <span>Equipments</span>
                    </span>

                    <ul>
                            <li><button title="Add Equipments" class="addequipment" name="add_equipment" type="submit"><span>Add Equipment</span></button></li>

                             <li><button type="submit"><span>Equipment Set</span></button></li>

                             <li><button title="Equipments" class="equips" name="equipment_list" type="submit"><span>Equipment List</span></button></li>
                        </ul>
                </li>

                 <li>
                    <button><span>Charts</span></button>
                </li>

                <!-- <li>
                    <button title="Add Equipments" class="addequipment" name="add_equipment" type="submit"><span>Equipments</span></button>
                </li> -->
                <li>
                    <button title="Rooms" class="rooms" name="rooms" type="submit"><span>Facilities</span></button>
                </li>

                 

                <li>
                    <button title="Notifications" class="notifs" name="notifs" type="submit"><span>Notifications</span></button>
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
                    <button type="submit" name="dashboard" class="dashboard" value="<?php echo $id; ?>"><span>DASHBOARD</span></button>
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
} else {

    ?>
    <nav class="main-nav">
        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button type="submit" name="dashboard" class="dashboard" value="<?php echo $id; ?>"><span>DASHBOARD</span></button>
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
        $('.menu li.parent').click(function(){
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