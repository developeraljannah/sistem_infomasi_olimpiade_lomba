<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_kelas = mysqli_real_escape_string($koneksi, $_POST['id_kelas']);
$nama_kelas = mysqli_real_escape_string($koneksi, $_POST['nama_kelas']);

// memperbarui data ke database
mysqli_query($koneksi, "UPDATE tb_kelas SET nama_kelas = '$nama_kelas' WHERE id_kelas = '$id_kelas'");
echo "<script>alert('Data kelas telah berhasil diperbarui');window.location='lihat_kelas.php'</script>";
