<?php  
session_start();
 
// SOAL : 
// 1. tuliskan perintah untuk menghubungkan dengan file koneksi.php dengan file login.php

require 'koneksi.php';

if ( isset($_POST['login']) ) {
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($connect,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	header("location:beranda.php");
}else{
	header("location:index.php");
}
}

?>