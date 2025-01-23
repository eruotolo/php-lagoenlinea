<?php
	include('../include/conf/dbselect.php');	
	$id = $_POST['id'];
	$userid = $_POST['userid'];
	$sql = "UPDATE `users`
			SET
			`onlymuestras` = 1,
			admin = 0
			WHERE `user_id` = $id;
			";
	echo $sql;
	$query0 = mysql_query($sql) or die(mysql_error());		

		
		

?>