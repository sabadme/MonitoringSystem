<div class="dashboard-container">
        <div class="top-container">
    <strong>Dashboard</strong>

    <div class="notifs-container">
        <strong class="notifs" value="<?php echo $accountname; ?>" id="OfficeBookingApproved"></strong>
        <span id="teacherBookingApproved" class="counter""></span>

        <div class="notifs-wrapper">
            <strong >Notifications</strong>

            <table id="myTable">
                <thead>
                        <th>Venue</th>
                        <th>Date Start</th>
                        <th>Date End</th>
                </thead>

                <tbody>
                    <?php include"Office/bookingApproved.php"; ?>
                </tbody>
            </table>

            <form action="" method="POST">
                <button title="Notifications" name="notifs" type="submit">View All</button>
            </form>
        </div>

    </div>
    <a href="logout.php" class="logout"></a>
</div>
	<div class="new-equipments-container">
		<strong> My Equipments </strong>
	   
       <table id="myTable">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Qr Code</th>
                <th>Registered Date</th>
                <th>Expiry Date</th>
                <th>Assigned</th>
              
            </tr>
        </thead>
           <?php include"office/office_equipment.php"; ?>
       </table>

			
		
	</div>
</div>


