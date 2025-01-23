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
	$a = "";
	
	$sql1a = "SELECT * FROM $table WHERE Year = $year AND Cicle = $month AND Type = $tipo";			
	$result=mysql_query($sql1a) or die();
	while ($row = mysql_fetch_assoc($result)) {
		$Titulo = $row['Titulo'];
		$ImagePath = $row['ImagePath'];	
		$a = $a."<a class='example-image-link' href='admin/api/$ImagePath' data-lightbox='example-set'><img class='example-image w-[50%] ml-[25%]' src='admin/api/$ImagePath' alt='Teledetección'/></a>";
	}		
		
	$output['a'] = $a;
	$output['Titulo'] = $Titulo;
	echo json_encode($output);		

?>