<div class="equipment-form-container">
    <div class="manage-inner-container">
        <div class="generate-container">
        
        </div>


        <div class="table-container" id="wrapper">
            <form action="" method="POST">
            <table>
                <thead>
                <th></th>
                <th>Code</th>
                <th>Name</th>
                <th>Registered</th>
                <th>Expiration</th>
                </thead>

                <tbody>
            <?php include"admin/set_equipment_table.php"; ?>
                </tbody>
            </table>
            <button name="Add_equipment_set" type="submit">Add</button>
            </form>
        </div>
    </div>
</div>
