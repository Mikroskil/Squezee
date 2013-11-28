<?php
$host="localhost";
$username="root";
$password="";
$databasename="voting_mikroskil";

$link=mysql_connect($host,$username,$password) or die ("Data Base Error");
mysql_select_db($databasename,$link);

$judul = "Aplikasi E-voting";



?>