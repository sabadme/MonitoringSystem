<?php 
if(isset($_REQUEST['buyItems'])){

	include"admin/connect.php";

	if(isset($_REQUEST['quantity'])){
		if(isset($_REQUEST['itemsChoice'])){

			$quantity = $_REQUEST['quantity'];
			$itemsChoice = $_REQUEST['itemsChoice'];


	 for ($i=0; $i < count($itemsChoice) && count($quantity); $i++) { 
	 	 $quantitys=$quantity[$i];
	 	 $itemsChoices=$itemsChoice[$i];

	 	 $sqlPrice = mysql_query("SELECT * FROM items WHERE items = '$itemsChoices'");
	 	 $dataPrice = mysql_fetch_array($sqlPrice);
	 	 $Price = $dataPrice['price'];
	 	 $itemsID = $dataPrice['id'];

	 	 $total = $Price * $quantitys;


	 	  $insert_items=mysql_query("INSERT INTO project_items VALUES(0,'$itemsID','$Price','$quantitys','$total','Pending')");
				 echo mysql_error();  
					  if($insert_items){
							?>
					 		<?php 
					}else {
						  echo "Error adding record"; 
					}

	 	}
	 }
	}
}
 ?>
