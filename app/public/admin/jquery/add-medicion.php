<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$sql = "INSERT INTO `puntos_muestras`
				(`Fecha`,
				`Valor`,
				`PuntoID`)
				VALUES
				('{$_POST['fecha']}',
				{$_POST['valor']},
				{$_POST['puntoid']});
				";
	$query0 = mysql_query($sql) or die(mysql_error());
	echo $sql;
?>