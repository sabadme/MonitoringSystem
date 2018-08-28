<?php include"admin/generate_codeSet.php"; ?>
<div class="manage-container with-banner" style="margin-top: 99px;">
    <strong class="title">Register Set</strong>
    <div class="manage-inner-container">
        <div class="table-container" id="wrapper">          
             <form action="" method="POST"  enctype="multipart/form-data">
            <input type="file" name="imgset"/>
     

                <input type="text" name="setName" placeholder="Set name">
            <table>
                <thead>
                <th></th>
                <th>SET Name</th>
                <th></th>
                </thead>

                <tbody>
            <?php include"admin/set_equipment_table_check.php"; ?>
                </tbody>
            </table>
            <button style="margin-top: 20px;" class="action" name="Add_equipment_setFinal" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
