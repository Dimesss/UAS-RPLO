<!DOCTYPE html>
<html>
<head>

    <title> Kolom Absensi </title>
<style type = "text/css">
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
		<h3> Rekap Absensi </h3>
	</section>

<table bgcolor="royalblue" border="1" align="center" cellpadding="10" cellspacing="0" width="70%">
	<tr>
		<th width="30">No</th>
		<th width="200"> ID </th>
		<th height="30" width="330">Nama</th>
		<th width="160">Tanggal dan Waktu</th>
		<th width="100">Kehadiran</th>
		<th width="20" colspan="2">Aksi</th>
	</tr>


<?php  
	include 'koneksi.php';
	$no = 1;
	$ambildata = mysqli_query($koneksi, "select * from input_data");
	while ($tampil = mysqli_fetch_array($ambildata)){
		echo "
		<tr>
			<td>$no</td>
			<td>$tampil[id]</td>
			<td>$tampil[nama]</td>
			<td>$tampil[tanggal]</td>
			<td>$tampil[kehadiran]</td>

			<td><a href = 'edit.php? kode = $tampil[id]'> Edit </a></td>
			<td><a href = 'delete.php? kode = $tampil[id]'> Hapus </a></td>
		</tr>
		";
	$no++;
	}
?>
</table>
</body>
</html>