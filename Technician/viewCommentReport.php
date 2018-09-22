<?php 
if(isset($_REQUEST['viewCommentReport'])){

$servername ="localhost";
$username="root";
$password="";
$db="monitoringsystemdatabase";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$viewCommentReport = $_REQUEST['viewCommentReport'];

$sqlAccount = mysql_query("SELECT * FROM tbl_login WHERE id='$viewCommentReport'");
$dataAccount = mysql_fetch_array($sqlAccount);



?>
<div class="manage-container view-reports with-banner">
	<strong class="title"><?php echo $dataAccount['account']; ?></strong>

	<div class="manage-inner-container">

		<div class="table-container" id="wrapper">
			<div class="btndivstyle">
			<input type="text" class="search" id="myInput" onkeyup="myFunction()" placeholder="Search names..">
			</div>
				<table id="myTable">
					<?php include"Technician/technicianReport_modal.php"; ?>
				<thead>
					<th>Message</th>
					<th>Date</th>
					<th>Time</th>
					<th>Reply</th>
					<th>Status</th>
					<th></th>
			
				</thead>	

				<tbody>
					<?php 
					$count="0";
				
					$sql_Report = mysql_query("SELECT * FROM report WHERE report_id='$viewCommentReport'");
						while($dataReport = mysql_fetch_array($sql_Report)){
							$count++;
							$reportID = $dataReport['id'];

							$sql_reportComment = mysql_query("SELECT * FROM reportcomment WHERE report_id='$reportID'");
							$data_reportComment = mysql_fetch_array($sql_reportComment);

							$report_message = $data_reportComment['report_message'];
							 $report_status = $data_reportComment['report_status'];

							if($report_message == ""){
								$report_message = "None";
							
							}else{
								$report_message;
							
							}

							
							?>
							<tr>
								
								<td><?php echo $dataReport['report_message']; ?></td>
								<td><?php echo $dataReport['report_date']; ?></td>
								<td><?php echo $dataReport['report_time']; ?></td>

								<td><?php echo $report_message; ?></td>
								<?php 
								if($report_status ==""){
									?>
								<td><?php echo"None"; ?></td>
									<?php
								}else{
									?>
									<td><?php echo $report_status; ?></td>
									<?php
								}
								 ?>
								<td><button id="<?php echo $count; ?>" value="<?php echo $dataReport['id']; ?>" class="reportClass" onClick="viewValueReport(<?php echo $dataReport['id']; ?>)">Comment</button></td>
								
							</tr>
							<?php

						}

					 ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php

	
}
 ?>
 <?php 	
  $count;
$scriptcount="0";
for (	$i=0; 	$i <$count ; 	$i++) { 
	 $scriptcount++;

	?>

<script>

	var modal = document.getElementById('myModal');

	var btn = document.getElementById(<?php echo $scriptcount; ?>);

	var close = document.getElementsByClassName("close")[0];

	$(btn).click(function(){
		$(modal).css('display', 'block');
	});

	$(close).click(function(){
		$(modal).css('display', 'none');
	});

	$(window).click(function(){
		if (event.target == modal) {
	        $(modal).css('display', 'none');
	    }
	});

</script>

<?php
}


  ?>

 

