
<div class="equipments-container">
<div class="top-container">
        <strong>Single Equipments</strong>

        <div class="notifs-container">
            <strong id="adminNotifHide" class="notifs"></strong>
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
                    <span>Item</span>
                    <input type="text" name="item">
                    <span>Brand</span>
                    <input type="text" name="brand">
                    <span>Price</span>
                    <input type="text" name="price">
                   
                </div>
            </div>
            <button type="submit" name="save_item">SAVE</button>
    </div>

        </form> 

        <div class="table-container" id="wrapper">
            <table id='myTable'>
                <thead>
                <th>Items</th>
                <th>Brand</th>
                <th>Price</th>
                <th></th>
                </thead>
                <tbody>
                <?php include "Supplier/items_table.php"; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


 ?>