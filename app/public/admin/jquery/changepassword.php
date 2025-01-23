<?php
	include('../include/conf/dbselect.php');
	$password = md5($_POST['password']);	
	$sql = "UPDATE `users`
				SET
				`password` = '$password'
				WHERE `user_id` = {$_POST['id']};
				";
	include('../../assets/mail/send_mail.php');
	$emailtosend = $_POST['email'];
	$message = "Hola, <br />Tu usuario ha sido creado. A continuación se especifican las credenciales<br><br><b>Usuario: </b> {$_POST['nickname']}<br><b>Contraseña: </b> $rp <br><b>Para ingresar al back-end:</b> https://lagoenlinea.cl/admin";	
	$email = sendEmailGmail($emailtosend, $email, "Tu password fue modificado", "Nuevo password: {$_POST['password']}", $message, $file, $filename);					
	$query0 = mysql_query($sql) or die(mysql_error());		
	
		
		

?>