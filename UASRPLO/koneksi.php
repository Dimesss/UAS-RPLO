<?php
    $koneksi = mysqli_connect("localhost", "root", "", "input");
    if (!$koneksi) {
        echo "Koneksi Database Gagal";
    }
?>