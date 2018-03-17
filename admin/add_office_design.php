<div class="form-container">
	<div class="inner-form-container">
		<form class="manage-form" action="" method="POST">
			<input type="text" name="account" placeholder="Account Name">
			<input type="text" name="username" placeholder="username">
			<input type="password" name="password" placeholder="password">
			<button type="submit" name="addoffices">Add</button>
		</form>
		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="searchbtn" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
			</div>
				<table id="myTable">
				<thead>
					<th>Office</th>
					<th>Status</th>
					<th>Enable</th>
					<th>Equipment Assign</th>
				</thead>	

				<tbody>
					<?php include"admin/office_table.php"; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
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
}
</script>