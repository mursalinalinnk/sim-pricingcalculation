<?php
session_start();
include "config.php";

//menggunakan metode isset

if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sebagai=$_POST['sebagai'];

	// $cek_user = mysql_query("SELECT * FROM tb_mahasiswa WHERE uname_mahasiswa='$username' AND pass_mahasiswa='$password'");
	$cek_user=mysql_query("SELECT * FROM tb_admin WHERE nama_admin='$username' and password='$password'");
	if (mysql_num_rows($cek_user)==1) {
		$hasil = mysql_fetch_array($cek_user);
		// simpan session user
		$_SESSION['username']= $_POST['username'];
		header("location:../admin/index.php");
	}else{
		echo "username dan password mungkin tidak sesuai";
	}
}

?>