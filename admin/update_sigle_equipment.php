<?php 
if(isset($_REQUEST['update_equipment'])){
    $update_equipment=$_REQUEST['update_equipment'];

include"admin/connection.php";

$select=mysql_query("SELECT * FROM equipment WHERE id='$update_equipment'");
$data_select=mysql_fetch_array($select);

 ?>
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
        <?php include "admin/sigle_equipment_update.php"; ?>
            <li>
                <span>Set</span>
            </li>
             <?php include "admin/set_equipment.php"; ?>  
             <li style='margin-left: 176px;'>
                <span>Group Set</span>
            </li>
             <?php include "admin/groupSet.php"; ?>  
        </ul>
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
<?php 
}
 ?>