<?php 	
include"admin/connect.php";

$sqlItems = mysql_query("SELECT * FROM items ORDER BY id desc");
while($data_Items = mysql_fetch_array($sqlItems)){
	?>
	<tr>
		<td><?php echo $data_Items['items']; ?></td>
		<td><?php echo $data_Items['brand']; ?></td>
		<td><?php echo $data_Items['price']; ?></td>
		<td>
			<form action="" method="POST">
				<button>Update</button>
			</form>
		</td>
	</tr>
	<?php
}
 ?>