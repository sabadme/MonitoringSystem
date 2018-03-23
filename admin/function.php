<?php
include "admin/update_room_status.php";
include "admin/add_user_function.php";
include "admin/add_equipment_function.php";
include "admin/save_room_function.php";
include "admin/add_office_function.php";
include "admin/office_select_equipment_function.php";
include "admin/enable.php";
include "admin/disable.php";
include "admin/office_disabled.php";
include "admin/office_enable.php";
include "admin/booking_function.php";
include "admin/booking_approved.php";
include "admin/notification_update.php";
include "admin/finalset_equipment.php";
include "admin/upda_single_equipment_function.php";
include "admin/sa_update_function.php";
include "admin/office_update_function.php";
include"admin/notifacation.php";



if (isset($_REQUEST['dashboard'])) {
    include "dashboard.php";
} else if (isset($_REQUEST['accounts'])) {
    include "admin/users.php";
} else if (isset($_REQUEST['add_equipment'])) {
    include "admin/add_equipment_design.php";
} else if (isset($_REQUEST['Catalog'])) {

    include "admin/catalog-function.php";
} else if (isset($_REQUEST['generate_code'])) {
    include "admin/add_equipment_design.php";
} else if (isset($_REQUEST['equipment_page'])) {

    include "admin/product_page.php";
} else if (isset($_REQUEST['add_room'])) {

    include "admin/add_room_page.php";
} else if (isset($_REQUEST['rooms'])) {

    include "admin/rooms_manage.php";
} else if (isset($_REQUEST['booking'])) {

    include "admin/booking_page.php";
} else if (isset($_REQUEST['reports'])) {

    include "admin/reports.php";
} else if (isset($_REQUEST['save_room'])) {
    include "admin/add_room_page.php";
} else if (isset($_REQUEST['view_roomE'])) {
    include "admin/room_status.php";
} else if (isset($_REQUEST['Update_roomStatus'])) {
    include "admin/room_status1.php";
}/* else if (isset($_REQUEST['addoffice'])) {
    include "admin/add_office_design.php";
}*/ else if (isset($_REQUEST['addoffices'])) {
    include "admin/add_office_design.php";
} else if (isset($_REQUEST['officeequipmentassign'])) {
    include "admin/office_select_equipment.php";
} else if (isset($_REQUEST['office_equipment_table'])) {
    include "admin/office_equipment_table.php";
} else if (isset($_REQUEST['save_selected_equipment'])) {
    include "admin/office_equipment_table.php";
} else if (isset($_REQUEST['enable'])) {
    include "admin/add_user_design.php";
} else if (isset($_REQUEST['disable'])) {
    include "admin/add_user_design.php";
} else if (isset($_REQUEST['officedisable'])) {
    include "admin/add_office_design.php";
} else if (isset($_REQUEST['officeenable'])) {
    include "admin/add_office_design.php";
} else if (isset($_REQUEST['save_booking'])) {
    include "admin/booking_page.php";
} else if (isset($_REQUEST['notif'])) {
    include "admin/booking_page.php";
} else if (isset($_REQUEST['approve_booking'])) {
    include "admin/booking_page.php";
} else if (isset($_REQUEST['notifs'])) {
    include "admin/viewreports.php";
}  else if (isset($_REQUEST['equipment_list'])) {
    include "admin/equipment_list.php";
}   else if(isset($_REQUEST['broken'])){
  include "admin/equipment_list.php"; 
}    else if(isset($_REQUEST['expired'])){
  include "admin/equipment_list.php"; 
}    else if(isset($_REQUEST['unassigned'])){
  include "admin/equipment_list.php"; 
}    else if(isset($_REQUEST['Uptodate'])){
  include "admin/equipment_list.php";   
}    else if(isset($_REQUEST['Add_equipment_set'])){
  include "admin/equipment_set_check.php";
}    else if(isset($_REQUEST['Add_equipment_setFinal'])){
  include "admin/equipment_set_check.php"; 
}    else if(isset($_REQUEST['update_equipment'])){
  include "admin/update_sigle_equipment.php"; 
}    else if(isset($_REQUEST['user_update'])){
  include "admin/user_update.php"; 
}    else if(isset($_REQUEST['sa_update_function'])){
  include "admin/users.php"; 
}    else if(isset($_REQUEST['office_update'])){
  include "admin/office_update.php"; 
}    else if(isset($_REQUEST['office_update_function'])){
  include "admin/office_update.php"; 
}    else if(isset($_REQUEST['addnewset'])){
  include "admin/set_equipment.php"; 
}    else if(isset($_REQUEST['generate_codeSet'])){
  include "admin/equipment_set_check.php"; 
}else {
    include "dashboard.php"; 
}
?>  

