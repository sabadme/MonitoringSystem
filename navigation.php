
<?php
  include"admin/connect.php";

if ($status == "Admin") {
 ?>
    <nav class="main-nav">
        <div class="logo-block">
            <a href="../monitoringsystem/main.php?id=1">
                <img src="images/monitor.png">
            </a>

            <span class="welcometext">WELCOME <?php echo $status; ?></span>

            <div class="icon-wrapper">
                <span class="icon"><span class="icon-inner"></span></span>
            </div>
            <!-- <i class="fas fa-angle-down"></i> -->
        </div>

        
        <form action="" method="POST">
            
            <ul class="menu">

                <li>
                    <button title="Dashboard" type="submit" name="dashboard" class="dashboard">
                    <span>Dashboard</span>
                    </button>
                </li>
                  <li>
                    <button title="Dashboard" type="submit" name="addProject" class="dashboard">
                    <span>Add Project</span>
                    </button>
                </li>
                   <li>
                    <button title="Dashboard" type="submit" name="addContructor" class="dashboard">
                    <span>Add User</span>
                    </button>
                </li>
            </ul>
        </form>
          
    </nav>
    <?php
} else if ($status == "Contractor") {
    ?>
    <nav class="main-nav">
        <div class="logo-block">
            <a href="../monitoringsystem/main.php?id=1">
                <img src="images/monitor.png">
            </a>

            <span class="welcometext">WELCOME <?php echo $status; ?></span>

            <div class="icon-wrapper">
                <span class="icon"><span class="icon-inner"></span></span>
            </div>
            <!-- <i class="fas fa-angle-down"></i> -->
        </div>

        <form action="" method="POST">
            <ul class="menu">

                <li>
                    <button type="submit" name="dashboard" class="dashboard" value="<?php echo $id; ?>"><span>DASHBOARD</span></button>
                </li>
                <li>
                    <button type="submit" name="supplierList" class="dashboard"><span>Look For Supplier</span></button>
                </li>
               
            </ul>
        </form>
    </nav>
    <?php
} else if($status == "Supplier"){
    $sql_technicianName = mysql_query("SELECT * FROM tbl_users WHERE id='$id'");
    $data_technicianName = mysql_fetch_array($sql_technicianName);

    ?>
      <nav class="main-nav">
        <div class="logo-block">
            <a href="../monitoringsystem/main.php?id=1">
                <img src="images/monitor.png">
            </a>

            <span class="welcometext">WELCOME <?php echo $data_technicianName['account']; ?></span>

            <div class="icon-wrapper">
                <span class="icon"><span class="icon-inner"></span></span>
            </div>
            <!-- <i class="fas fa-angle-down"></i> -->
        </div>

        <form action="" method="POST">
            <ul class="menu">
                <li>
                    <button type="submit" name="dashboard" class="reports"><span>Dashboard</span></button>
                </li>

                <li>
                    <button type="submit" name="addItems" class="reports"><span>Add Items</span></button>
                </li>
                <li>
                    <button type="submit" name="projectApprovedList" class="reports"><span>Project Approved List</span></button>
                </li>

                

            </ul>
        </form>
    </nav>
    <?php
}
?>
<script>
    function parentActive(){
        $('.menu li.parent').click(function(e){
            e.stopPropagation();
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            }

            else {
                $(this).addClass('active');
            }

        });
    }

    $(document).ready(function () {
        parentActive()
    });
</script>