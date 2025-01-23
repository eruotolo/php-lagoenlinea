<?php
/*********************** HARDCODE *****************************************
$_POST['fname'] = "Nacho";
$_POST['asunto'] = 'Jaja';
$_POST['otherField'] = 'Jojo';
$_POST['email'] = 'nachod@da.com';
$_POST['comment'] = 'Comment';
$_POST['subasunto'] = 'subasunto';
/*****************************************************************************/
function sendEmailGmail($emailreceiver, $userfullname, $subject, $html, $text, $file, $filename) {
	


	include_once('PhpMailer/PHPMailer.php');
	include_once('PhpMailer/Exception.php');
	include_once('PhpMailer/SMTP.php');
	
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = "smtp";	
	
	$mail->SMTPDebug  = 0;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = "facturalive.cfe4@gmail.com";
	$mail->Password   = "xvbtypbqvaefqfvq";	
		
	$mail->IsHTML(true);
	$mail->AddAddress($emailreceiver, $userfullname);
	$mail->SetFrom("sender@lagoenlinea.com", "Lago en Linea");
//	$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
//	$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
	$mail->Subject = $subject;
	//$attachment_content = chunk_split(base64_encode($file));
	//$mail->addStringAttachment($file,$filename);	
	$content = $html;
	$mail->MsgHTML($content); 
	
	$result = array();
	if(!$mail->Send()) {
	  $result['result'] = 0;
	  $result['error'] = $mail->ErrorInfo;
	  return json_encode($result);
	} else {
	  $result['result'] = 1;
	  return json_encode($result);
	}	
}

$fname = $_POST['fname'];
$asunto = $_POST['asunto'];
$otherField = $_POST['otherField'];
$name = $fname;
$email = $_POST['email'];
$html = $_POST['comment'];
$subasunto = $_POST['subasunto'];
$message = "Hola,<br/>Asunto: $asunto<br/>Opcion: $subasunto<br/>Name: $name<br/>Email: $email<br/>Message: $html<br/>";	

//$email = sendEmail("alberto.fernandez@uss.cl", $fname, "Mensaje enviado desde el formulario de contacto Lago En Línea", $message, $message, $file, $filename);
$email = sendEmailGmail("edgardoruotolo@gmail.com", $fname, "Se envio un mensaje por la pagina", $message, $message, $file, $filename);
$output['status'] = 1;
$output['email'] = $email;
echo json_encode($output);


?>