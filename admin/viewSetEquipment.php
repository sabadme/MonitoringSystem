<?php
if(isset($_REQUEST['viewSetEquipment'])){
	$viewSetEquipment=$_REQUEST['viewSetEquipment'];

  include"admin/connection.php";	
	?>
<div class="manage-container with-banner">
	<strong class="title"><?php echo $viewSetEquipment; ?></strong>

    <div class="manage-inner-container">
    	

        <div class="table-container" id="wrapper">
            <table id='myTable'>
                <thead>
                <th></th>
                <th>Name</th>
                <th>Code</th>
                <th>Registered</th>
                <th>Expiration</th>
                </thead>

                <tbody>
  <?php
	
	$select_equipmentSet=mysql_query("SELECT * FROM equipmentset WHERE set_name='$viewSetEquipment'");
	while($data_equipment=mysql_fetch_array($select_equipmentSet)){
	$equipment_id=$data_equipment['quipment_id'];
	$set_name=$data_equipment['set_name'];

	$equipment_pic=mysql_query("SELECT * FROM equipment WHERE id='$equipment_id'");
	$data_pic=mysql_fetch_array($equipment_pic);
	$equipment_filename=$data_pic['equipment_filename'];
   $drop_equipment=$data_equipment['drop_equipment'];

  if($drop_equipment=="0"){
  

  }else{
  ?>
  <tr>
    <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/" . $equipment_filename . "'>" ?></td>
    <td><?php echo $data_pic['equipment_name']; ?></td>
    <td><?php echo $data_pic['equipment_code']; ?></td>
    <td><?php echo $data_pic['equipment_start']; ?></td>
    <td><?php echo $data_pic['equipment_end']; ?></td>
    <td><form action="" method="POST"><button name="drop_equipmentSet" type="submit" value="<?php echo $data_equipment['quipment_id']; ?>">Drop</button></form></td>
  </tr>

  <?php
  }

	

}	
  
?>
                </tbody>
            </table>
           <form action="" method="POST">
           	<button class="action" name="add_new_set" value="<?php echo $viewSetEquipment; ?>">Add New</button>
           	<button class="action" type="submit" name="edit_set_equipment" value="<?php echo $viewSetEquipment; ?>">Edit Set</button>
           </form>
        </div>

        <div class="banner-container">
            <img src="images/message-banner.jpg" alt="Banner"/>
        </div>
    </div>
</div>
<?php
}
?>