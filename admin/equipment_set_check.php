<?php include"admin/generate_codeSet.php"; ?>
<div class="equipment-form-container" style="margin-top: 99px;">
    <div class="manage-inner-container">
        <div class="generate-container">
        
        </div>

        <div class="table-container" id="wrapper">
          
             <form action="" method="POST"  enctype="multipart/form-data">
            <input type="file" name="imgset"/>
     

                <input type="text" name="setName" placeholder="Set name">
            <table>
                <thead>
                <th></th>
                <th>Name</th>
                <th></th>
                </thead>

                <tbody>
            <?php include"admin/set_equipment_table_check.php"; ?>
                </tbody>
            </table>
            <button name="Add_equipment_setFinal" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
