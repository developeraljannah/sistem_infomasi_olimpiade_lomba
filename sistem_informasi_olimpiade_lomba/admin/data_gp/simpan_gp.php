<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_gurupendamping = mysqli_real_escape_string($koneksi, $_POST['id_gurupendamping']);
$nama_gp = mysqli_real_escape_string($koneksi, $_POST['nama_gp']);
$email_gp = mysqli_real_escape_string($koneksi, $_POST['email_gp']);
$no_telpgp = mysqli_real_escape_string($koneksi, $_POST['no_telpgp']);
$bidang_kompetisi = mysqli_real_escape_string($koneksi, $_POST['bidang_kompetisi']);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_gurupendamping(id_gurupendamping, nama_gp, email_gp, no_telpgp, bidang_kompetisi) VALUES ('$id_gurupendamping','$nama_gp','$email_gp','$no_telpgp','$bidang_kompetisi')");
echo "<script>alert('Data guru pendamping telah berhasil ditambahkan');window.location='lihat_gp.php'</script>";
