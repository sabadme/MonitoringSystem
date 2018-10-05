<div class="equipments-container">
	<div class="top-container">
    <strong>equipmentName</strong>

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


	<div class="EQ-Page">
		<div class="EQ-Container">
			<div class="EQ-Img">
				<img src="images/lccb.png">
			</div>
			<div class="EQ-Date">
				<div>
					<i>Date Start</i>
					<span>09-12-32</span>
				</div>

				<div>
					<i>Date End</i>
					<span>09-12-32</span>
				</div>
			</div>
		</div>

	<div class="EQ-Info">
		<span>Room: </span>
		<span>Building:</span>
		<span>Floor:</span>
		<span><img style="width: 100px;" src="images/lccb.png"></span>

		<span><i>21mha9sd9pkasd</i></span>


		<span class="status">Ass signed</span>
		</div>	
	</div>
</div>
