<div class="manage-container">
	<strong class="title">Account Registration</strong>

	<div class="manage-inner-container">
		<form class="manage-form" action="" method="POST">
			<input type="text" name="firstname" placeholder="Firstname">
			<input type="text" name="lastname" placeholder="Lastname">
			<input type="text" name="username" placeholder="username">
			<input type="password" name="password" placeholder="password">
			<button type="submit" name="add_user">Add</button>
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