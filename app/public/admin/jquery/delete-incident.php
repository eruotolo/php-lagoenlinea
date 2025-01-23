<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$query0 = mysql_query("DELETE FROM `incidentes` WHERE ID = $id") or die(mysql_error());		

		
		

?>