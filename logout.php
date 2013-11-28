<?php 
session_start();
include_once 'koneksi.php';
//$uid = $_SESSION['uid'];
	//$sle = "update users set status = 'of', browser = null where uid = '$_SESSION[uid]'";
	//$qyi = mysql_query ($sle);
	session_destroy();
	setcookie('PHPSESSID','',time()-3600,'/','',0);
	header("location: ./");
?>