
<div class="form-container">
    <div class="set-container">
        <form action="" method="POST"  enctype="multipart/form-data">
            <button class="action" type="submit" name="addnewset">Add New</button>
        </form>


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
        </div>
    </div>

