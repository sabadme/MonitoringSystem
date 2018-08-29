<div class="manage-container room-management with-banner">
    <strong class="title">SETUP VENUE</strong>

    <div class="manage-inner-container">
        <div class="tabs-container">
            <ul class="tabs accounts">
                <li class="active">
                    <span>MANAGE</span>
                </li>
                <?php include "admin/venue.php"; ?> 
                <li>
                    <span>ADD Venue</span>
                </li>   
                <?php include "admin/add_venue.php"; ?>
                <li style="margin-left: 250px;">
                    <span>Venue equipment</span>
                </li>
                <?php include "admin/venue_equipment.php"; ?>

            
            </ul>
        </div>
        <div class="banner-container">
            <img src="images/message-banner.jpg" alt="Banner"/>
        </div>
    </div>

</div>