<?php
	if (!empty($_POST)) {
		if ($_POST['password'] <> '') {
			if ($_POST['password'] == $_POST['repassword']) {
				$password = md5($_POST['password']);
				if (md5($_POST['actualpassword']) == $password_user) {
					$result=mysql_query("UPDATE users SET fullname = '{$_POST['fullname']}', email = '{$_POST['email']}', password = '$password'  WHERE user_id = $userid");
				} else {
					$error = 1; //echo "Password actual erroneo";
				}
			} else {
				$error = 2; //echo "Error password y re password distintos";
			}
		} else {			
			$result=mysql_query("UPDATE users SET lastname = '{$_POST['lastname']}', firstname = '{$_POST['firstname']}', email = '{$_POST['email']}', country = '{$_POST['country']}', city = '{$_POST['city']}', phone = '{$_POST['phone']}', address = '{$_POST['address']}', description = '{$_POST['description']}'  WHERE user_id = $userid");
		}
		$success = 1;
		if ($error <> ''){
			echo "<script type='text/javascript'>
					   window.location = 'index.php?userid=$userid&section=user-profile&error=$error';
				  </script>";		
		}	else {
			echo "<script type='text/javascript'>
					   window.location = 'index.php?userid=$userid&section=user-profile&success=y';
				  </script>";			
		}		
	}		

		$sql="SELECT *, TIMESTAMPDIFF(MINUTE, lastlogin, now()) as 'minutes' FROM users WHERE user_id ='$userid'";
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
                                <form action="index.php?userid=<?php echo $userid ?>&section=user-profile" method="post">
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
	                                
                                    <button type="submit" class="btn <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_update ?></button>
                                    <div class="clearfix"></div>
                                </form>
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
						'userid': <?php echo $userid ?>,
						'resp': resp,
					},
					cache: false,
					success: function(output){
						window.location.replace("index.php?userid=<?php echo $userid ?>&section=user-profile&imageupdated=y");
					}
				});				
				//alert(resp);
			});
			return false;
		});		
		
		$('#upload').on('change', function () { readFile(this); });
		$uploadCrop = $('#upload-demo').croppie({
			url: '<?php echo $avatar_photo_url ?>',
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
			
        });
    </script>