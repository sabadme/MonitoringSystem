<div class="dashboard-container">
    <div class="top-container">
        <strong>Dashboard</strong>
        <div class="notifs-container">
            <strong class="notifs"></strong>
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
  
	<div class="new-equipments-container">
		<strong> New Equipments </strong>

		<div class="new-equipments-block owl-carousel">

			<?php include"teacher/new_equipment.php"; ?>
		</div>
	</div>
</div>

<script>
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
</script>
