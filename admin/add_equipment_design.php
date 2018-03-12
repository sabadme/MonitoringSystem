<?php 
include"admin/generate_code.php";
 ?>
<div class="manage-container equipment-registration">
	<strong class="title">Equipments Registration</strong>

    <div class="equipment-tabs-container">
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
</script>