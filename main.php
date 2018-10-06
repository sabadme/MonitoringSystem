<?php
session_start();

$accountname=$_SESSION['account'];
$status=$_SESSION['status'];
$id=$_SESSION['id'];

 ?>
 <?php
if(isset($status)){
 ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Monitoring</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
        <link type="text/css" rel="stylesheet" href="css/simplePagination.css"/>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/jQuery.print.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.simplePagination.js"></script>
        <script type="text/javascript" src="js/instascan.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <style>

  #alert_popover
  {

   display:block;
   position:absolute;
   bottom:50px;
   right: 50px;
  }
  .wrapper {
    display: table-cell;
    vertical-align: bottom;
    height: auto;
    width:200px;
  }
  .alert_default
  {
    display: block;
    margin: 20px 20px;
   color: #333333;
   background-color: #f2f2f2;
   border-color: #cccccc;
  }



  </style>



    <body class="main-index">
    <div class="block-loader">

        <div class="loader-gear"></div>
    </div>

    <div class="page-wrapper">

        <?php


        ?>
        <header>


            <div class="logo-container">
                <img src="images/lccb.png"/>


                <span>Facility Equipment Monitoring System</span>
            </div>
            <div class="login-container">
                <?php if ($accountname): ?>
                    <div class="mainUser-container">
                        <span class="username"><?php echo $accountname; ?></span>

                        <a href="logout.php" class="logout">
                            <!-- <img src="images/svg/logout.svg" alt="LOGOUT" /> --></a>
                    </div>
                <?php else: ?>
                    <span class="login">LOGIN</span>
                <?php endif; ?>

                <?php include "login.php"; ?>
            </div>

        </header>


        <div class="page-main">

            <?php include "navigation.php"; ?>
            <?php
            if ($status == "Admin") {

   ?>

        <script>
            //notifacation pop up
        $(document).ready(function(){

            setInterval(function(){
            load_last_notification();
            }, 1000);
            function load_last_notification(){
               $.ajax({
                url: "admin/fetch_report.php",
                method:"POST",

                success: function(data){
                    /*console.log(data)*/
                $(".content").html(data);
                // alert(data)
                }
            })
            }


        });
        </script>


        <?php

                ?>
                <?php include "admin/function.php"; ?>
                <?php
            } else if ($status == "Office") {
                $accountname;

                ?>
                <?php include "Office/function.php"; ?>
                <?php
            } else if ($status == "Teacher") {
                $accountname;
                $id;
                include "teacher/function.php";
            }else if ($status == "Student Assistant") {
                $accountname;
                include "student/function.php";
            }else if($status == "Technician"){
                $accountname;
                include"Technician/function.php";
            }

            ?>


        </div>
        <!-- NOTIFACATION POP UP -->

                    <div id="alert_popover">
                         <div class="wrapper">
                            <div class="content">

                                 </div>
                         </div>
                   </div>

        <?php include "footer.php"; ?>
    </div>
    </body>


    </html>
    <?php
} else {
    header("location:home.php");
}

?>
<script>
    function addActive() {
        $('.login').click(function () {
            if ($('.login').hasClass('active')) {
                $(this).removeClass('active');
            }

            else {
                $(this).addClass('active');
            }

        });

        $('.login-form-container').mouseleave(function () {
            $('.login').removeClass('active');
        });

        $('.notifs').click(function () {
            if ($('.notifs').hasClass('active')) {
                $(this).removeClass('active');
            }

            else {
                $(this).addClass('active');

            }

        });
    }
//Hide notif count 
   $(function(){
        $(document).on("click" ,"#valueNotif" , function(){
            var notifValue = ($(this).attr("value"));   
           $.ajax({
                url : "teacher/hideNotifUpdate.php",
                method : "POST",
                data : 'notifValue=' + notifValue,
           });

        });
    });

    function empty() {
        if ($('table tbody').children().length == 0) {
            $('table tbody').html("<tr><td><p class='empty'>No Information Available.</p></td></tr>");
        }
    }


    function tabActive() {
        $('.tabs li').click(function () {

            $(this).each(function () {
                $(this).addClass('active');

                if ($(this).siblings().hasClass('active')) {
                    $(this).siblings().removeClass('active');
                }
            });
        });
    }

    function UpdateRooms(){
        var modal = $('.modal');
        var RoomName = $("input#RoomName").val();
        var RoomBuilding = $("input#RoomBuilding").val();
        var RoomFloor = $("input#RoomFloor").val();
        var RoomsID = $("input#RoomsID").val();


        $.ajax({
           url : "admin/UpdeteRooms.php",
           type :"POST",
           data :'RoomName=' + RoomName + '&RoomBuilding=' + RoomBuilding + '&RoomFloor=' + RoomFloor + '&RoomsID=' + RoomsID,
        });
        
        $(modal).css('display', 'none');
    }

    function UpdateVenue(){
        var modal = $('.modal');
        var VenueName = $("input#VenueName").val();
        var VenueBuilding = $("input#VenueBuilding").val();
        var VenueFloor = $("input#VenueFloor").val();
        var VenueID = $("input#VenueID").val();

        $.ajax({
           url : "admin/UpdateVenues.php",
           type :"POST",
           data :'VenueName=' + VenueName + '&VenueBuilding=' + VenueBuilding + '&VenueFloor=' + VenueFloor + '&VenueID=' + VenueID,
        });
        

        $(modal).css('display', 'none');
    }

    function myFunction() {
      var input = document.getElementById("Search");
      var filter = input.value.toLowerCase();
      var divTarget = document.getElementsByClassName('target');

      for (i = 0; i < divTarget.length; i++) {
        if (divTarget[i].innerText.toLowerCase().includes(filter)) {
          divTarget[i].style.display = "block";
        } else {
          divTarget[i].style.display = "none";
        }
      }
    }

    function updatteacher() {
        var teacherORstudent = $("select#teacherORstudent").val();
        var fname =$("input#fname").val();
        var mname =$("input#mname").val();
        var lname =$("input#lname").val();
        var UserID = $("input#UserID").val();

        $.ajax({
            url : "admin/teacher_updateFunctionModal.php",
            type :"POST",
            data :'teacherORstudent=' + teacherORstudent + '&fname=' + fname + '&mname=' + mname + '&lname=' + lname + '&UserID=' + UserID,
        });
        modal.style.display = "none";
    }

    $(function(){   
        $(document).on("click" ,".actions" , function(){
            var VenuesID = ($(this).attr("value"));
            document.getElementById("VenueID").value = VenuesID;
        });
    });

     $(function(){
        $(document).on("click" ,".action" , function(){
            var roomID = ($(this).attr("value"));   
            document.getElementById("RoomsID").value = roomID;
        });
    });

     $(function(){   
        $(document).on("click" ,".teacherUpdates" , function(){
            var teacherID = ($(this).attr("value"));
             document.getElementById("UserID").value = teacherID;           
        });
    });

    $(function(){
        $(document).on("click" , ".openOfficeUpdateModal" , function(){
            var OfficeIDs = ($(this).attr("value"));
            document.getElementById("OfficeId").value = OfficeIDs;

        });
    });

    jQuery(document).ready(function () {
        $('.block-loader').fadeOut("slow");
        $('body').addClass('loaded');
     /*   $("#count").load('admin/notif_count.php');*/
        /*$("#teacherBookingApproved").load('teacher/approvedCount.php');*/
        /*$("#bok_count").load('admin/booking_count.php');*/
        addActive();
        empty();
        tabActive();
        UpdateRooms();
        UpdateVenue();
        myFunction();
        updatteacher();

        setInterval(function() {
            $("#bookingdate").load('teacher/dateandtime.php');
        }, 7000);
    });

    jQuery(window).on('unload', function () {
        $('.block-loader').fadeIn("slow");
    });

</script>
<script>
    // THIS CODE IS AUTO UPDATE THE VALUE OF NOTIFICATION
    setInterval(function() {
    $.get('admin/notif_autoupdate.php', function(data) {

    });
}, 7000);
</script>
<script>
     $(function(){
        $(document).on("click" ,"#adminNotifHide" , function(){

        $.ajax({
                url : "admin/adminNotifHide.php",
                method : "POST",
           });
        });
    });
</script>
<script>
      $(function(){
        $(document).on("click" ,"#OfficeBookingApproved" , function(){
            var notifValue = ($(this).attr("value"));

           $.ajax({
                url : "Office/officeBookingApproved.php",
                method : "POST",
                data : 'notifValue=' + notifValue,
           });

        });
    });
</script>

<!-- <script>
    $(function(){
        $(document).on("click" ,".equipmentModal" , function(){

            var equipment  = $(this).attr("value");

            $.ajax({
                url : "teacher/modal_teacher.php",
                method : "POST",
                data : 'equipment=' + equipment,
            });

        });
    });
</script> -->
<script>

setInterval(function() {

$(document).ready(function(){
    <?php

     ?>
     $("#count").load('admin/notif_count.php');

 });


},1000);
</script>
<script>

setInterval(function() {

$(document).ready(function(){
    <?php

     ?>
    $("#teacherBookingApproved").load('teacher/approvedCount.php');

 });


},1000);
</script>

<script>

setInterval(function() {

$(document).ready(function(){
    <?php

     ?>
     $("#bok_count").load('admin/booking_count.php');

 });


},1000);
</script>

<script>
    //technician report modal

    $(function() {
        $(document).on("click" , ".reportClass" , function (){
            var reportClass = ($(this).attr("value"));

            document.getElementById("reportModalValue").value = reportClass;
        });
    });


</script>
<script>
       function reportSendComment (){
        var doneOrnot = $("select#doneOrnot").val();
        var reportMessage = $("textarea#reportMessage").val();
        var reportModalValue = $("input#reportModalValue").val();

        $.ajax({
            url : "Technician/reportSend.php",
            method : "POST",
            data : 'doneOrnot=' + doneOrnot + '&reportMessage=' + reportMessage + '&reportModalValue=' + reportModalValue,
        });
    }
</script>







