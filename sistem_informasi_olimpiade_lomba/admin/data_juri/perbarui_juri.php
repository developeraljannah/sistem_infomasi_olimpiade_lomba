<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_juri = mysqli_real_escape_string($koneksi, $_POST['id_juri']);
$nama_juri = mysqli_real_escape_string($koneksi, $_POST['nama_juri']);
$email_juri = mysqli_real_escape_string($koneksi, $_POST['email_juri']);
$no_telpjuri = mysqli_real_escape_string($koneksi, $_POST['no_telpjuri']);

// memperbarui data ke database
mysqli_query($koneksi, "UPDATE tb_juri SET nama_juri = '$nama_juri', email_juri = '$email_juri', no_telpjuri = '$no_telpjuri' WHERE id_juri = '$id_juri'");
echo "<script>alert('Data juri telah berhasil diperbarui');window.location='lihat_juri.php'</script>";
