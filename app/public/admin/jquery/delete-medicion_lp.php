<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$sql = "DELETE FROM puntos_muestras_lp WHERE ID = $id";
	$query0 = mysql_query($sql) or die(mysql_error());

?>