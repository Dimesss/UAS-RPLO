<?php  
	include "koneksi.php";
	if (isset($_GET['id'])){
		$delete = mysqli_query($koneksi, "delete from input_data where id = $id");
		header('location:laporan.php');
	}
	echo "<script>
				alert('Data Sudah Terhapus!');
				document.location.href = 'laporan.php';
		</script>";
?>