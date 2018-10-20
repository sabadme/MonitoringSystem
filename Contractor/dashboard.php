	
<table>
	<thead>
		<tr>
		<th>Date Start</th>
		<th>Date End</th>
		<th>Contract Cost</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$sqlUsers = mysql_query("SELECT * FROM tbl_users WHERE id='$id'");
		$dataUsers =mysql_fetch_array($sqlUsers);
		$userName = $dataUsers['firstname'];

		$sqlProject = mysql_query("SELECT * FROM tbl_project WHERE Contructor='$userName'");
		while($dataProject = mysql_fetch_array($sqlProject)){
			?>
			<tr>
				<td><?php echo $dataProject['dateStarted']; ?></td>
				<td><?php echo $dataProject['contructCompletionDate']; ?></td>
				<td><?php echo $dataProject['contructCost']; ?></td>
			</tr>
			<?php
		}

		 ?>
		
	</tbody>
</table>