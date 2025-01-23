<?php
error_reporting(0);

if ($_SERVER["REMOTE_ADDR"]  == "127.0.0.1" || $_SERVER["REMOTE_ADDR"] == '::1') {
    // CONEXION PACIO
    /*$host = 'localhost';
      $user = 'root';
      $password = 'password';
      $txt_db_name = 'lago';
      $dbname = $txt_db_name;*/

    // CONEXION  ELMAMA

    $host = 'mysql';
    $user = 'eruotolo';
    $password = 'Guns026772';
    $txt_db_name = 'lagoenli_lago';
    $dbname = $txt_db_name;

} else {
    $host = 'mysql';
    $user = 'eruotolo';
    $password = 'Guns026772';
    $txt_db_name = 'lagoenli_lago';
    $dbname = $txt_db_name;
}

$nickname = $_SESSION['username'];
$userloggedid = $_SESSION['userid'];
$conn = mysql_connect($host, $user, $password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
mysql_set_charset("UTF8", $conn);

/* --------------- CONEXIÓN PRODUCCIÓN ---------------*/

/*
if ($_SERVER["REMOTE_ADDR"]  == "127.0.0.1" || $_SERVER["REMOTE_ADDR"] == '::1') {
$host = 'localhost';
$user = 'lagoenli_lago';
$password = 'Guns026772';
$txt_db_name = 'lagoenli_lago';
$dbname = $txt_db_name;

} else {
    $host = 'localhost';
    $user = 'lagoenli_lago';
    $password = 'Guns026772';
    $txt_db_name = 'lagoenli_lago';
    $dbname = $txt_db_name;
}

$nickname = $_SESSION['username'];
$userloggedid = $_SESSION['userid'];
$conn = mysql_connect($host, $user, $password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());

*/


?>
