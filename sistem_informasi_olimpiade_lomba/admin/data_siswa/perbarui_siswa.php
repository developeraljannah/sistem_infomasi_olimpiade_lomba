<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$nama_siswa = mysqli_real_escape_string($koneksi, $_POST['nama_siswa']);
$id_kelas = mysqli_real_escape_string($koneksi, $_POST['id_kelas']);
$tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
$asal_sd = mysqli_real_escape_string($koneksi, $_POST['asal_sd']);

// memperbarui data ke database
mysqli_query($koneksi, "UPDATE tb_siswa SET nis = '$nis', nama_siswa = '$nama_siswa', id_kelas = '$id_kelas', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', asal_sd = '$asal_sd' WHERE nisn = '$nisn'");
echo "<script>alert('Data siswa telah berhasil diperbarui');window.location='lihat_siswa.php'</script>";
