<?php
	include('../include/conf/dbselect.php');	
	$type = $_POST['type'];
	$cicle = $_POST['cicle'];
	$year = $_POST['year'];
	$t = $_POST['t'];
	
	
	
	$query0 = mysql_query("UPDATE `metagenomica-tablas`
				SET
				`Tabla2` = NULL
				 WHERE Year = '$year' and Cicle = $cicle") or die(mysql_error());
	$output['status'] = 1;	
		
	echo json_encode($output); // Responder	
	
	
?>