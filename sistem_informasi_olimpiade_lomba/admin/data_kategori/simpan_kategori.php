<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_kategori = mysqli_real_escape_string($koneksi, $_POST['id_kategori']);
$nama_kategori = mysqli_real_escape_string($koneksi, $_POST['nama_kategori']);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_kategori(id_kategori, nama_kategori) VALUES ('$id_kategori','$nama_kategori')");
echo "<script>alert('Data kategori telah berhasil ditambahkan');window.location='lihat_kategori.php'</script>";
