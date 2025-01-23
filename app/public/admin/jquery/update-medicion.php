<?php
	include('../include/conf/dbselect.php');	
	
	$sql = "UPDATE `puntos_muestras`
						SET
						`Fecha` = '{$_POST['fecha']}',
						`Valor` = {$_POST['valor']}
						WHERE `ID` = {$_POST['rowid']};
						";
	echo $sql;
	$query0 = mysql_query($sql) or die(mysql_error());
	
?>