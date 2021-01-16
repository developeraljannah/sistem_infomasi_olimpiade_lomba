<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_kompetisi = mysqli_real_escape_string($koneksi, $_POST['id_kompetisi']);
$nama_kompetisi = mysqli_real_escape_string($koneksi, $_POST['nama_kompetisi']);
$id_kategori = mysqli_real_escape_string($koneksi, $_POST['id_kategori']);

// memperbarui data ke database
mysqli_query($koneksi, "UPDATE tb_kompetisi SET nama_kompetisi = '$nama_kompetisi', id_kategori = '$id_kategori' WHERE id_kompetisi = '$id_kompetisi'");
echo "<script>alert('Data kompetisi telah berhasil diperbarui');window.location='lihat_kompetisi.php'</script>";
