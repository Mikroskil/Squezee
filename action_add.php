<?php
session_start();
include 'koneksi.php';

$id_user = $_SESSION['id_user']; 
$id_kan = $_POST['id_kan'];
$kat = '1';
$status = '1';
$simpan = mysql_query("insert into vote (id_user, id_kan, kategori, status) values ('$id_user', '$id_kan', '$kat', '$status')");
$q = mysql_query("update kandidat set jlh_vote=jlh_vote+1 where id_kan='$id_kan'");

header('location:vote1.php')
?>