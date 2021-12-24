<?php
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from tab_login where username ='".$username."'and password ='".$password."'";
	$hasil = mysqli_query($koneksi, $sql);
	$jumlah = mysqli_num_rows($hasil);

	if($jumlah>0){
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];

		header ("location;user.php");
	}else{
		echo "Username atau Password Anda Salah <br> <a href = 'login.php'>Kembali </a>";
	}
	
?>