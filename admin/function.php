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
include "admin/drop_equipmentSet.php";
include"admin/add_new_set_function.php";
include"admin/edit_set_equipment_fucntion.php";
include"admin/groupSetFucntion.php";
include"admin/SaveSet_TeachersRoom.php";
include"admin/unassigned_function.php";
/*include"admin/assigned_update.php";*/
include"admin/Update_assigned.php";
include"admin/update_broken_status.php";
include"admin/add_roomAccount_function.php";
/*include"admin/scanner.php";*/
include"admin/updateEquipmentset.php";
include"admin/add_venue_function.php";
include"admin/save_venue.php";


if (isset($_REQUEST['dashboard'])) {
    include "dashboard.php";
} else if (isset($_REQUEST['accounts'])) {
    include "admin/users.php";
} /*else if (isset($_REQUEST['add_equipment'])) {
    include "admin/add_equipment_design.php";
} */else if (isset($_REQUEST['Catalog'])) {

    include "admin/catalog-function.php";
}/* else if (isset($_REQUEST['generate_code'])) {
    include "admin/add_equipment_design.php";
}*/ else if (isset($_REQUEST['room_page'])) {

    include "admin/room_page.php";
} else if (isset($_REQUEST['add_room'])) {

    include "admin/add_room_page.php";
} else if (isset($_REQUEST['rooms'])) {

    include "admin/rooms_manage.php";
} else if (isset($_REQUEST['booking'])) {

    include "admin/booking_page.php";
} else if (isset($_REQUEST['reports'])) {

    include "admin/reports.php";
} else if (isset($_REQUEST['save_room'])) {
    include "admin/rooms_manage.php";
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
    include "dashboard.php";
} else if (isset($_REQUEST['enable'])) {
    include "admin/users.php";
} else if (isset($_REQUEST['disable'])) {
    include "admin/users.php";
} else if (isset($_REQUEST['officedisable'])) {
    include "admin/add_office_design.php";
} else if (isset($_REQUEST['officeenable'])) {
    include "admin/add_office_design.php";
} else if (isset($_REQUEST['save_booking'])) {
    include "admin/booking_page.php";
} else if (isset($_REQUEST['notif'])) {
    include "admin/booking_page.php";
} else if (isset($_REQUEST['approve_  booking'])) {
    include "admin/booking_page.php";
} else if (isset($_REQUEST['notifs'])) {
    include "admin/viewreports.php";
} /* else if (isset($_REQUEST['equipment_list'])) {
    include "admin/equipment_list.php"; 
}  */ else if(isset($_REQUEST['broken'])){
  include "admin/brooken_equipment.php"; 
} else if(isset($_REQUEST['assigned'])){
  include "admin/assigned_equipment.php"; 
}     else if(isset($_REQUEST['expired'])){
  include "admin/expired.php"; 
}    else if(isset($_REQUEST['unassigned'])){
  include "admin/unassigned.php"; 
}    else if(isset($_REQUEST['uptodate'])){
  include "admin/Uptodate.php";   
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
}    else if(isset($_REQUEST['viewSetEquipment'])) {
  include "admin/viewSetEquipment.php";
}    else if(isset($_REQUEST['drop_equipmentSet'])){
  include "admin/viewSetEquipment.php";
}    else if(isset($_REQUEST['add_new_set'])){
  include "admin/add_new_set.php";  
}    else if(isset($_REQUEST['add_new_set_function'])){
  include "admin/viewSetEquipment.php";
}    else if(isset($_REQUEST['edit_set_equipment'])){
  include "admin/edit_set_equipment.php";
}    else if(isset($_REQUEST['edit_set_equipment_fucntion'])){
  include "admin/edit_set_equipment.php";
}    else if(isset($_REQUEST['login'])){
  include "admin/auto_update.php";
}   else if(isset($_REQUEST['add_user'])){
  include "admin/users.php";
}    else if(isset($_REQUEST['setTeachersRoom'])){
  include "admin/setTeachersRoom_design.php"  ;
} /*   else if(isset($_REQUEST['ViewTeachers'])){
  include "admin/ViewTeachers.php";
}  */  else if(isset($_REQUEST['teacherroom'])){
  include "admin/teacherroom.php";
}    else if(isset($_REQUEST['unassigned_function'])){
  include "admin/teacherroom.php";
}    else if(isset($_REQUEST['unassgnedView'])){
  include "admin/unassigned_dateView.php";  
} else if (isset($_REQUEST['save_equipment'])) {
    include "admin/dashboard.php";
} else if (isset($_REQUEST['unassigedTeachersRoom'])) {
    include "admin/unassigedTeachersRoom.php";
 }else if (isset($_REQUEST['update_broken_status'])) {
    include "admin/equipment_list.php";
 } else if (isset($_REQUEST['view_roomSet'])) {
    include "admin/view_roomSet.php";
 } else if (isset($_REQUEST['view_roomSet'])) {
    include "admin/view_roomSet.php";
 } else if (isset($_REQUEST['ViewSetEquipmentSigle'])) {
    include "admin/ViewSetEquipmentSigle.php";
 } else if (isset($_REQUEST['setRoomTeacher'])) {
    include "admin/setTeachersRoom_design.php";
 }else if (isset($_REQUEST['SaveSet_TeachersRoom'])) {
    include "admin/setTeachersRoom_design.php";
 }else if (isset($_REQUEST['updateEquipment'])) {
    include "admin/rooms_manage.php";
 }else if (isset($_REQUEST['adduser'])) {
    include "admin/add_user_design.php";
 }else if (isset($_REQUEST['addoffice'])) {
    include "admin/add_office_design.php";
 }else if (isset($_REQUEST['single_equipment'])) {
    include "admin/single_equipment.php";
 }else if (isset($_REQUEST['view_equipment_set'])) {
    include "admin/view_equipment_set.php";
 }else if (isset($_REQUEST['groupSet'])) {
    include "admin/groupSet.php";
 }else if (isset($_REQUEST['openScanner'])) {
    include "admin/scanner.php";
 }else if (isset($_REQUEST['openCam'])) {
    include "admin/openScanner.php";
 }else if (isset($_REQUEST['closeCam'])) {
    include "admin/scanner.php";
 }else if (isset($_REQUEST['equipmentLocation'])) {
    include "admin/equipmentLocation.php";
 }else if (isset($_REQUEST['venue'])) {
    include "admin/venue_manage.php";
 }else if (isset($_REQUEST['save_venue'])) {
    include "admin/venue_manage.php";
 }else {
    include "dashboard.php"; 
}
?> 

