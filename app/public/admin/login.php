<?php
	
	include('include/init.php');	
	if($_SESSION['login'] == 1){
		header("location:index.php?userid={$_SESSION['userid']}");
	}	

?>
<!doctype html>
<html lang="<?php echo $app_lang ?>">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $app_name ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>


<div class="wrapper wrapper-full-page" >
     <div class="full-page login-page"  data-image="assets/img/full-screen-image-<?php echo rand(1, 4) ?>.jpg" data-color="<?php echo $app_color ?>">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content" style='padding:20px 0 0 0'>
            <div class="container">
				<center style='margin-top:30px'><img src='../mobile/assets/img/logo_img.svg' style='max-width:400px'> </center>
                <div class="row" style='margin-top:20px'>
				
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">					
                        <form method="post" action="checklogin.php">

                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-warning" style='padding-top:0'><?php echo $lng_login ?></div>
                                <div class="content">
                                    <div class="form-group">
                                        <label><?php echo $lng_username ?></label>
										<div class="input-group">
											<input type="text" name="myusername" placeholder="<?php echo $lng_username ?>" class="form-control">
											<span class="input-group-addon"><i class="fa fa-user text-muted"></i></span>
										</div>											
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo $lng_password ?></label>
										<div class="input-group">
											<input type="password" name="mypassword" placeholder="<?php echo $lng_password ?>" class="form-control">
											<span class="input-group-addon"><i class="fa fa-lock text-muted"></i></span>
										</div>
                                    </div>
									<div class="form-group">
										<div class="checkbox">
											<input id="checkbox2" type="checkbox" checked="" name='rememberme'>
											<label for="checkbox2">
												<?php echo $lng_remember_me ?>
											</label>
										</div>
									</div>
                                </div>
                                <div class="text-center">
										<button type="submit" class="btn btn-fill <?php echo $buttons ?> btn-wd"><?php echo $lng_login ?></button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>			
        </div>
		
		

    </div>

</div>


</body>

    <!--   Core JS Files  -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>


	<!--  Forms Validations Plugin -->
	<script src="assets/js/jquery.validate.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="assets/js/moment.min.js"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!--  Select Picker Plugin -->
    <script src="assets/js/bootstrap-selectpicker.js"></script>

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
		<script src="assets/js/bootstrap-switch-tags.min.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Sweet Alert 2 plugin -->
	<script src="assets/js/sweetalert2.js"></script>

    <!-- Vector Map plugin -->
	<script src="assets/js/jquery-jvectormap.js"></script>

    <!--  Google Maps Plugin    -->
    <!--script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script-->

	<!-- Wizard Plugin    -->
    <script src="assets/js/jquery.bootstrap.wizard.min.js"></script>

    <!--  Datatable Plugin    -->
    <script src="assets/js/bootstrap-table.js"></script>

    <!--  Full Calendar Plugin    -->
    <script src="assets/js/fullcalendar.min.js"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/blockui/blockUI.js"></script>
	<script src="assets/js/functions.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
			
			$('button').click(function() {
				//alert($(this).attr('href').indexOf('#'));		
					if ($(this).hasClass('noblock')) {
						//lockscreen();
					} else {
						playSound();
						lockscreen();
					}
			});
				  
			$('a').click(function() {
				//alert($(this).attr('href').indexOf('#'));	
				if ($(this).hasClass('noblock')) {
				} else {
					if ($(this).attr('href').indexOf('#') != 0) {
						playSound();
						lockscreen();
					} 
				}
			}); 			
			
			<?php
				if ($_GET['error'] == 'y') {
			?>			
			
				$.notify({
					icon: "pe-7s-door-lock",
					message: "<?php echo $lng_user_password_not_valid ?>"

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
				if ($_GET['created'] == 'y') {
			?>			
			
				$.notify({
					icon: "pe-7s-check",
					message: "<?php echo $lng_user_created ?>"

				},{
					type: 'success',
					timer: 4000,
					placement: {
						from: 'top',
						align: 'center'
					}
				});			
			<?php
				}
			?>			
            lbd.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>

</html>
