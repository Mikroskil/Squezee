<?php
ob_start();
error_reporting(0);
include_once 'koneksi.php';

$id_user = $_SESSION['id_user'];
$query = mysql_query("SELECT * FROM users where id_user=".mysql_real_escape_string($id_user)."") or die (mysql_error()); 
$disp = mysql_fetch_array($query);
$npm = $disp['npm'];
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
    <link rel="shortcut icon" href="img/favicon.ico">

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
                        <?php 
                        if (empty($_SESSION['id_user'])) { ?>
						<li><a href="login.php">Login</a></li>
						<?php }
						else {
						?>
                        <li><a href="#"><b><?php $npm;?></b></a></li>
						<li><a href="logout.php">Logout</a></li>
                        
                        <?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			
			<div class="span9">
				
				<ul class="thumbnails">
					<?php
						//$kandidat = mysql_query("select * from kandidat order by id_kan desc");
						$kandidat=mysql_query("select kandidat.npm, kandidat.nama, kandidat.motto, kandidat.jlh_vote, kategori.nama_kat, kandidat.foto from kandidat inner join kategori on kategori.id_kat = kandidat.kategori order by kandidat.id_kan");
						while($kan=mysql_fetch_array($kandidat))
                        {
					?>
					<li class="span3">
						<div class="thumbnail">
							<img src="foto/<?php echo $kan['foto'];?>" alt="<?php echo $kan['nama'];?>" class="img-rounded">
							<div class="caption">
								<h4><?php echo $kan['nama'];?></h4>
								
								<a class="btn btn-primary" href="#">Lihat</a>
								<a class="btn btn-success" href="#">Kategori : <?php echo $kan['nama_kat'];?></a>
							</div>
						</div>
					</li>
                    <?php } ?>
				</ul>

		
			</div>
		</div>
	</div>
	
	<hr />

	<?php
	include 'footer.php';
	?>