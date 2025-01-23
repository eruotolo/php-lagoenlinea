<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$query0 = mysql_query("DELETE FROM `documentos-complementarios` WHERE ID = $id") or die(mysql_error());		

		
		

?>