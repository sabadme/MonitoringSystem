<?php 
if(isset($_REQUEST['projectPage'])){

include"admin/connect.php";
	$projectPage=$_REQUEST['projectPage'];


$dir_path="ProjectPic/";
$option="";

if(is_dir($dir_path)){
    $files=opendir($dir_path);
    if($files){
        while(($file_name=readdir($files)) !== FALSE){
            if($file_name != '.' &&  $file_name != '..'){
            
             } 

$view=mysql_query("SELECT * FROM tbl_project WHERE `id`='$projectPage'");
$data_view=mysql_fetch_array($view);
     $image=$data_view['Pic'];
     $contructCost =$data_view['contructCost'];
     $Contructor =$data_view['Contructor'];
     $project = $data_view['project'];
     $location = $data_view['location'];
   


 
if($image==$file_name){
    
?>

<div class="accounts-container">
    <div class="top-container">
            <strong>Room: <?php echo $contructCost; ?></strong>
            <a href="logout.php" class="logout"></a>
    </div>

    <div class="product-page-container">
    <!-- <div class="product-banner-container">
        <img src="images/product-page-banner.jpg" />
    </div> -->

    <div class="product-inner-container">
        <div class="image-container">
            <img src="images/placeholder-product.png" style="background: url(<?php echo "ProjectPic/$image" ?>) no-repeat;">

        </div>
        <div class="product-info-container">
            <span class="equipment-code"><?php echo
            $project.' | '.$location; ?></span>
           
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Brand</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Supplier</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                 <?php 
                  $sqlProject = mysql_query("SELECT * FROM project_items WHERE projectID = '$projectPage'");
                  while($dataProject = mysql_fetch_array($sqlProject)){
                    $itemsID = $dataProject['itemsID'];
                    $Quantity = $dataProject['quantity'];
                    $total = $dataProject['total'];
                    $Status = $dataProject['status'];

                    $sqlItems = mysql_query("SELECT * FROM items WHERE id='$itemsID'");
                    $dataItems = mysql_fetch_array($sqlItems);
                    $supplierID = $dataItems['supplierID'];
                    $itemPrice = $dataItems['price'];

                    $sqlSupplier = mysql_query("SELECT * FROM tbl_users WHERE id='$supplierID'");
                    $dataSupplier = mysql_fetch_array($sqlSupplier);
                    ?>
                    <tr>
                      <td><?php echo $dataItems['items']; ?></td>
                      <td><?php echo $dataItems['brand']; ?></td>
                      <td><?php echo $Quantity; ?></td>
                      <td><?php echo $itemPrice; ?></td>
                      <td><?php echo $total; ?></td>
                      <td><?php echo $dataSupplier['firstname']; ?></td>
                      <td><?php echo $Status; ?></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<?php

} 
}
}

}
}


?>

