<?php
ob_start();
session_start();
$id_user = $_SESSION['id_user'];
include 'koneksi.php';

if (isset($_SESSION['id_user'])) {
	//redirect ke halaman login
	header('location:home.php');
}
else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title><?php $judul; ?></title>

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
                        <li><a href="cara.php">Cara Memilih</a></li>
                        <li><a href="kandidat.php">Kandidat</a></li>
                        <li><a href="login.php">Login</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			
			<div class="span9">
				<div class="hero-unit">
                	<p align="center"><img src="img/logo.png" height="150" width="520" align="middle"></p>
				</div>
                <div class="hero-unit">
                	<center>
                	<h2>Silakan Pilih Kategori</h2>
                        <ul class="kategori">
                            <?php $select="select * from kategori";
                             $query=mysql_query($select);
                             while($row=mysql_fetch_array($query))
                             {
                              echo '<li>'.'<a href="kategori1.php" class="btn btn-primary btn-large"><span>'."$row[nama_kat]".'</span></a></li>';
                                      
                             }
                             ?>
                        </ul>
                    </center>
				</div>

				
			</div>
		</div>
	</div>
	
	<hr />
	<?php
	include 'footer.php';
	?>
	<?php } ?>