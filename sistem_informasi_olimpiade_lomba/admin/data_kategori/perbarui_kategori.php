<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_kategori = mysqli_real_escape_string($koneksi, $_POST['id_kategori']);
$nama_kategori = mysqli_real_escape_string($koneksi, $_POST['nama_kategori']);

// memperbarui data ke database
mysqli_query($koneksi, "UPDATE tb_kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'");
echo "<script>alert('Data kategori telah berhasil diperbarui');window.location='lihat_kategori.php'</script>";
