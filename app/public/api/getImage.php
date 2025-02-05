<?php
	include('../admin/include/conf/dbselect.php');	
	$year = $_POST['year'];
	$type = $_POST['type'];
	$month = $_POST['month'];
	$tipo = $_POST['tipo'];

	if ($type == 't') {	
		$table = 'teledeteccion';
	} else {
		$table = 'metagenomica';
	}
	
	$sql1a = "SELECT * FROM $table WHERE Year = $year AND Cicle = $month AND Type = $tipo";			
	$result=mysql_query($sql1a) or die();
	while ($row = mysql_fetch_assoc($result)) {
		$ImagePath = $row['ImagePath'];	
		echo "<a class='lightbox' href='admin/api/$ImagePath'><img src='admin/api/$ImagePath' style='width:100%'></a>";
	}		
		
		

?>