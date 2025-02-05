<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$userid = $_POST['userid'];
	$query0 = mysql_query("UPDATE `users`
								SET
								`admin` = 1
								WHERE `user_id` = $id AND `UserID` = $userid;
								") or die(mysql_error());		

		
		

?>