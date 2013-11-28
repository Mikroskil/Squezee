<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Aplikasi E-Voting - UISU</title>

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
                        <li><a href="cara.php">Cara memmilih</a></li>
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
                    
                    <h4 class="widget-header"><i class="icon-lock"></i>Login</h4>
                    <div class="widget-body">
                              <div class="center-align">
                              <?php 
                                                //kode php ini kita gunakan untuk menampilkan pesan eror
                                                //echo '<div class="alert alert-danger"> ';
                                                if (!empty($_GET['error'])) {
                                                    if ($_GET['error'] == 1) {
                                                        echo '<div class="alert alert-danger">Username dan Password belum diisi!</div>';
                                                    } else if ($_GET['error'] == 2) {
                                                        echo '<div class="alert alert-danger">Username belum diisi!</div>';
                                                    } else if ($_GET['error'] == 3) {
                                                        echo '<div class="alert alert-danger">Password belum diisi!</div>';
                                                    } else if ($_GET['error'] == 4) {
                                                        echo '<div class="alert alert-danger">Username dan Password tidak terdaftar!</div>';
                                                    }
                                                    
                                                }
                                                ?>
                                                
                                <form method="post" action="otentikasi.php" class="form-horizontal form-signin-signup">
                                <div class="input-prepend">
                                  <span class="add-on">Username</span>
                                  <input class="span3"  type="text" name="username" placeholder="NPM" required="required">
                                </div>
                                <span style="font-size: 11px; "></span>

								<br>
                                <div class="input-prepend">
                                  <span class="add-on">Password&nbsp;</span>
                                  <input class="span3"  type="password" name="password" placeholder="Password" required="required">
                                </div>
                                <span style="font-size: 11px; "></span>
								<br>
                                <br>
                                 <input type="submit" value="Masuk" class="btn btn-primary btn-large">
                                        
                                </form>
                              </div>
                            </div>
				</div>
                
			</div>
		</div>
	</div>
	
	<hr />
	<?php
	include 'footer.php';
	?>