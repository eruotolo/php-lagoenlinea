<?php

include('tokenFunctions.php');

function run($access_token) {
	$url = "http://dataweb.innovex.cl/api_dataweb/all_monitors/";

	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$headers = array(
	   "Accept: application/json",
	   "Authorization: Bearer $access_token",
	);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	//for debug only!
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$resp = curl_exec($curl);

	return $resp;
	curl_close($curl);
}

$token = getActualToken();
$run = run($token['access_token']);
if ($run == '') {
	$newtoken = refreshToken($token);
} else {
	echo json_encode($run);
}

?>