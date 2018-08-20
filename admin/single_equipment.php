<?php 

include"admin/generate_code.php"; 

?>

<div class="form-container">
    <div class="inner-form-container">
        <span>Add Single Equipments</span>   
        <div class="box-container"> 
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="user-box">
                <div class="user-box-input">
                    <span>Name</span>
                    <input type="text" name="equipment_name">
                    <span>Type</span>
                    <input type="text" name="">
                    <span>Code</span>
                    <input type="text" id="equipment_code" name="equipment_code" value="<?php echo $str; ?>">
                </div>
                <div class="user-box-input">
                    <span>Registration Date</span>
                    <input type="date" name="equipment_start" required>
                    <span>Expiree Date</span>
                    <input type="date" name="equipment_end">
                    <span>Uoload Image</span>
                    <input type="file" name="imgs"/>
                </div>
            </div>
            <button class="addbtn" type="submit" name="save_equipment">SAVE</button>
        </div>

        </form>
               <!--  <div class="generate-container">
                    <form action="" method="POST">
                    <button class="generate" name="generate_code" type="submit">Generate</button>
                    </form>
                </div> -->
        


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
