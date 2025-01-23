<?php
	session_start();
	//include_once('dbuser-footycenter.php');
	
	include('include/conf/dbselect.php');	

// username and password sent from form 
$userid=$_POST['userid'];

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$rememberme=$_POST['rememberme']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
$mypassword = md5($mypassword);

$sql="SELECT * FROM users WHERE nickname='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
while ($row = mysql_fetch_assoc($result)) {
	$useriddb = $row['user_id'];
}

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_start();
$_SESSION['login'] = "1";
$_SESSION['username'] = $myusername;
$_SESSION['userid'] = $useriddb;
$_SESSION['status'] = 0;
$_SESSION['time'] = time();
if ($rememberme == "on") {
	setcookie ("member_login77",$myusername,time()+ (10 * 365 * 24 * 60 * 60));
	setcookie ("member_password77",$mypassword,time()+ (10 * 365 * 24 * 60 * 60));	
}



header("location:index.php?userid=$useriddb");
} else {

$_SESSION['login'] = '';
$_SESSION['username'] = '';
header("location:login.php?error=y");
}
?>

