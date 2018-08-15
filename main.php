<?php
session_start();
error_reporting(0);
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
                include "teacher/function.php";
            }else if ($status == "Student Assistant") {
                $accountname;
                include "student/function.php";
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
    }

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


    jQuery(document).ready(function () {
        $('.block-loader').fadeOut("slow");
        $('body').addClass('loaded');
        addActive();
        empty();
        tabActive();
        /*searchTable();*/
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
    $(document).ready(function(){
       $("#count").load('admin/notif_count.php');
    });
    </script>
      <script>
    $(document).ready(function(){
       $("#bok_count").load('admin/booking_count.php');
    });
    </script>


    <script>
        // Update rooms MODAL STYLE
        $(function(){
                $(document).on("click" ,".action" , function(){
                    var roomID = ($(this).attr("value"));
                    document.getElementById("RoomsID").value = roomID;
                });


        });
    </script>

<script>
    function UpdateRooms(){
        var RoomName =$("input#RoomName").val();
        var RoomBuilding =$("input#RoomBuilding").val();
        var RoomFloor =$("input#RoomFloor").val();
          var RoomsID =$("input#RoomsID").val();


        $.ajax({
           url : "admin/UpdeteRooms.php",
           type :"POST",
           data :'RoomName=' + RoomName + '&RoomBuilding=' + RoomBuilding + '&RoomFloor=' + RoomFloor + '&RoomsID=' + RoomsID,
        });
        modal.style.display = "none";
    }   
</script>
<script>
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
</script>
 <script type="text/javascript">
      function openScan(){
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
          alert(content); 
        });
        Instascan.Camera.getCameras().then(function (cameras) {
          if (cameras.length > 0) {
            scanner.start(cameras[0]);
          } else {
            console.error('No cameras found.');
          }
        }).catch(function (e) {
          console.error(e);
        });      }
    </script>
<script>
   //scanner js
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        scanner.addListener('scan', function (content) {
          alert(content); 
        });
        Instascan.Camera.getCameras().then(function (cameras) {
          if (cameras.length > 0) {
            scanner.start(cameras[0]);
          } else {
            console.error('No cameras found.');
          }
        }).catch(function (e) {
          console.error(e);
        });      
</script>


<script></script>



