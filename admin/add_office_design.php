
<div class="form-container">
	<div class="inner-form-container">
		<form class="manage-form" action="" method="POST">
			<input type="text" name="account" placeholder="Office Name">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name="addoffices">Add</button>
		</form>
		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="search" id="myInput2" placeholder="Search offices..">
			</div>
				<table id="myTable2">
				<thead>
					<th>Offices</th>
					<th>Status</th>
					<th>E / D</th>
					<th>Add</th>
					<th>Equipments</th>
				</thead>	

				<tbody>
					<?php include"admin/office_table.php"; ?>
				</tbody>
			</table>
		</div>
	</div>

	<script>
	function searchTable() {
        $(".search").on("keyup", function() {
            var input, filter, table, tr, td, i;
        input = document.getElementById("myInput2");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable2");
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

