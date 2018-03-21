
<div class="manage-container registration">
	<strong class="title">Equipments Registration</strong>

    <div class="tabs-container">
   
        <ul class="tabs list">
            <li>
                <form action="" method="POST">
               <button type="submit" name="broken">Broken</button>
               </form>
            </li>
            
              <?php 
              if(isset($_REQUEST['broken'])){
              include "admin/brooken_equipment.php"; 
              }
              ?>


            <li>
            <form action="" method="POST">
               <button type="submit" name="expired">Expired</button>
               </form>
            </li>
               <?php 
                if(isset($_REQUEST['expired'])){
               include "admin/expired.php"; 
                 }
               ?>



             <li>
                <form action="" method="POST">
               <button type="submit" name="unassigned">Unassigned</button>
               </form>
            </li>
                <?php 
                if(isset($_REQUEST['unassigned'])){
                include "admin/unassigned.php"; 
            }
                ?>



            <li>
                <form action="" method="POST">
               <button type="submit" name="Uptodate">Up to date</button>
               </form>
            </li>
                 <?php 
                 if(isset($_REQUEST['Uptodate'])){
                 include "admin/Uptodate.php"; 
                 }
                 ?>
        </ul>
        
    </div>

</div>
	</div>

