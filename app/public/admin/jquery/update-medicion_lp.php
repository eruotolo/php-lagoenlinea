<?php
	include('../include/conf/dbselect.php');	
	
	$sql = "UPDATE `puntos_muestras_lp`
						SET
						`Fecha` = '{$_POST['fecha']}',
						`oxigeno` = {$_POST['oxigeno']},
						`temperatura` = {$_POST['temperatura']},
						`ph` = {$_POST['ph']},
						`conductividad` = {$_POST['conductividad']}
						WHERE `ID` = {$_POST['rowid']};
						";
	echo $sql;
	$query0 = mysql_query($sql) or die(mysql_error());
	
?>