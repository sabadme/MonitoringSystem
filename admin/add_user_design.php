
<div class="form-container">
	<div class="inner-form-container">
		<form class="manage-form" action="" method="POST">
			<select name="status">
				<option value="" disabled selected>Please Select..</option>
				<option>Teacher</option>
				<option>Student Assistant</option>
			</select>
			<input type="text" name="firstname" placeholder="Firstname">
			<input type="text" name="middlename" placeholder="Middlename">
			<input type="text" name="lastname" placeholder="Lastname">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name="add_user">Add</button>
		</form>
		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="search" id="myInput1"  placeholder="Search names..">
			</div>
				<table id="myTable1">
				<thead>
					<th>FIRSTNAME</th>
					<th>MIDDLENAME</th>
					<th>LASTNAME</th>
					<th>Position</th>
					<th>Status</th>
					<th></th>
                    <th></th>
				</thead>

				<tbody>
					<?php include"admin/user_table.php"; ?>
				</tbody>
			</table>
		</div>
	</div>

	<script>
	function searchTable() {
        $(".search").on("keyup", function() {
            var input, filter, table, tr, td, i;
        input = document.getElementById("myInput1");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable1");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });
}

$(document).ready(function(){
	searchTable();
});
</script>
</div>

