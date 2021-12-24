<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> Absensi </title>
<style type="text/css">
	*{
        margin: 0px auto;
        padding: 0px;
        font-family: sans-serif;

    }
    header{
        width: 100%;
        max-width: 100%;
        height: 50px;
        background-color: royalblue;
        color: #fff;
        line-height: 50px;
        padding-right: 4%;
        padding-left: 4%;
    }
    header ul li{
        width: 10%;
        height: 50px;
        float: left;
        list-style: none;
    }
    section{
        width: 100%;
        font-family: sans-serif;
        padding-left: 6%;
        padding-top: 4%;
    }
	body{
        background-color: skyblue;
        max-width: 100%;
        overflow-x: hidden;
        overflow-y: hidden;
    }
    .box-tambah-data{
        background-color: royalblue;
        height: 200%;
        width: 50%;
        margin: 2% auto;
        padding: 3%;
        line-height: 300%;
    }
</style>
</head>
<body>

	 <header>
        <ul>
            <li> <font style = "font-size: 120%;"> Absensi Guru </font> </li> </a>
            <a href = "beranda.php"> <li> Beranda </li> </a>
            <a href = "tambah-data.php"> <li> Input Data </li> </a>
            <a href = "laporan.php"> <li> Laporan </li> </a>
            <a href = "login.php"> <li> Logout </li> </a>
        </ul>
    </header>
 	
 	<section>
            <h2> Tambah Absen </h2>
    </section>

<div class="box-tambah-data">
<form action="" method="POST">
	<table>
		<tr>
            <td width="130">ID</td>
            <td><input size="26" type="text" name="id" placeholder="Masukkan ID"></td>
        </tr>
		<tr>
			<td width="130">Nama</td>
			<td><input size="26" type="text" name="nama" placeholder="Masukkan Nama"></td>
		</tr>
		<tr>
			<td width="130">Tanggal</td>
			<td><input type="datetime-local" name="tanggal"></td>
		</tr>
		<tr>
			<td width="130">Kehadiran</td>
			<td>
				<input type="radio" name="kehadiran" value="Hadir">Hadir <br>
				<input type="radio" name="kehadiran" value="Izin">Izin <br>
				<input type="radio" name="kehadiran" value="Tidak Hadir">Tidak Hadir <br>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit" name="proses"></td>
	</table>
</form>
</body>
</html>

<?php
	
	if(isset($_POST['proses'])){
		mysqli_query($koneksi, "insert into input_data set
		id = '$_POST[id]',
		nama = '$_POST[nama]',
		tanggal = '$_POST[tanggal]',
		kehadiran = '$_POST[kehadiran]'");
	}

?>