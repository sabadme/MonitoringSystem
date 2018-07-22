<?php 

include"admin/generate_code.php"; 

?>

<div class="form-container">
    <div class="inner-form-container">

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="imgs"/>
            <input type="text" id="equipment_code" name="equipment_code" placeholder="Eqiupment Code" value="<?php echo $str; ?>">
            <input type="text" name="equipment_name" placeholder="Equipment Name">
            <input type="date" name="equipment_start" required>
            <input type="date" name="equipment_end">
            <button type="submit" name="save_equipment">SAVE</button>
        </form>
        <div class="generate-container">
            <form action="" method="POST">
            <button class="generate" name="generate_code" type="submit">Generate</button>
            </form>
        </div>


        <div class="table-container" id="wrapper">
            <table id='myTable'>
                <thead>
                <th>Code</th>
                <th>Name</th>
                <th>Registered</th>
                <th>Expiration</th>
                <th></th>
                </thead>

                <tbody>
                <?php include "admin/equipment_table.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
