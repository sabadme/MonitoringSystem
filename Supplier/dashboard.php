<table>
	<thead>
		<tr>
			<th>Project</th>
			<th>Constractor</th>
			<th>Items</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Total</th>
			<th></th>
		</tr>	
	</thead>
	<tbody>
<?php 
include"admin/connect.php";

$sqlProject = mysql_query("SELECT * FROM project_items WHERE status ='Pending'");
while($dataProject = mysql_fetch_array($sqlProject)){
	$itemsID = $dataProject['itemsID'];
	$contructorID = $dataProject['contructorID'];
	$supplierID = $dataProject['supplierID'];

	$sqlsupplier = mysql_query("SELECT * FROM tbl_users WHERE id = '$supplierID'");
	$dataSupplier = mysql_fetch_array($sqlsupplier);
	$supplierName = $dataSupplier['firstname'];


	$sqlContractor = mysql_query("SELECT * FROM tbl_users WHERE id='$contructorID'");
	$dataContractor = mysql_fetch_array($sqlContractor);
	$contructorName = $dataContractor['firstname'];

	$sqlItems = mysql_query("SELECT * FROM items WHERE id ='$itemsID'");
	$dataItems = mysql_fetch_array($sqlItems);
	?>
	<tr>
		<td><?php echo $supplierName; ?></td>
		<td><?php echo $contructorName;?></td>
		<td><?php echo $dataItems['items'];?></td>
		<td><?php echo $dataProject['quantity']; ?></td>
		<td><?php echo $dataProject['price']; ?></td>
		<td><?php echo $dataProject['total']; ?></td>
		<td>
			<form action="" method="POST">
				<button name="approvedProject" type="submit" value="<?php echo $dataProject['id']; ?>">Approved</button>
			</form>
		</td>
	</tr>
	<?php
	
}
 ?>
	</tbody>
</table>