<div class="dashboard-container">
    <div class="top-container">
        <strong>Dashboard</strong>
        <a href="logout.php" class="logout"></a>
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
