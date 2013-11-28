 <?php
ob_start(); 
session_start();
$id_user = $_SESSION['id_user'];
//$email= $_SESSION['username'];
//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['id_user']) || empty($_SESSION['id_user'])) {
	//redirect ke halaman login
	header('location:login.php');
}
 //$uid = $_SESSION['username'];
//$uid=2; // User Session ID
?>
