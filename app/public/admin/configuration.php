<?php
	if (!empty($_POST)) {
		if ($_POST['password'] <> '') {
			if ($_POST['password'] == $_POST['repassword']) {
				$password = md5($_POST['password']);
				if (md5($_POST['actualpassword']) == $password_user) {
					$result=mysql_query("UPDATE users SET password = '$password'  WHERE user_id = $userid");
					$success = 1;
				} else {
					$error = 1; //echo "PAssword actual erroneo";
				}
			} else {
				$error = 2; //echo "Error password y re password distintos";
			}
		}
	}
?>         <div style='clear:both'></div>  
			<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"> 
                        <div class="card ">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>"><?php echo $lng_changepassword ?></h4>
                            </div>
                            <div class="content">
                                <div class="row">
								<form id="registerFormValidation" action="index.php?userid=<?php echo $userid ?>&section=configuration" method="post">
                                    <div class="col-md-12">
										<div class="form-group">
											<label class="control-label"><?php echo $lng_actual_password ?> <star>*</star></label>
											<input class="form-control"
												   name="actualpassword"
												   type="password"
												   required="true"
												   autocomplete="off"
											/>
										</div>

										<div class="form-group">
											<label class="control-label"><?php echo $lng_new_password ?> <star>*</star></label>
											<input class="form-control"
												   name="password"
												   id="registerPassword"
												   type="password"
												   required="true"
											/>
										</div>

										<div class="form-group">
											<label class="control-label"><?php echo $lng_repassword ?> <star>*</star></label>
											<input class="form-control"
												   name="repassword"
												   id="registerPasswordConfirmation"
												   type="password"
												   required="true"
												   equalTo="#registerPassword"
											/>
										</div>
										
										<button type="submit" class="btn noblock <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_update ?></button>
										<div class="clearfix"></div>
									
                                    </div>
								</form>
								</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script type="text/javascript">
	$().ready(function(){
			<?php
				if ($success == 1) {
			?>			
			
				$.notify({
					icon: "pe-7s-check",
					message: "<?php echo $lng_password_updated ?>"

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
				if ($error == 1) {
			?>			
			
				$.notify({
					icon: "pe-7s-door-lock",
					message: "<?php echo $lng_password_error ?>"

				},{
					type: 'danger',
					timer: 4000,
					placement: {
						from: 'top',
						align: 'center'
					}
				});			
			<?php
				}
			?>	

			<?php
				if ($error == 2) {
			?>			
			
				$.notify({
					icon: "pe-7s-door-lock",
					message: "<?php echo $lng_password_verif_error ?>"

				},{
					type: 'danger',
					timer: 4000,
					placement: {
						from: 'top',
						align: 'center'
					}
				});			
			<?php
				}
			?>			
		
		$('#registerFormValidation').validate();
    });
 </script>		