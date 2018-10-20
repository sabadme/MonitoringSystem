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
        <strong class="sub-title">Supplier list</strong>





    	<div class="new-rooms-container">
        <input type="text" id="Search" onkeyup="myFunction()" placeholder="Search" class="search">
    		<!-- <strong> FACILITIES AND ROOMS </strong> -->

            <div class="overflow-container">
        		<div class="new-rooms-block">


    			<?php include"Contractor/supplierListTable.php"; ?>
    		</div>
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