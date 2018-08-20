<div class="dashboard-container">
    <div class="searchbar">
        <img src="images/search.png">
        <input type="text" placeholder="Search">
        <a href="logout.php" class="logout"></a>
    </div>

	<div class="new-equipments-container">
		<strong> FACILITIES AND ROOMS </strong>
   <input type="text" id="Search" onkeyup="myFunction()" placeholder="Search" class="search">
        <div class="overflow-container">
    		<div class="new-equipments-block">


    			<?php include"admin/new_equipment.php"; ?>
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
