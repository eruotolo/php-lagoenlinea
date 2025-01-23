<?php
	include('../include/conf/dbselect.php');	
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	$sql = "UPDATE `ubicacion`
								SET
								`Lng` = $lng,
								`Lat` = $lat;
								";
	echo $sql;							
	$query0 = mysql_query($sql) or die(mysql_error());		
	
		
		

?>