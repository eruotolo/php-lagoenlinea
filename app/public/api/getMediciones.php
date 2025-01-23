<?php
	include('../admin/include/conf/dbselect.php');	

	$sql1a = "SELECT * 
				FROM puntos_muestras
				WHERE Fecha >= '{$_POST['since']}' AND Fecha <= '{$_POST['to']}' AND PuntoID = '{$_POST['sensor']}'
				ORDER BY Fecha ASC";	
	$result=mysql_query($sql1a) or die();
	$muestras = array();
	$muestras_constant = array();
	while ($row = mysql_fetch_assoc($result)) {
		$label[] = $row['Fecha'];	
		$muestras[] = $row['Valor'];
		$muestras_constant[] = 1000;	
		$muestras_last = $row['Valor'];	
		$muestras_last_fecha = $row['Fecha'];
	}		
	$output = array();
	$output['label'] = $label;
	$output['muestras'] = $muestras;
	$output['muestras_constant'] = $muestras_constant;
	$output['muestras_last'] = $muestras_last;
	$output['muestras_last_fecha'] = $muestras_last_fecha;
	
	echo json_encode($output);

?>