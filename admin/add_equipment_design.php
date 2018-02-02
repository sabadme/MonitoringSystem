<div class="manage-container"> 
	<strong class="title">Equipment Registration</strong>

	<div class="manage-inner-container">
		<form action="" method="POST"  enctype="multipart/form-data">
			<input type="file" name="imgs"/>
			<input type="text" name="equipment_code" placeholder="Equipment Code">
			<input type="text" name="equipment_name" placeholder="Equipment Name">
			<input type="date" name="equipment_start">
			<input type="date" name="equipment_end">
			<button type="submit" name="save_equipment">SAVE</button>
		</form>

		<div class="table-container" id="wrapper">
			<table>
				<thead>
					<th>FIRSTNAME</th>
					<th>LASTNAME</th>
				</thead>

				<tbody>
					<?php include"admin/user_table.php"; ?>
				</tbody>
			</table>
		</div>
	</div>


</div>