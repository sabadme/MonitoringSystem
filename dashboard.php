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

    <div class="counter-container">
        <div class="counter-label">
            <span>FACILITY</span>
            <img src="images/icons8-bungalow-48.png">
            <label>56</label>
        </div>
        <div class="counter-label">
            <span>ROOM</span>
            <img src="images/icons8-door-40.png">
            <label>32</label>
        </div>
        <div class="counter-label">
            <span>OFFICE</span>
            <img src="images/icons8-office-chair-48.png">            
            <label>15</label>
        </div>  
    </div>

    <input type="text" id="Search" onkeyup="myFunction()" placeholder="Search" class="search">

	<div class="new-rooms-container">
		<strong> FACILITIES AND ROOMS </strong>
  
        <div class="overflow-container">
    		<div class="new-rooms-block">


    			<?php include"admin/new_rooms.php"; ?>
    		</div>
        </div>
	</div>
        <div class="title">
            <strong>EQUIPMENT STATUS</strong>
        </div>

    <div class="counter-container">
        <div class="countereq">
            <span style="color: yellowgreen">ASSIGNED</span>
            <label>3156</label>
        </div>
        <div class="countereq">
            <span style="color: @border-color">UNASSIGNED</span>
            <label>7456</label>
        </div>
        <div class="countereq">
            <span style="color: yellow">UP-TO-DATE</span>
            <label>7456</label>
        </div>
        <div class="countereq">
            <span style="color: chocolate">EXPIRED</span>
            <label>156</label>            
        </div>
        <div class="countereq">
            <span style="color: red">BROKEN</span>
            <label>56</label>
        </div>
    </div>

    <img style="width: 500px;display: block; margin: 0 auto; margin-bottom: 20px"
    src="images/pie.png"><!-- http://www.chartjs.org/samples/latest/charts/pie.html -->

    <div class="title">
        <strong>SEARCH EQUIPMENTS</strong>
    </div>

    <input type="text" id="Search" onkeyup="myFunction()" placeholder="Search" class="search">

    <div class="equipment-dashboard">

    <table>
    <tr>
        <th>Name</th>
        <th>QR ID</th>
        <th>Manufacturer</th>
        <th>Serial</th>
        <th>Status</th>
        <th>Condition</th>
        <th>Room</th>        
        <th>Floor</th>        
        <th>View</th>
    </tr>
    <tr>
        <td>EE-Aircon</td><!-- impon ang type sa ngalan -->
        <td>z41qgda3</td>
        <td>Toshiba</td>
        <td>123212313</td>
        <td>Deployed</td>
        <td>Up to Date</td>
        <td>501</td>
        <td>5th Floor</td>
        <td><button>View</button></td>
    </tr>
    <tr>
        <td>EE-Aircon</td>
        <td>z41qgda3</td>
        <td>Toshiba</td>
        <td>123212313</td>
        <td>Deployed</td>
        <td>Up to Date</td>
        <td>501</td>
        <td>5th Floor</td>
        <td><button>View</button></td>
    </tr>
    <tr>
        <td>EE-Aircon</td>
        <td>z41qgda3</td>
        <td>Toshiba</td>
        <td>123212313</td>
        <td>Deployed</td>
        <td>Up to Date</td>
        <td>501</td>
        <td>5th Floor</td>
        <td><button>View</button></td>
    </tr>
    </table>
    </div>
    <div class="counter-container">
        <div class="countereq">
            <span>EQUIPMENTS</span>
            <label>4302</label>
        </div>
        <div class="countereq">
            <span>DEPLOYED</span><!-- ang assigned list ni di ang e butang ron -->
            <label>1706</label>
        </div>
        <div class="countereq">
            <span>ON STOCK</span> <!-- ari ya ang unassigned -->
            <label>2596</label>
        </div>  
    </div>
</div>


<!-- <script>
	function loadCarousel() {
        var itemListContainer = $('.new-equipments-block');
            itemListContainer.show();   
    }

    function owlCarousel() {
    	$('.new-equipments-block').owlCarousel({
            nav: true,
            loop: false,
            margin: 5,
            responsiveClass: true,
            dots: false,
            navText: ["<", ">"],
            responsive: {
                0: {
                    items: 1,
                },
                380: {
                    items: 2
                },
                690: {
                    items: 3
                },
                768: {
                    items: 2
                },
                979: {
                    items: 4
                }
            }
        });
    }

	jQuery(document).ready(function(){
	 	loadCarousel();
        owlCarousel();
	});
</script> -->
