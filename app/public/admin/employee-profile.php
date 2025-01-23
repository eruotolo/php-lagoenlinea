<?php
	include('include/conf/functions.php');
	$id = $_GET['id'];
	if (!empty($_POST)) {
		if ($_POST['password'] <> '') {
			if ($_POST['password'] == $_POST['repassword']) {
				$password = md5($_POST['password']);
				if (md5($_POST['actualpassword']) == $password_user) {
					$result=mysql_query("UPDATE users SET fullname = '{$_POST['fullname']}', email = '{$_POST['email']}', password = '$password'  WHERE user_id = {$_GET['id']}");
				} else {
					$error = 1; //echo "Password actual erroneo";
				}
			} else {
				$error = 2; //echo "Error password y re password distintos";
			}
		} else {			
			$result=mysql_query("UPDATE users SET lastname = '{$_POST['lastname']}', firstname = '{$_POST['firstname']}', email = '{$_POST['email']}', country = '{$_POST['country']}', city = '{$_POST['city']}', phone = '{$_POST['phone']}', address = '{$_POST['address']}', description = '{$_POST['description']}'  WHERE user_id = $id");
		}
		$success = 1;
		if ($error <> ''){
			echo "<script type='text/javascript'>
					   window.location = 'index.php?userid=$userid&section=employee-profile&error=$error&id=$id';
				  </script>";		
		}	else {
			echo "<script type='text/javascript'>
					   window.location = 'index.php?userid=$userid&section=employee-profile&success=y&id=$id';
				  </script>";			
		}		
	}		

		$sql="SELECT *, TIMESTAMPDIFF(MINUTE, lastlogin, now()) as 'minutes' FROM users WHERE user_id ='{$_GET['id']}'";
		$result=mysql_query($sql);
		while ($row = mysql_fetch_assoc($result)) {
			$lastname = $row['lastname'];
			$firstname = $row['firstname'];
			$username = $row['nickname'];
			$email = $row['email'];
			$address = $row['address'];
			$city = $row['city'];
			$country = $row['country'];
			$phone = $row['phone'];
			$description = $row['description'];
			$min = $row['minutes'];
		}	
		
?>          
			<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>"><?php echo $lng_edit_info ?></h4>
                            </div>
                            <div class="content">
                                <form action="index.php?userid=<?php echo $userid ?>&section=employee-profile&id=<?php echo $_GET['id'] ?>" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $lng_username ?></label>
                                                <input type="text" disabled class="form-control" placeholder="<?php echo $lng_username ?>" value="<?php echo $username ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $lng_email ?></label>
                                                <input name='email' type="email" class="form-control" placeholder="<?php echo $lng_email ?>" value='<?php echo $email ?>'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $lng_firstname ?></label>
                                                <input name='firstname' type="text" class="form-control" placeholder="<?php echo $lng_firstname ?>" value="<?php echo $firstname ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $lng_lastname ?></label>
                                                <input name='lastname' type="text" class="form-control" placeholder="<?php echo $lng_lastname ?>" value="<?php echo $lastname ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style='display:none'>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?php echo $lng_address ?></label>
                                                <input name='address' type="text" class="form-control" placeholder="<?php echo $lng_address ?>" value="<?php echo $address ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style='display:none'>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><?php echo $lng_city  ?></label>
                                                <input name='city' type="text" class="form-control" placeholder="<?php echo $lng_city  ?>" value="<?php echo $city ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><?php echo $lng_country ?></label>
                                                <input name='country' type="text" class="form-control" placeholder="<?php echo $lng_country ?>" value="<?php echo $country ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><?php echo $lng_phone ?></label>
                                                <input name='phone' type="text" class="form-control" placeholder="<?php echo $lng_phone ?>" value="<?php echo $phone ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style='display:none'>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?php echo $lng_aboutme ?></label>
                                                <textarea name='description' rows="3" class="form-control" placeholder="<?php echo $lng_writeaboutme ?>"><?php echo $description?></textarea>
                                            </div>
                                        </div>
                                    </div>
									
                                    <button type="submit" class="btn <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_update ?></button>
									<button style='margin-right:10px;display:none' id='reset' class="noblock btn btn-warning btn-fill pull-right btn-round">Resetear Password</button>									
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style='display:none'>
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
								<button type="submit" class="upload-result noblock btn <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_update ?></button>
								<div class="clearfix"></div>							
                            </div>							
                        </div>
                    </div>

                </div>
            </div>
<link rel="stylesheet" href="assets/js/croppie/croppie.css" />
<script src="assets/js/croppie/croppie.js"></script>
<script src="assets/js/croppie/exitif.js"></script>			
    <script type="text/javascript">
        $().ready(function(){
			
			<?php
				if ($_GET['imageupdated'] == 'y') {
			?>			
			
				$.notify({
					icon: "pe-7s-check",
					message: "<?php echo $lng_pic_updated ?>"

				},{
					type: 'success',
					timer: 20,
					placement: {
						from: 'top',
						align: 'center'
					}
				});			
			<?php
				}
			?>			
			
			<?php
				if ($_GET['success'] == 'y') {
			?>			
			
				$.notify({
					icon: "pe-7s-check",
					message: "<?php echo $lng_info_updated ?>"

				},{
					type: 'success',
					timer: 20,
					placement: {
						from: 'top',
						align: 'center'
					}
				});			
			<?php
				}
			?>
			
			<?php
				if ($_GET['created'] == 'y') {
			?>			
			
				$.notify({
					icon: "pe-7s-check",
					message: "<?php echo $lng_employee_created ?>"

				},{
					type: 'success',
					timer: 20,
					placement: {
						from: 'top',
						align: 'center'
					}
				});			
			<?php
				}
			?>			
			
		function readFile(input) {
 			if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            
	            reader.onload = function (e) {
					$('.upload-demo').addClass('ready');
	            	$uploadCrop.croppie('bind', {
	            		url: e.target.result
	            	}).then(function(){
	            		console.log('jQuery bind complete');
	            	});
	            	
	            }
	            
	            reader.readAsDataURL(input.files[0]);
	        }
	        else {
		        swal("Sorry - you're browser doesn't support the FileReader API");
		    }
		}
		
		$('.upload-result').on('click', function (ev) {
			lockscreen();
			$uploadCrop.croppie('result', {
				type: 'canvas',
				size: 'viewport'
			}).then(function (resp) {
				/*popupResult({
					src: resp
				});*/
				$.ajax({
					type: "POST",
					url: "jquery/save-avatar.php",
					data: {
						'userid': <?php echo $_GET['id'] ?>,
						'resp': resp,
					},
					cache: false,
					success: function(output){
						window.location.replace("index.php?userid=<?php echo $userid ?>&section=employee-profile&imageupdated=y&id=<?php echo $id ?>");
					}
				});				
				//alert(resp);
			});
			return false;
		});		
		
		$('#upload').on('change', function () { readFile(this); });
		$uploadCrop = $('#upload-demo').croppie({
			url: '<?php echo other_user_avatar($_GET['id']) ?>',
			enableExif: true,
			viewport: {
				width: 150,
				height: 150
			},
			boundary: {
				width: 250,
				height: 250
			}
		});	

		$('#reset').on('click', function (ev) {
			$.ajax({
				type: "POST",
				url: "jquery/updatepassword.php",
				data: {
					'id': <?php echo $_GET['id'] ?>,
				},
				cache: false,
				success: function(output){
						swal(
						  'Nueva Contraseña',
						  output,
						  'success'
						);
						
				}
			});
			return false;
		});		
			
        });
    </script>