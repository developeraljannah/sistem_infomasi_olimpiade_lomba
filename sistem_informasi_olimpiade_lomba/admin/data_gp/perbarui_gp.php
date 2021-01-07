<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_gurupendamping = mysqli_real_escape_string($koneksi, $_POST['id_gurupendamping']);
$nama_gp = mysqli_real_escape_string($koneksi, $_POST['nama_gp']);
$email_gp = mysqli_real_escape_string($koneksi, $_POST['email_gp']);
$no_telpgp = mysqli_real_escape_string($koneksi, $_POST['no_telpgp']);
$bidang_kompetisi = mysqli_real_escape_string($koneksi, $_POST['bidang_kompetisi']);

// memperbarui data ke database
mysqli_query($koneksi, "UPDATE tb_gurupendamping SET nama_gp = '$nama_gp', email_gp = '$email_gp', no_telpgp = '$no_telpgp', bidang_kompetisi = '$bidang_kompetisi' WHERE id_gurupendamping = '$id_gurupendamping'");
echo "<script>alert('Data gurupendamping telah berhasil diperbarui');window.location='lihat_gp.php'</script>";
