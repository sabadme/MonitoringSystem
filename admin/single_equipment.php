<?php 

include"admin/generate_code.php"; 

?>

<div class="equipments-container">
<div class="top-container">
        <strong>Single Equipments</strong>
        
        <div class="notifs-container">
            <strong class="notifs"></strong>
            <span id="count" class="counter"></span>

            <div class="notifs-wrapper">
                <strong>Notifications</strong>

                <table id="myTable">
                    <thead>
                        <th>Name</th>
                        <th>Equipment</th>
                        <th>Message</th>
                    </thead>    

                    <tbody>
                        <?php include"admin/viewreport_table.php"; ?>
                    </tbody>
                </table>

                <form action="" method="POST">
                    <button title="Notifications" name="notifs" type="submit">View All</button>
                </form>
            </div>

        </div>
        <a href="logout.php" class="logout"></a>
</div>


<div class="form-container">
    <div class="inner-form-container"> 
    <div class="box-container"> 
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="user-box">
                <div class="user-box-input">
                    <span>Name</span>
                    <input type="text" name="equipment_name">
                    <!-- <span>Type</span>
                    <input type="text" name=""> -->
                    <span>Code</span>
                    <input type="text" id="equipment_code" name="equipment_code" value="<?php echo $str; ?>">
                </div>
                <div class="user-box-input">
                    <span>Registration Date</span>
                    <input type="date" name="equipment_start" required>
                    <span>Expiree Date</span>
                    <input type="date" name="equipment_end">
                    <span>Upload Image</span>
                    <input type="file" name="imgs" class="file"/>
                </div>
            </div>
            <button class="addbtn" type="submit" name="save_equipment">SAVE</button>
    </div>

        </form>
                <!-- <div class="generate-container">
                    <form action="" method="POST">
                    <button class="generate" name="generate_code" type="submit">Generate</button>
                    </form>
                </div> -->
        

        <input type="text" class="search" id="myInput1"  placeholder="Search names..">

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
</div>
