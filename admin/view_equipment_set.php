<div class="equipments-container">
    <div class="top-container">
        <strong>Set Equipments</strong>
        <a href="logout.php" class="logout"></a>
    </div>

    <div class="form-container">
        <div class="set-container">
            <input type="text" class="search" id="myInput1"  placeholder="Search names..">

            <div class="table-container" id="wrapper">
                <table>
                    <thead>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Registered</th>
                        <th>Expiration</th>
                    </thead>

                <tbody>
                    <?php include"admin/set_table.php"; ?>
                    </tbody>
                </table>
            </div>

            <form action="" method="POST"  enctype="multipart/form-data">
                <button class="action" type="submit" name="addnewset">Add New</button>
            </form>
        </div>
    </div>
</div>

