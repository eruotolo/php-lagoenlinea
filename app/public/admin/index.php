<?php
	session_start();
	if ((time() - $_SESSION['time']) > (60 * 30)) {
		session_start();
		session_destroy();
		unset($_COOKIE['member_login77']);
		unset($_COOKIE['member_password77']);
		setcookie('member_login77');
		setcookie('member_password77');
		$userid = $_GET['userid'];
		echo "<meta HTTP-EQUIV='REFRESH' content='0; url=login.php?userid=$userid'>";
	}	
	include('include/init.php');
	include('include/get-user-info.php');
	
	if ($_SESSION['status'] == 1) {
		header("location:lock.php?userid={$_GET['userid']}");
	} else {
		if($_SESSION['login'] == 1 && $_SESSION['userid'] == $userid ){
			
		} else {
			
			if($_SESSION['login'] <> 1 && isset($_COOKIE['member_login77'])) {
				header("location:checklogincookies.php");
				
			} else {				
				//session_destroy();
				echo "<script>
					window.location.href = 'login.php';				
				</script>";		
				die();
			}
		}


		if ($userid == '') {
			//session_destroy();
			echo "<script>
				window.location.href = 'login.php';				
			</script>";		
			die();
		}
	}
?>
<!doctype html>
<html lang="<?php echo $app_lang ?>">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="../asset/img/favicon.png">
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
	<style>
		.btn.dropdown-toggle.btn-default { border: 1px solid #E3E3E3  }
		.error{ color:red;font-weight:normal;font-size:12px}
		.errorselect {border:1px solid red; background-color:#ff9999}		
		
	</style>
</head>
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
	<script src="assets/js/bootstrap-datetimepicker-es.js"></script>
	

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

    <!--  Bootstrap Table Plugin    -->
    <script src="assets/js/bootstrap-table.js"></script>

	<!--  Plugin for DataTables.net  -->
    <script src="assets/js/jquery.datatables.js"></script>


    <!--  Full Calendar Plugin    -->
    <script src="assets/js/fullcalendar.min.js"></script>
	

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
	
	<script src="assets/js/blockui/blockUI.js"></script>
	<script src="assets/js/functions.js"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="<?php echo $app_color ?>" data-image="assets/img/full-screen-image-3.jpg">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="logo" style='border:0'>
            <a class="simple-text logo-mini" style='display:none'>
                <?php echo $app_name_short ?>
            </a>

			<a class="simple-text logo-normal" >
				<img  src='../mobile/assets/img/logo_img.svg' style='max-width:220px;margin-left:20px'>
			</a>			
			
        </div>
		<?php 
			if ($onlymuestras == 0) {
				include ('sidebar-wrapper.php');
			} else {
				include ('sidebar-wrapper-lagosinhuella.php');
			}
		?>
	</div>

    <div class="main-panel">
		<?php
			include('pages_include.php');
		?>	
		<?php include('navbar-default.php'); ?>
        <div class="main-content">
			<?php
				include($page);
			?>
        </div>

		<?php //include('footer.php') ?>
    </div>
</div>


</body>


	<script type="text/javascript">
			
    	$(document).ready(function(){

			$('.sidebar .sidebar-wrapper').perfectScrollbar();
			$('.main-panel').perfectScrollbar();
			
		if ('<?php echo $_GET['section'] ?>' != "employee-list")	{
			$('button').click(function() {	
					if ($(this).hasClass('noblock') || $(this).hasClass('dropdown-toggle')) {
						//lockscreen();
					} else {
						playSound();
						lockscreen();
					}
			});
				  
			$('a').click(function() {
				if ($(this).parent().attr('class') != 'page-number') {	
					if ($(this).hasClass('noblock')) {
					} else {
						if ($(this).attr('href').indexOf('#') != 0) {
							playSound();
							lockscreen();
						} 
					}
				}
			}); 
		}

    	});
	</script>

</html>
