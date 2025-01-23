<?php
	
	include('../admin/include/conf/dbselect.php');	
	
	$nombre = $_POST['nombre'];
	$autor = $_POST['autor'];
	$email = $_POST['email'];
	$lugar = $_POST['lugar'];
	$categoria = $_POST['categoria'];
	$descripcion = $_POST['descripcion'];
	$txtlat = $_POST['txtlat'];
	$txtlng = $_POST['txtlng'];
	$estado = $_POST['estado'];
	
	if ($estado == '') {
		$estado = 'Borrador';
	}
	
	$target_dir = "incidents_images/";
	
	/*************************************************** UPLOAD IMAGE 1 ****************************************/
	
	if ($_FILES['file1'] <> '') {	
		$array = explode('.', $_FILES['file1']['name']);
		$extension = end($array);		
		$filenamerandom = uniqid("Foto_", true);
		$target_file = $target_dir . basename("$filenamerandom.{$extension}");		
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image filee is a actual image or fake image
		$check = getimagesize($_FILES["file1"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
			$error = "La Foto 1 no es una imagen";
		}
		// Check filee size
		if ($_FILES["file1"]["size"] > 500000) {
		  $error = "La Foto 1 es muy grande";
		  $uploadOk = 0;
		}
		// Allow certain filee formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  $error = "La Foto 1 no es un archivo JPG, JPEG, PNG & GIF";
		  $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
				$output['statusImage'] = 0;
				$output['error'] = $error;
		} else {
			// Check if filee already exists
			if (file_exists($target_file)) {
				unlink($target_file);
			}			
			
		}
		
		if ($uploadOk <> 0 && move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
			$target_file_image1 = $target_file;	
		} else {
			$uploadOk = 0;
			$error = "La Foto 1 no pudo ser subida";
			$target_file_image1 = $ImagePath;
		}
		if ($uploadOk == 0) {
			$output['status'] = 0;			
			echo json_encode($output);
			die();	
		}		
		
	}	
	

	
	/*************************************************** UPLOAD IMAGE 2 ****************************************/
	$error = "";
	$target_file = '';
	if ($_FILES['file2'] <> '') {	
		$array = explode('.', $_FILES['file2']['name']);
		$extension = end($array);		
		$filenamerandom = uniqid("Foto_", true);
		$target_file = $target_dir . basename("$filenamerandom.{$extension}");		
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image filee is a actual image or fake image
		$check = getimagesize($_FILES["file2"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
			$error = "La Foto 2 no es una imagen";
		}
		// Check filee size
		if ($_FILES["file2"]["size"] > 500000) {
		  $error = "La Foto 2 es muy grande";
		  $uploadOk = 0;
		}
		// Allow certain filee formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  $error = "La Foto 2 no es un archivo JPG, JPEG, PNG & GIF";
		  $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
				$output['statusImage'] = 0;
				$output['error'] = $error;
		} else {
			// Check if filee already exists
			if (file_exists($target_file)) {
				unlink($target_file);
			}			
			
		}
		
		if ($uploadOk <> 0 && move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file)) {
			$target_file_image2 = $target_file;	
		} else {
			$uploadOk = 0;
			$error = "La Foto 2 no pudo ser subida";
			$target_file_image2 = $ImagePath;
		}
		if ($uploadOk == 0) {
			$output['status'] = 0;			
			echo json_encode($output);
			die();	
		}		
		
	}	
	
	/*************************************************** UPLOAD IMAGE 3 ****************************************/
	$error = "";
	$target_file = '';
	if ($_FILES['file3'] <> '') {	
		$array = explode('.', $_FILES['file3']['name']);
		$extension = end($array);		
		$filenamerandom = uniqid("Foto_", true);
		$target_file = $target_dir . basename("$filenamerandom.{$extension}");		
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image filee is a actual image or fake image
		$check = getimagesize($_FILES["file3"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0;
			$error = "La Foto 3 no es una imagen";
		}
		// Check filee size
		if ($_FILES["file3"]["size"] > 500000) {
		  $error = "La Foto 3 es muy grande";
		  $uploadOk = 0;
		}
		// Allow certain filee formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  $error = "La Foto 3 no es un archivo JPG, JPEG, PNG & GIF";
		  $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
				$output['statusImage'] = 0;
				$output['error'] = $error;
		} else {
			// Check if filee already exists
			if (file_exists($target_file)) {
				unlink($target_file);
			}			
			
		}
		
		if ($uploadOk <> 0 && move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file)) {
			$target_file_image3 = $target_file;	
		} else {
			$uploadOk = 0;
			$error = "La Foto 3 no pudo ser subida";
			$target_file_image3 = $ImagePath;
		}
		if ($uploadOk == 0) {
			$output['status'] = 0;			
			echo json_encode($output);
			die();	
		}		
		
	}	
		
	
	/******************************************************* Insert Into DB ********************************************/
	
	$sql1a = "INSERT INTO `incidentes`
				(`Nombre`,
				`Fecha`,
				`Autor`,
				`Email`,
				`Lugar`,
				`Categoria`,
				`Descripcion`,
				`Lat`,
				`Lng`,
				`Estado`,
				File1,
				File2,
				File3)
				VALUES
				('$nombre',
				NOW(),
				'$autor',
				'$email',
				'$lugar',
				'$categoria',
				'$descripcion',
				$txtlat,
				$txtlng,
				'$estado',
				'$target_file_image1',
				'$target_file_image2',
				'$target_file_image3');
				";	
					
	$result1a=mysql_query($sql1a,$conn) or die(mysql_error());
	$id = mysql_insert_id($conn);	
	$output['status'] = 1;	
	$output['id'] = $id;
	
	function sendEmail($emailreceiver, $userfullname, $subject, $html, $text, $file, $filename) {

		$apptitle = 'Lago en Linea';	
		
		include_once('../admin/assets/mail/mailin/Mailin.php');
		$mailin = new Mailin('edgardo@indaga.me', 'AYFRpLaw56bgBWJG');
		$mailin->
		addTo($emailreceiver, $userfullname)->
		setFrom('contacto@lagoenlinea.cl', $apptitle)->
		setReplyTo('contacto@lagoenlinea.cl',$apptitle)->
		//setBcc('nachodeleon77@gmail.com')->
		setSubject($subject)->
		setText('Comprobante fiscal electronico')->
		setHtml($html);
		//$attachment_content = chunk_split(base64_encode($file));
		//$mailin->createAttachment(array("$filename"=>$attachment_content));
		
		$res = $mailin->send();
	//	unlink($filename);
	//	echo $res;
		return $res;
		/*
		El mensaje de éxito se enviará de esta forma:
		{'result' => true, 'message' => 'E-MAILS enviados'}
		*/	
	}	
	
	$emailtosend = 'alberto.fernandez@uss.cl';
	//$emailtosend = 'nachodeleon77@gmail.com';
	$message = "Estimado/a<br><br>Se ha registrado una nueva incidencia en la plataforma Lago en Línea. Para publicarla ingresa con tu usuario a https://lagoenlinea.cl/admin";	
	$email = sendEmail($emailtosend, "Alberto Fernandez Ortego", "Nueva incidencia registrada", $message, $message, "", "");
	//print_r($email);	
				
	echo json_encode($output); // Responder	


	
	
	
	
?>