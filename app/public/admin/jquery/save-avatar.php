<?php 
	$userid = $_POST['userid'];
	$base64_string = $_POST['resp'];
	//echo $resp;
    $ifp = fopen("../images/avatar/$userid.jpg", "wb"); 

    $data = explode(',', $base64_string);

    fwrite($ifp, base64_decode($data[1])); 
    fclose($ifp); 	
?>