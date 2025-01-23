<?php
	include('../include/conf/dbselect.php');	
	$src = $_POST['src'];
	$texto = $_POST['texto'];
	$input = $_POST['input'];	
	
	$newfile = str_replace($texto,$input,$src);
	echo "$src => $newfile";
	
	rename("../".$src, "../".$newfile);
	

?>