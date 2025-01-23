<?php
	if (!empty($_POST)) {
		$rp = randomPassword(10,3,"lower_case,numbers")[0];		
		$password = md5($rp);
		$sql = "INSERT INTO `users`
									(`nickname`,
									`password`,
									`description`,
									`email`,
									`dateregistered`,
									`lastlogin`,
									`firstname`,
									`lastname`,
									`address`,
									`city`,
									`country`,
									`phone`,
									`UserID`)
									VALUES
									('{$_POST['nickname']}',
									'$password',
									'{$_POST['description']}',
									'{$_POST['email']}',
									NOW(),
									NULL,
									'{$_POST['firstname']}',
									'{$_POST['lastname']}',
									'{$_POST['address']}',
									'{$_POST['city']}',
									'{$_POST['country']}',
									'{$_POST['phone']}',
									1);";
		$result=mysql_query($sql);
			$lastid = mysql_insert_id();						
			echo "<script type='text/javascript'>
					   window.location = 'index.php?userid=$userid&section=employee-profile&created=y&id=$lastid';
				  </script>";
				  
		$emailtosend = $_POST['email'];
		$message = "Hola, <br />Tu usuario a sido creado. A continuacion se especifican las credenciales<br><br><b>Usuario: </b> {$_POST['nickname']}<br><b>Contraseña: </b> $rp <br><b>Para ingresar al back-end:</b> https://lagoenlinea.cl/admin";	
		$email = sendEmail($emailtosend, $email, "Credenciales de nuevo usuario", $message, $message, $file, $filename);			  
	}	


	function randomPassword($length,$count, $characters) {
	 
	// $length - the length of the generated password
	// $count - number of passwords to be generated
	// $characters - types of characters to be used in the password
	 
	// define variables used within the function    
		$symbols = array();
		$passwords = array();
		$used_symbols = '';
		$pass = '';
	 
	// an array of different character types    
		$symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
		$symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$symbols["numbers"] = '1234567890';
		$symbols["special_symbols"] = '!?~@#-_+<>[]{}';
	 
		$characters = split(",",$characters); // get characters types to be used for the passsword
		foreach ($characters as $key=>$value) {
			$used_symbols .= $symbols[$value]; // build a string with all characters
		}
		$symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
		 
		for ($p = 0; $p < $count; $p++) {
			$pass = '';
			for ($i = 0; $i < $length; $i++) {
				$n = rand(0, $symbols_length); // get a random character from the string with all characters
				$pass .= $used_symbols[$n]; // add the character to the password string
			}
			$passwords[] = $pass;
		}
		 
		return $passwords; // return the generated password
	}



	function sendEmail($emailreceiver, $userfullname, $subject, $html, $text, $file, $filename) {

		$apptitle = 'Lago en Linea';	
		
		include_once('assets/mail/mailin/Mailin.php');
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
<style>
.errorselect {
  background-color: #F5CBCB;
}
.successselect {
  background-color: green;
}
</style>         
			<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>"><?php echo $lng_edit_info ?></h4>
                            </div>
                            <div class="content">
                                <form action="index.php?userid=<?php echo $userid ?>&section=user-add" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $lng_username ?></label>
                                                <input id='nickname' name="nickname" type="text" class="form-control" placeholder="<?php echo $lng_username ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $lng_email ?></label>
                                                <input name='email' type="email" class="form-control" placeholder="<?php echo $lng_email ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $lng_firstname ?></label>
                                                <input name='firstname' type="text" class="form-control" placeholder="<?php echo $lng_firstname ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $lng_lastname ?></label>
                                                <input name='lastname' type="text" class="form-control" placeholder="<?php echo $lng_lastname ?>">
                                            </div>
                                        </div>
                                    </div>
									
	                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?php echo $lng_address ?></label>
                                                <input name='address' type="text" class="form-control" placeholder="<?php echo $lng_address ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><?php echo $lng_city  ?></label>
                                                <input name='city' type="text" class="form-control" placeholder="<?php echo $lng_city  ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><?php echo $lng_country ?></label>
                                                <input name='country' type="text" class="form-control" placeholder="<?php echo $lng_country ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><?php echo $lng_phone ?></label>
                                                <input name='phone' type="text" class="form-control" placeholder="<?php echo $lng_phone ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?php echo $lng_aboutme ?></label>
                                                <textarea name='description' rows="3" class="form-control" placeholder="<?php echo $lng_writeaboutme ?>"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button id='send_btn' type="submit" class="btn noblock <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_insert ?></button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden">
                        <div class="card card-user">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>"><?php echo $lng_profile_pic ?></h4>
                            </div>
							<div class="content">
									<div class="upload-demo-wrap">
										<div id="upload-demo"></div>
									</div>
								<input type="file" id="upload" value="Choose a file" accept="image/*" />
							</div>	
                            <hr>
                            <div class="text-center" style='padding:10px'>
								<button  type="submit" class="upload-result noblock btn <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_update ?></button>
								<div class="clearfix"></div>							
                            </div>							
                        </div>
                    </div>

                </div>
            </div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#send_btn').click(function () {
			var nickname = $('#nickname').val();
			if (nickname == '') {
				$('#nickname').addClass('errorselect');
				return false;
			} else {
				$('#nickname').removeClass('errorselect');
			}			
			
		});
		
		$('#nickname').change(function () {
			var nickname = $('#nickname').val();
			if (nickname == '') {
				$('#nickname').addClass('errorselect');
				return false;
			} else {
				$('#nickname').removeClass('errorselect');
			}			
		});
	});
</script>