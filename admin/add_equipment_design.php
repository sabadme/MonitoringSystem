<?php 
include"admin/generate_code.php";
 ?>
<div class="manage-container registration">
	<strong class="title">Equipments Registration</strong>

    <div class="tabs-container">
        <ul class="tabs">
            <li class="active">
                <span>Single</span> 
            </li>
                <?php include "admin/single_equipment.php"; ?>
            <li>
                <span>Set</span>
            </li>
             <?php include "admin/set_equipment.php"; ?>  
        </ul>
    </div>
</div>

<!--<script>
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
</script>-->