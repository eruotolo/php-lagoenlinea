<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$userid = $_POST['userid'];
	$query0 = mysql_query("UPDATE `users`
								SET
								`onlymuestras` = 0
								WHERE `user_id` = $id;
								") or die(mysql_error());		

		
		

?>