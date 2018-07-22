<?php
session_start();

$accountname=$_SESSION['account'];
$status=$_SESSION['status'];
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
    </head>

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


                <span>Online Equipment Monitoring System</span>
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
            }

            ?>


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

    /*function generate() {
        $('.generate').click(function(){
            $.post('generate_code.php',
                {name: $chars},

                function(data){
                    $(str).html(data);
                }
            );
        });
    }*/

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
