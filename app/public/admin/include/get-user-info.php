<?php
if ($userid <> '') {
	$sql="SELECT * FROM users WHERE user_id = $userid";
	$result=mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$fullname = "{$row['firstname']} {$row['lastname']}";
		$password_user = $row['password'];
		$username = $row['nickname'];
		$address = $row['address'];
		$city = $row['city'];
		$country = $row['country'];
		$state = $row['state'];
		$phone = $row['phone'];
		$email = $row['email'];
		$lat = $row['lat'];
		$lng = $row['lng'];	
		$desc = $row['description'];
		$country_name = $row['CountryName'];
		$state_name = $row['StateName'];
		$city_name = $row['CityName'];
		$service_radio = $row['service_radio'];
		$mainuserid = $row['UserID'];
		$admin = $row['admin'];
		$onlymuestras = $row['onlymuestras'];
	}

	$sql="UPDATE users SET lastlogin = NOW() WHERE user_id ='{$_GET[userid]}'";
	$result=mysql_query($sql);


	if (file_exists("images/avatar/{$_GET[userid]}.jpg")) {
		$avatar_photo_url = "images/avatar/{$_GET[userid]}.jpg?t=" . time();
	} else {$avatar_photo_url = "images/avatar/noavatar.jpg";}

	$administrador = 0;
	if ($admin == 1) {
		$administrador = 1;
	}
}

?>