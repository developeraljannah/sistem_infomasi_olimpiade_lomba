<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$id_kompetisi = mysqli_real_escape_string($koneksi, $_POST['id_kompetisi']);
$nama_kompetisi = mysqli_real_escape_string($koneksi, $_POST['nama_kompetisi']);
$id_kategori = mysqli_real_escape_string($koneksi, $_POST['id_kategori']);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_kompetisi(id_kompetisi, nama_kompetisi, id_kategori) VALUES ('$id_kompetisi','$nama_kompetisi','$id_kategori')");
echo "<script>alert('Data kompetisi telah berhasil ditambahkan');window.location='lihat_kompetisi.php'</script>";
