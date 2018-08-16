
<div class="booking-container">
    <strong class="title">Booking Lounge</strong>
    <strong class="title"><?php date_default_timezone_set('Asia/Manila');
echo $date = date('m/d/Y h:i:s a', time()); ?>
    
</strong>
    <div class="booking-wrapper-container">
        <div class="booking-wrapper">
            <strong class="subtitle">Bookings</strong>
 <form action="" method="POST">
    
     <!--        <div class="field"> 
                <label>Booker: </label>
             <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Name..." name="booker" />
        <div class="result"></div>
    </div>
            </div> -->

            <div class="field">
                <label>Venue: </label>
            <div class="search-venue">
                <input type="text" autocomplete="off" placeholder="Search venue..." name="venue" />
                 <div class="Vresult"></div>
             </div>
           
            </div>

            <div class="field">
                <label>Semester: </label>
               <select name="sem">
                   <option value="" disabled selected>Select..</option>
                   <option>1st sem</option>
                   <option>2st sem</option>
                   <option>Summer</option>
               </select>
            </div>

            <div class="field">
                <label>When: </label>
                <input type="date" name="datestart"/>
            </div>
             <div class="field">
                <label>Date End: </label>
                <input type="date" name="dateend"/>
            </div>

            <div class="field">
                <label>Start Time: </label>
                <input type="time" name="timestart"/>
            </div>

            <div class="field">
                <label>End Time: </label>
                <input type="time" name="tameend"/>
            </div>

            <div class="field equipments-field">
                <span>Equipments</span>
                <input class="search" type="text" placeholder="search equipments..."/>
                <div class="wrapper">
                    <?php
                    include "admin/connection.php";
                    
                    if (!empty('div')){
                    $equipment_sql = mysql_query("SELECT * FROM equipment ORDER BY id desc");
                    while ($data_equipment = mysql_fetch_array($equipment_sql)) {   
                        $status=$data_equipment['status'];
                        $equipment_name=$data_equipment['equipment_name'];

                        $get_equipment=mysql_query("SELECT * FROM booking WHERE equipment='$equipment_name'");
                        $data_GETequipment=mysql_fetch_array($get_equipment);
                        $get_equipmentNAME=$data_GETequipment['equipment'];

                        if($status=="Unassigned" && $get_equipmentNAME != $equipment_name){


                        ?>
                        <div>
                            <label for="<?php echo $data_equipment['id']; ?>"><?php echo $data_equipment['equipment_name']; ?></label> 
                            
                            <input type="checkbox" name="equipment[]" id="<?php echo $data_equipment['id']; ?>" value="<?php echo $data_equipment['equipment_name']; ?>"/>
                            
                        </div>

                        <?php
                    }

                    }
                    }else {
                        echo "sdadsd";
                    }

                    

                    ?>
                </div>
            </div>

           
                <button type="submit" name="save_booking">Book</button>
            </form>
        </div>
        <div class="booking-table">
            <strong class="subtitle">Booking Information</strong>
            <div class="table-container" id="wrapper">
                <table>
                    <thead>
                    <th>Booker</th>
                    <th>Venue</th>
                    <th>Semester</th>
                    <th>Date Start</th>
                    <th>Date End</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Equipments</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                    <?php include"teacher/booking_table.php"; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
$(document).ready(function(){
    $('.search-venue input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".Vresult");
        if(inputVal.length){
            $.get("admin/backend-search-venue.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".Vresult p", function(){
        $(this).parents(".search-venue").find('input[type="text"]').val($(this).text());
        $(this).parent(".Vresult").empty();
    });
});
</script>