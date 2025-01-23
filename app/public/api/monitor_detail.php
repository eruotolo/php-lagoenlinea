<?php

$url = "http://dataweb.innovex.cl/api_dataweb/monitor_detail/?monitor_id=1549";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: Bearer Vq7fng6iJObd5zMrYW9yMm7fsVRHP5",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo json_encode($resp[0]);

?>