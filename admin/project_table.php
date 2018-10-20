<?php 
$servername ="localhost";
$username="root";
$password="";
$db="db_projcheck";


$conn =mysql_connect($servername,$username,$password);
mysql_select_db($db);

$sql_projectTable = mysql_query("SELECT * FROM tbl_project");
while($dataProjectTable = mysql_fetch_array($sql_projectTable)){
	?>
	<tr>
		<td><?php echo $dataProjectTable['Contructor']; ?></td>
		<td><?php echo $dataProjectTable['dateStarted']; ?></td>
		<td><?php echo $dataProjectTable['contructCompletionDate']; ?></td>
		<td><?php echo $dataProjectTable['contructCost']; ?></td>
		<td><?php echo $dataProjectTable['constructionConsultant']; ?></td>
		<td><?php echo $dataProjectTable['implementingOffice']; ?></td>
		<td><?php echo $dataProjectTable['sourcesOfFund']; ?></td>

	</tr>
	<?php

}


 ?>