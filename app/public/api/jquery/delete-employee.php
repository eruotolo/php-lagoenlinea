<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$userid = $_POST['userid'];
	$query0 = mysql_query("DELETE FROM users WHERE user_id = $id and UserID = $userid") or die(mysql_error());		

		
		

?>