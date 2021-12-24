<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		echo "Anda Harus Login Terlebih Dahulu <br> <a href = 'login.php'> Klik Disini </a>";
			exit;
	}

	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Web</title>
</head>
<body>

	<h1> SELAMAT DATANG DI HALAMAN ABSENSI </h1>

	<p>Nama : <?php echo $username; ?></p>
	<a href="logout.php" role="button"> LOGOUT </a>	

</body>
</html>>