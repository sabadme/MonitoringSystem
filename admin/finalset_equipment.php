<?php 
if(isset($_REQUEST['Add_equipment_setFinal'])){

		if(isset($_REQUEST['finalset_equipment'])){
	 $finalset_equipment=$_REQUEST['finalset_equipment'];

	 for ($i=0; $i < count($finalset_equipment) ; $i++) { 
	 	echo $check=$finalset_equipment[$i];
	 

}
}
}

 ?>