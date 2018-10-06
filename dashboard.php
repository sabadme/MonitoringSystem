<div class="dashboard-container">
    <div class="top-container">
        <strong>Dashboard</strong>
        
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
       
        <a href="logout.php" class="logout" title="logout"></a>
    </div>
    <div class="dashboard-wrapper">

        <div class="counter-container">
        <div class="countereq">
            <span style="color: yellowgreen">ASSIGNED</span>
            <?php include"admin/assignedEquipmentCount.php"; ?>
            <label><?php echo $EquipmentAssinged; ?></label>
        </div>
        <div class="countereq">
            <span style="color: @border-color">UNASSIGNED</span>
            <?php include"admin/unassignedEquipmentCount.php"; ?>
            <label><?php echo $EquipmentUnassigned;?></label>
        </div>
        <div class="countereq">
            <span style="color: yellow">UP-TO-DATE</span>
            <?php include"admin/uptodateEquipmentCount.php"; ?>
            <label><?php echo $EquipmentUptodate; ?></label>
        </div>
        <div class="countereq">
            <span style="color: chocolate">EXPIRED</span>
            <?php include"admin/ExpiredEquipmentCount.php"; ?>
            <label><?php echo $Expired; ?></label>            
        </div>
        <div class="countereq">
            <span style="color: red">BROKEN</span>
            <?php include"admin/BrokenEquupmentCount.php"; ?>
            <label><?php echo $Broken; ?></label>
        </div>
    </div>

        <?php include"PieChart/pieForm.php"; ?>
         <!-- http://www.chartjs.org/samples/latest/charts/pie.html -->
    </div>

    <div class="dashboard-wrapper">
        <strong class="sub-title">FACILITY AND ROOMS</strong>

    <div class="counter-container">
        <div class="countereq">
            <form action="" method="POST">
            <button name="facilitiesCount" type="submit">
            <span>FACILITY</span>
            <!-- <img src="images/icons8-bungalow-48.png"> -->
            <?php include"admin/facilities_count.php"; ?>
            <label><?php echo $count; ?></label>
            </button>
            </form>
        </div>
        <div class="countereq">
            <form action="" method="POST">
                <button name="viewRoomCount" type="submit">
                    <span>ROOM</span>
                       <!--  <img src="images/icons8-door-40.png"> -->
                    <?php include"admin/room_count.php"; ?>
                    <label><?php echo $roomCount; ?></label>
                </button>
            </form>
        </div>
        <div class="countereq">
            <form>
            <button type="submit" name="viewOfficeCount">
            <span>OFFICE</span>
            <!-- <img src="images/icons8-office-chair-48.png"> -->
            <?php include"admin/office_count.php"; ?>
            <label><?php echo $officeCount; ?></label>
            </button>
            </form>
        </div>  
    </div>



    	<div class="new-rooms-container">
        <input type="text" id="Search" onkeyup="myFunction()" placeholder="Search" class="search">
    		<!-- <strong> FACILITIES AND ROOMS </strong> -->

            <div class="overflow-container">
        		<div class="new-rooms-block">


    			<?php include"admin/new_rooms.php"; ?>
    		</div>
        </div>
	</div>

    <div class="dashboard-wrapper">
        <strong class="sub-title">BOOKING STATUS</strong>

        <div class="counter-container">
            <div class="countereq">
                <span>MASTERLIST</span>
                <?php include"admin/bookingMasterListCount.php"; ?>
                <label><?php echo $bookingList; ?></label>
            </div>
            <div class="countereq">
                <span>PENDING</span>
                <?php include"admin/bookingPendingList.php"; ?>
                <label><?php echo $Pending; ?></label>
            </div>
            <div class="countereq">
                <span>APPROVED</span>
                <?php include"admin/bookingApprovedList.php"; ?>
                <label><?php echo $Approved; ?></label>
            </div>
            <div class="countereq">
                <span style="color: green;">ON-GOING</span>
                <label>156</label>
            </div>
            <div class="countereq">
                <span style="color: yellow;">HISTORY</span>
                <label>56</label>
            </div>
        </div>

        <input type="text" class="search" placeholder="Search">

        <div class="booking-dashboard">
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
            <th>Status</th>
            <th>Equipments</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
       <?php include"admin/bookingTableDashboard.php"; ?>
        </tbody>
       
        </table>
        </div>
    </div>

    <div class="dashboard-wrapper">
        <strong class="sub-title">EQUIPMENTS STATUS</strong>

        <div class="counter-container">
            <div class="countereq">
                <span>EQUIPMENTS</span>
                <?php include"admin/equipmentCount.php"; ?>
                <label><?php echo $equipmentlistCount; ?></label>
            </div>
            <div class="countereq">
                <span>DEPLOYED</span><!-- ang assigned list ni di ang e butang ron -->
                <?php include"admin/deployed.php"; ?>
                <label><?php echo $deploy; ?></label>
            </div>
            <div class="countereq">
                <span>ON STOCK</span> <!-- ari ya ang unassigned -->
                <?php include"admin/onstack.php"; ?>
                <label><?php echo $Unassigned; ?></label>
            </div>
        </div>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" class="search">

        <div class="equipment-dashboard">

    <table id="myTable">
    <thead>
    <tr>
        <th>Name</th>
        <th>QR ID</th>
        <th>Manufacturer</th>
        <th>Serial</th>
        <th>Status</th>
        <th>Condition</th>
        <th>Room</th>
        <th>Building</th>
        <th>Floor</th>
        <th>View</th>
    </tr>
    </thead>
    <tbody>
 <?php  include"admin/equipmentLIST.php"; ?>
    </tbody>

    </table>
    </div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>