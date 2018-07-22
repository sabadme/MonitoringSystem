<?php 
if(isset($_REQUEST['officeequipmentassign'])){

    $officeequipmentassign=$_REQUEST['officeequipmentassign'];

 ?>
<div class="manage-container select-equipments with-banner">
    <strong class="title">Select Room Equipments</strong>
  <form action="" method="POST">
    <div class="inner-form-container">
        <div class="table-container" id="wrapper">
            <table>
                <thead>
                    <th>Image</th>
                    <th>Name</th> 
                    <th>Code</th>
                    <th>Select</th>
                </thead>

                <tbody> 
                <?php
$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

                $equipment_sql=mysql_query("SELECT * FROM equipment ORDER BY id desc");
                while($data_equipment=mysql_fetch_array($equipment_sql)){
                    $status=$data_equipment['status'];
                    $id=$data_equipment['id'];
                    $get_equipmentcode=$data_equipment['equipment_filename'];

                    if($status=="Assigned"){
                    }else{
                    ?>
                    <tr>
                        <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$get_equipmentcode."'>" ?></td>
                        <td><?php echo $data_equipment['equipment_name']; ?></td>
                        <td><?php echo $data_equipment['equipment_code']; ?></td>
                        <td><input type="checkbox" value="<?php echo $data_equipment['equipment_name']; ?>"  name="check_lists[]"></td>  
                    </tr>
                    <?php
                }
                
            }

                ?>
                </tbody>
            </table>
            <button class="action" name="save_selected_equipment" type="submit" value="<?php echo $officeequipmentassign; ?>">Save</button>
        </div>

        <div class="banner-container">
            <img src="images/message-banner.jpg" alt="Banner">
        </div>

    </div>
  
        
    </form>
</div>
<?php 
}
 ?>
<!-- 
<script>
$(document).ready(function(){
    $('#s').click(function(){
        $.post('equipment_status.php',
            {name: $('.test').attr('id')},

            function(data){
                $('#msg').html(data);
            }
        );
    });
});
</script> -->
