<div class="manage-container">
	<strong class="title">Request Page</strong>

	<div class="manage-inner-container">
		<form class="manage-form" action="" method="POST">
			<textarea placeholder="Message*" name="messagetype"></textarea>
			<button type="submit" name="send_request">Send </button>
		</form>
		<div class="table-container" id="wrapper">
			
				<table id="myTable">
				<thead>
					<th>Message</th>
					<th>Date</th>
					<th>Time</th>
					<th>Status</th>
				</thead>

				<tbody>
					<?php include"Office/office_SA_table.php"; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

