<?php
	$email = sendEmailGmailx("nachodeleon77@gmail.com", "Nacho", "Subject", "HTML","HTML", $file, $filename);
print_r($email);
	
	function sendEmailGmailx($emailreceiver, $userfullname, $subject, $html, $text, $file, $filename) {

		include_once('../assets/mail/PhpMailer/PHPMailer.php');
		include_once('../assets/mail/PhpMailer/Exception.php');
		include_once('../assets/mail/PhpMailer/SMTP.php');
		
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
?>