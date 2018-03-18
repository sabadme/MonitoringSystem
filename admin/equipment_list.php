
<div class="manage-container registration">
	<strong class="title">Equipments Registration</strong>

    <div class="tabs-container">
        <ul class="tabs list">
            <li class="active">
                <span>Broken</span> 
            </li>
                <?php include "admin/brooken_equipment.php"; ?>
            <li>
                <span>Expired</span>
            </li>
               <?php include "admin/brooken_equipment.php"; ?>
             <li>
                <span>Unassigned</span>
            </li>
                <?php include "admin/brooken_equipment.php"; ?>
            <li>
                <span>Up to date</span>
            </li>
                <?php include "admin/brooken_equipment.php"; ?>
        </ul>
    </div>
</div>
	</div>

<script>
    $(document).ready(function(){
        $('.tabs li').click(function(){

            $(this).each(function(){
                $(this).addClass('active');

                if($(this).siblings().hasClass('active')) {
                    $(this).siblings().removeClass('active');
                }
            });
        });
    });

    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>