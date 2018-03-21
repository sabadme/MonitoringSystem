
<?php 

  if(isset($_REQUEST['expired'])){
 ?>
<div class="form-container">
    <div class="inner-form-container">
        <div class="table-container" id="wrapper">
        
        <div class="table-container" id="wrapper">
            <div class="btndivstyle">
     <input id='myInput' onkeyup='searchTable()' type='text'>
      </div>
        

<table id='myTable'>
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

$get_image=mysql_query("SELECT * FROM equipment");
while($data_image=mysql_fetch_array($get_image)){
$image_status=$data_image['equipment_status'];
$image_filename=$data_image['equipment_filename'];
 $equipment_status=$data_image['equipment_status'];

 if($equipment_status=="Expired"){


  ?>
  <tr>
  <td><?php echo "<img style='width: 50px; height: 50px' src='EquipmentPicture/".$image_filename."'>" ?></td>
   <td><?php echo $data_image['equipment_name']; ?></td>
   <td><?php echo $data_image['equipment_status']; ?></td>
   </tr>
  <?php


}
} 
?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
}
 ?>
<script>
function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>






