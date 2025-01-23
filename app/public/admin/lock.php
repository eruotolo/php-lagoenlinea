<?php
	include('include/init.php');
	include('include/get-user-info.php');
	if($_SESSION['login'] <> 1){
		header("location:login.php");
	}	
	if($userid == ''){
		header("location:login.php");
	}
	
	$_SESSION['status'] = 1;

	if (!empty($_POST)) {
		$mypassword=$_POST['password']; 

		// To protect MySQL injection (more detail about MySQL injection)
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);	
		$mypassword = md5($mypassword);
		$sql="SELECT * FROM users WHERE user_id='{$_GET['userid']}' and password='$mypassword'";
		$result=mysql_query($sql);
		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($count==1){
			$_SESSION['status'] = 0;
			header("location:index.php?userid={$_GET['userid']}");
		} else {
			$_GET['error'] = 'y';
		}
	}
		$sql="SELECT *, TIMESTAMPDIFF(MINUTE, lastlogin, now()) as 'minutes' FROM users WHERE user_id ='$userid'";
		$result=mysql_query($sql);
		while ($row = mysql_fetch_assoc($result)) {
			$lastname = $row['lastname'];
			$firstname = $row['firstname'];
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



<div class="wrapper wrapper-full-page">

    <div class="full-page lock-page" data-color="orange" data-image="assets/img/full-screen-image-4.jpg">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <form method="post" action="lock.php?userid=<?php echo $userid ?>">
                <div class="user-profile">
                    <div class="author">
                        <img class="avatar" src="<?php echo $avatar_photo_url ?>" alt="...">
                    </div>
                    <h4><?php echo $lastname ?>, <?php echo $firstname ?></h4>
                    <div class="form-group">
                        <input type="password" name='password' placeholder="<?php echo $lng_insert_password ?>" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-neutral btn-round btn-fil btn-wd"><?php echo $lng_unlock ?></button>
                </div>
            </form>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

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
						
		
			<?php
				if ($_GET['error'] == 'y') {
			?>			
			
				$.notify({
					icon: "pe-7s-door-lock",
					message: "<?php echo $lng_password_notvalid ?>"

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

        	lbd.checkFullPageBackgroundImage();

    	});
	</script>

</html>
