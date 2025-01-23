<?php 
session_start();
session_destroy();
unset($_COOKIE['member_login77']);
unset($_COOKIE['member_password77']);
setcookie('member_login77');
setcookie('member_password77');
$userid = $_GET['userid'];
echo "<meta HTTP-EQUIV='REFRESH' content='0; url=login.php?userid=$userid'>";
?>