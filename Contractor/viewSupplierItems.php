<?php 
if(isset($_REQUEST['viewSupplierItems'])){
	$viewSupplierItems = $_REQUEST['viewSupplierItems'];

	include"admin/connect.php";
	?>
	<form action="" method="POST">
	<table>
		<thead>
			<tr>
				<th>Items</th>
				<th>Brand</th>
				<th>Price</th>	
				<th>Quantity</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
	<?php

	$sqlSupplier = mysql_query("SELECT * FROM items WHERE supplierID='$viewSupplierItems'");
	while($dataSupplier = mysql_fetch_array($sqlSupplier)){
		?>
		<tr>
			<td><?php echo $dataSupplier['items']; ?></td>
			<td><?php echo $dataSupplier['brand']; ?></td>
			<td><?php echo $dataSupplier['price']; ?></td>
			<td><input type="text" name="quantity[]"></td>
			<td><input type="checkbox" name="itemsChoice[]" value="<?php echo $dataSupplier['items']; ?>"></td>
		</tr>
		<?php
	}

}
 ?>
 </tbody>
 </table>
 <button name="buyItems" type="submit">BUY</button>
 </form>