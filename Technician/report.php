
<div class="manage-container view-reports with-banner">
	<strong class="title">User Reports</strong>

	<div class="manage-inner-container">

		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search names..">
			</div>
				<table id="myTable">
					
				<thead>
					<th>Name</th>
					<th></th>
					
				</thead>	

				<tbody>
					<?php include"Technician/viewreport_table.php"; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


