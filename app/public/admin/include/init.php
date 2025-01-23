<?php
	session_start(); 
//	print_r($_SESSION);
//	print_r($_COOKIE);
	$userid = $_GET['userid'];
	
	include('conf/dbselect.php');
	error_reporting(E_ERROR | E_PARSE | E_WARNING);
	include('conf/variables.php');
	include('functions.php');
	include('languages/spanish.inc');
?>