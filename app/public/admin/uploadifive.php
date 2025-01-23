<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/

// Set the uplaod directory
$uploadDir = "library/{$_POST['type']}/{$_POST['subtype']}/";

if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $uploadDir;
	
	$array = explode('.', $_FILES['Filedata']['name']);
	$extension = end($array);
	
	if ($_POST['subtype'] == 'files') {
		$filenamerandom = $_FILES['Filedata']['name'];
		$target_file = $targetPath . $filenamerandom;
	} else {
		$filenamerandom = uniqid("{$_POST['subtype']}_", true);
		$target_file = $targetPath . $filenamerandom.".".$extension;
	}
	

	$move = move_uploaded_file($tempFile, $target_file);
	if ($move) {
		$status = "Se movio";
	} else {
	}
	echo "Upps";
}



?>