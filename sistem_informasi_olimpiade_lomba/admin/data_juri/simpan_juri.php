<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_juri = mysqli_real_escape_string($koneksi, $_POST['id_juri']);
$nama_juri = mysqli_real_escape_string($koneksi, $_POST['nama_juri']);
$email_juri = mysqli_real_escape_string($koneksi, $_POST['email_juri']);
$no_telpjuri = mysqli_real_escape_string($koneksi, $_POST['no_telpjuri']);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_juri(id_juri, nama_juri, email_juri, no_telpjuri) VALUES ('$id_juri','$nama_juri','$email_juri','$no_telpjuri')");
echo "<script>alert('Data juri telah berhasil ditambahkan');window.location='lihat_juri.php'</script>";
