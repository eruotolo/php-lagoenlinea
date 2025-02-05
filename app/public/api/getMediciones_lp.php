<?php
	include('../admin/include/conf/dbselect.php');	

	$sql1a = "SELECT * 
				FROM puntos_muestras_lp
				WHERE Fecha >= '{$_POST['since']}' AND Fecha <= '{$_POST['to']}' AND PuntoID = '{$_POST['sensor']}'
				ORDER BY Fecha ASC";	
	$result=mysql_query($sql1a) or die();
	$muestras = array();
	$muestras_constant = array();
	$ph = array();
	$ph_constant = array();
	$temperatura = array();
	$temperatura_constant = array();
	$conductividad = array();
	$conductividad_constant = array();
	while ($row = mysql_fetch_assoc($result)) {
		$label[] = $row['Fecha'];	
		$muestras[] = $row['oxigeno'];
		$muestras_last = $row['oxigeno'];
		$muestras_constant[] = 1000;	
		$muestras_last_fecha = $row['Fecha'];
		$ph[] = $row['ph'];
		$ph_last = $row['ph'];		
		$temperatura_last = $row['temperatura'];		
		$temperatura[] = $row['temperatura'];		
		$conductividad_last = $row['conductividad'];		
		$conductividad[] = $row['conductividad'];		
	}		
	$output = array();
	$output['label'] = $label;
	$output['muestras'] = $muestras;
	$output['muestras_last'] = $muestras_last;

	$output['conductividad'] = $conductividad;
	$output['conductividad_last'] = $conductividad_last;

	$output['ph'] = $ph;
	$output['ph_last'] = $ph_last;

	$output['temperatura'] = $temperatura;
	$output['temperatura_last'] = $temperatura_last;

	
	$output['muestras_constant'] = $muestras_constant;
	$output['muestras_last_fecha'] = $muestras_last_fecha;
	
	echo json_encode($output);

?>