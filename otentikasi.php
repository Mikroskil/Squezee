<?php
session_start();
include'koneksi.php';

function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}


//tangkap data dari form login
$npm = $_POST['username'];
$password = $_POST['password'];
$pass=md5($password);

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$npm = anti_injection($npm);
$pass = anti_injection($pass);

//cek data yang dikirim, apakah kosong atau tidak
if (empty($npm) && empty($pass)) {
	//kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($npm)) {
	//kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($pass)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
}


// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($pass)){
//echo '<div class="alert alert-danger">Sekarang tidak bisa di injeksi halaman login nya bro <img src="img/senyum.gif"></div>';

 echo '<div class="errormsgbox" style="color: #D8000C;background-color: #FFBABA;background-image: url(img/error.png);background-repeat: no-repeat;background-position: 10px center;font-weight:bold;width:450px;border: 1px solid;margin: 0 auto;padding:10px 5px 10px 50px; ">Sekarang tidak bisa di injeksi halaman login nya bro <img src="img/senyum.gif"> </div>';
}
else {
$q = mysql_query("select * from users where npm='$npm' and password='$pass'");
$ketemu = mysql_num_rows($q);
$r = mysql_fetch_array($q);
$id_user=$r['id_user'];
$npm=$r['npm'];

if ($ketemu == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	session_register('npm');
	session_register('id_user');
	$_SESSION['id_user']=$id_user;
	$_SESSION['npm'] = $npm;
	$_SESSION[full_name]	= $r[full_name];
	//$useragent = $_SERVER['HTTP_USER_AGENT'];
	//$name = $_SESSION['full_name'];
	$query=mysql_query("update users set date_login=NOW(),ip='".$_SERVER['REMOTE_ADDR']."' , browser='".$_SERVER['HTTP_USER_AGENT']."' where id_user='$id_user' ");
	
	//redirect ke halaman index
	header('location:home.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error=4');
}
}
?>