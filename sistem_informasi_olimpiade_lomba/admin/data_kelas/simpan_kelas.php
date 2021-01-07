<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_kelas = mysqli_real_escape_string($koneksi, $_POST['id_kelas']);
$nama_kelas = mysqli_real_escape_string($koneksi, $_POST['nama_kelas']);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_kelas(id_kelas, nama_kelas) VALUES ('$id_kelas','$nama_kelas')");
echo "<script>alert('Data kelas telah berhasil ditambahkan');window.location='lihat_kelas.php'</script>";
