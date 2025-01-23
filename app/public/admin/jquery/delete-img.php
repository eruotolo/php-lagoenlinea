<?php
	include('../include/conf/dbselect.php');	
	$type = $_POST['type'];
	$cicle = $_POST['cicle'];
	$year = $_POST['year'];
	$t = $_POST['t'];
	
	
	
	$query0 = mysql_query("DELETE FROM $t WHERE Year = '$year' and Cicle = $cicle and Type = $type") or die(mysql_error());
	$output['status'] = 1;	
		
	echo json_encode($output); // Responder	
	
	
?>