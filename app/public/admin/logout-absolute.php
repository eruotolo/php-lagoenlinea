<?php 
session_start();
session_destroy();
$userid = $_GET['userid'];
echo "<meta HTTP-EQUIV='REFRESH' content='0; url=login.php?userid=$userid'>";
?>