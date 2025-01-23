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
		$img = "<a class='lightbox' href='../admin/api/$ImagePath'><img src='../admin/api/$ImagePath' style='width:100%'></a>";
	}		

	$sql1a = "SELECT * FROM `metagenomica-tablas` where Year = '$year' and Cicle = '$month' order by Year ASC, Cicle ASC";
	$result = mysql_query($sql1a) or die('{"error"=>"Error actualizando la base de datos","status"=>"0"}');
	while ($row = mysql_fetch_assoc($result)) {
		$Tabla1 = $row['Tabla1'];
		$Tabla2 = $row['Tabla2'];
	}	
	
	$output['img'] = $img;
	$output['Tabla1'] = $Tabla1;
	$output['Tabla2'] = $Tabla2;
	echo json_encode($output);

	
		

?>