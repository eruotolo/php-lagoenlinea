<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$sql = "INSERT INTO `puntos_muestras_lp`
				(`Fecha`,
				`oxigeno`,
				`temperatura`,
				`ph`,
				`conductividad`,
				`PuntoID`)
				VALUES
				('{$_POST['fecha']}',
				{$_POST['oxigeno']},
				{$_POST['temperatura']},
				{$_POST['ph']},
				{$_POST['conductividad']},
				{$_POST['puntoid']});
				";
	$query0 = mysql_query($sql) or die(mysql_error());
	echo $sql;
?>