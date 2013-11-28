<?php
ob_start();
error_reporting(0);
include_once 'koneksi.php';
include_once 'session.php';

$id_user = $_SESSION['id_user'];
$query = mysql_query("SELECT * FROM users where id_user=".mysql_real_escape_string($id_user)."") or die (mysql_error()); 
$disp = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title><?php echo $judul; ?></title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="./js/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="img/favicon.png">

</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="index.php">E-Voting</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
                        <li><a href="cara.php">Cara memilih</a></li>
                        <li><a href="kandidat.php">Kandidat</a></li>
                        <li><a href="#"><b><?php echo $disp['npm'];?></b></a></li>
                        <li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
