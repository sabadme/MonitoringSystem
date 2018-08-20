
<div class="form-container">
	<div class="inner-form-container">
		<div class="searchbar">
			<input type="text" class="search" id="myInput1"  placeholder="Search names..">
		</div>
		<span>Add Users</span>
		<div class="box-container">
		
		<form class="manage-form" action="" method="POST">
			<div class="user-box">
				<div class="user-box-input">
					<span>First Name</span>
					<input type="text" name="firstname">
					<span>Middle Name</span>
					<input type="text" name="middlename">
					<span>Last Name</span>
					<input type="text" name="lastname">
				</div>
				<div class="user-box-input">
					<span>Employment</span>
					<select name="status">
					<option value="" disabled selected>Please Select..</option>
					<option>Teacher</option>
					<option>Student Assistant</option>
				</select>
				<span>Userame</span>
				<input type="text" name="username">
				<span>Password</span>
				<input type="password" name="password">
				</div>
			</div>
			<button class="addbtn" type="submit" name="add_user">Add</button>
		</div>
			
		</form>

		<div class="table-container" id="wrapper">
			
				<table id="myTable1">
				<thead>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Position</th>
					<th>Status</th>
					<th></th>
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

