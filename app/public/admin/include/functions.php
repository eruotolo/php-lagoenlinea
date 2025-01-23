<?php
function datePretty($var) {
   	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$fecha =  date('d',strtotime($var))." de ".$meses[date('n',strtotime($var))-1]. " del ".date('Y',strtotime($var)) ; 
	return $fecha;
}

function datePrettySmall($var) {
   	$meses = array("Ene.","Feb.","Mar.","Abr.","May.","Jun.","Jul.","Ago.","Sep.","Oct.","Nov.","Dic.");
	$fecha =  date('d',strtotime($var))." ".$meses[date('n',strtotime($var))-1]. " ".date('Y',strtotime($var)) ; 
	return $fecha;
}

function getAvatar($userid){
if (file_exists("images/avatar/$userid.jpg")) {
	$avatar_photo_url = "images/avatar/$userid.jpg?t=" . time();
} else {$avatar_photo_url = "images/avatar/noavatar.jpg";}	
return $avatar_photo_url;
}

function getNaturalezaJuridica($value) {
	if ($value == 1) {
		$return = "Sociedad Anonima";
	} else 	if ($value == 2) {
		$return = "S.R.L.";
	} else 	if ($value == 3) {
		$return = "Unipersonal";
	} else 	if ($value == 4) {
		$return = "Sociedad de Hecho";
	}
	return $return;
}

function getTipoAportacion($value) {
	if ($value == 1) {
		$return = "Rural";
	} else if ($value == 2) {
		$return = "Industria y Comercio";
	} else if ($value == 3) {
		$return = "Servicio Personal";
	}
	return $return;
}

function getContribuyente($value) {
	if ($value == 1) {
		$return = "Cede";
	} else if ($value == 2) {
		$return = "No Cede";
	} 
	return $return;
}

function getRegimenFactElec($value) {
	if ($value == 1) {
		$return = "Si";
	} else if ($value == 2) {
		$return = "No";
	} 
	return $return;
}

function Database_Filter($value) {
    $newVal = trim($value);
    $newVal = htmlspecialchars($newVal);
    $newVal = mysql_real_escape_string($newVal);
    return $newVal;
}
?>