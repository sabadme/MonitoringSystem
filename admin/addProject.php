
<div class="equipments-container">
<div class="top-container">
        <strong>Project</strong>

        <div class="notifs-container">
            <strong id="adminNotifHide" class="notifs"></strong>
            <span id="count" class="counter"></span>

            <div class="notifs-wrapper">
                <strong>Notifications</strong>

                <table id="myTable">
                    <thead>
                        <th>Name</th>
                        <th>Equipment</th>
                        <th>Message</th>
                    </thead>

                    <tbody>
                        <?php include"admin/viewreport_table.php"; ?>
                    </tbody>
                </table>

                <form action="" method="POST">
                    <button title="Notifications" name="notifs" type="submit">View All</button>
                </form>
            </div>

        </div>
        <a href="logout.php" class="logout"></a>
</div>


<div class="form-container">
    <div class="inner-form-container"> 
    <div class="box-container"> 
        <form action="" method="POST" enctype="multipart/form-data">

            <div class="user-box">
                <div class="user-box-input">

                     <div class="field">
                        <label>Constructor: </label>
                        <div class="search-venue">
                            <input type="text" autocomplete="off" placeholder="Search venue..." name="contractor" />
                            <div class="Vresult"></div>
                        </div>
                    </div>   
                  <!--   <span>Constructor</span>
                    <input type="text" name="contractor"> -->
                    <span>Project</span>
                    <input type="text" name="project">
                    <span>Location</span>
                    <input type="text" name="location">
                    <span>Date Started</span>
                    <input type="date" name="datestart">
                    <span>Contruct completion date</span>
                    <input type="date" name="Contructcompletiondate">
                    <span>Contruct cost</span>
                    <input type="text" name="Contructcost">
                    <div>
                    </div>

                </div>
                <div class="user-box-input">
                    <span>Construction Consultant</span>
                    <input type="text" name="ConstructionConsultant">
                     <span>Implementing Office</span>
                    <input type="text" name="ImplementingOffice">
                        <span>Sources of fund</span>
                    <input type="text" name="Sourcesoffund">
                    <span>Upload Picture</span>
                    <input type="file" name="imgs">
                </div>
            </div>
            <button type="submit" name="save_project">SAVE</button>
    </div>

        </form> 
        

      <!--   <input type="text" class="search" id="myInput1"  placeholder="Search names.."> -->

        <div class="table-container" id="wrapper">
            <table id='myTable'>
                <thead>
                <th>Constructor</th>
                <th>Date Started</th>
                <th> completion date</th>
                <th>Contruct cost</th>
                <th> Consultant</th>
                <th>Implementing Office</th>
                <th>Sources of fund</th>
                
                </thead>

                <tbody>
                <?php include "admin/project_table.php"; ?>
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
        var resultDropdown = $(this).siblings(".Vresult").css('display', 'block');
        if(inputVal.length){
            $.get("admin/backend-search-venue.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty().css('display', 'none');
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".Vresult p", function(){
        $(this).parents(".search-venue").find('input[type="text"]').val($(this).text());
        $(this).parent(".Vresult").empty();
    });
});
</script>
