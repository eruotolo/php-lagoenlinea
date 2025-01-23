<?php
$id = $_POST['id'];
$emailtosend = $_POST['email'];
$message = "¡Felicitaciones! <br/><br/>Has completado tu Diagnóstico Rápido de Sostenibilidad y estás un paso más cerca de la sostenibilidad activa.<br/>Para revisar el reporte de tu organización con las fortalezas y brechas en el acercamiento a una gestión y operación sostenibles, ingresa <a href='https://redimpacta.cl/diagnostico/resumen.php?eid={$id}'>aquí</a>.<br/>Asegúrate de ingresar con el mismo correo con el que te identificaste la primera vez.<br/>Para iniciar un nuevo diagnóstico, ingresa con un correo diferente.<br/>Si quieres saber cómo Red Impacta te puede ayudar a abordar estos desafíos, visita <a href='https://www.redimpacta.cl'>www.redimpacta.cl</a>. <br/><br/> Equipo Red Impacta.";
//$message = "Hola,<br/>Puedes ver el resumen de la encuesta aqui: https://redimpacta.cl/diagnostico/resumen.php?eid={$id}";	
$email = sendEmail($emailtosend, $email, "La encuesta fue completada", $message, $message, $file, $filename);
$output['status'] = 1;
$output['email'] = $email;
echo json_encode($output);



function sendEmail($emailreceiver, $userfullname, $subject, $html, $text, $file, $filename) {

	$apptitle = 'Lago en Linea';	
	
	include_once('mailin/Mailin.php');
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
?>