<?php
	include('../admin/include/conf/dbselect.php');	
	$year = $_POST['year'];
	$type = $_POST['type'];

	if ($type == 't') {	
		$table = 'teledeteccion';
	} else {
		$table = 'metagenomica';
	}
		
	$sql1a = "SELECT distinct Cicle FROM $table WHERE Year = '$year' order by Cicle ASC";	
	$result=mysql_query($sql1a) or die();
	$images = array();
	while ($row = mysql_fetch_assoc($result)) {
		$month = $row['Cicle'];
		switch ($month) {
			case 1:
				$mes = "Enero";
				break;
			case 2:
				$mes = "Febrero";
				break;
			case 3:
				$mes = "Marzo";
				break;
			case 4:
				$mes = "Abril";
				break;
			case 5:
				$mes = "Mayo";
				break;
			case 6:
				$mes = "Junio";
				break;
			case 7:
				$mes = "Julio";
				break;
			case 8:
				$mes = "Agosto";
				break;
			case 9:
				$mes = "Septiembre";
				break;
			case 10:
				$mes = "Octubre";
				break;
			case 11:
				$mes = "Noviembre";
				break;
			case 12:
				$mes = "Diciembre";
				break;																
		}			
		echo "<li class='monthli' month='$month' mes='$mes'>$mes</li>";
	}		
	
	

?>