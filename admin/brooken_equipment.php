

<div class="form-container">
    <div class="inner-form-container">
        <div class="table-container" id="wrapper">
            <table>
                <thead>
                <th></th>
                <th>Name</th>
                <th>Status</th>
                </thead>

                <tbody>
              <?php 
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$get_image=mysql_query("SELECT * FROM equipment WHERE equipement_status='Broken'");
while($data_image=mysql_fetch_array($get_image)){
$image_status=$data_image['equipment_status'];
$image_filename=$data_image['equipment_filename'];
  ?>
  <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$image_filename."'>" ?></td>
   <td><?php echo $data_image['equipment_name']; ?></td>
   <td><?php echo $data_image['equipment_status']; ?></td>
  <?php


}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>


