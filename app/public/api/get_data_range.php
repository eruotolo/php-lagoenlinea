<?php

	include('tokenFunctions.php');

	function run($access_token) {
		$url = "http://dataweb.innovex.cl/api_dataweb/get_data_range/?monitor_id=1549&unixtime_since={$_GET['since']}&unixtime_until={$_GET['until']}&sensor_id=7003";

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

		$return['cond'] = $resp;
		curl_close($curl);
		

/**********************************************************************************************************/

		$url = "http://dataweb.innovex.cl/api_dataweb/get_data_range/?monitor_id=1549&unixtime_since={$_GET['since']}&unixtime_until={$_GET['until']}&sensor_id=7002";

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

		$return['oxygen'] = $resp;
		curl_close($curl);	

		
		
/**********************************************************************************************************/

		$url = "http://dataweb.innovex.cl/api_dataweb/get_data_range/?monitor_id=1549&unixtime_since={$_GET['since']}&unixtime_until={$_GET['until']}&sensor_id=7297";

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

		$return['turvidity'] = $resp;
		curl_close($curl);	

		return $return;		
				
	}
/*
	$token = getActualToken();
	$run = run($token['access_token']);
	if ($run == '') {
		$newtoken = refreshToken($token);
	} else {
		echo json_encode($run);
	}
*/
	$token = getActualToken();
	if ($token['access_token'] == '') {		
		$newtoken = refreshToken($token);		
		$run = run($newtoken['access_token']);
		echo json_encode($run);
	} else {
		$run = run($token['access_token']);
		if($run == '') {
			$newtoken = refreshToken($token);		
			$run = run($newtoken['access_token']);			
		}
		echo json_encode($run);
	}
?>