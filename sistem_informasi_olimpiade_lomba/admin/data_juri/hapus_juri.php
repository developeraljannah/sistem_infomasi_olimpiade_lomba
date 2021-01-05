<?php

// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id_juri = $_GET['id_juri'];

// menghapus data dari tabel
mysqli_query($koneksi, "DELETE FROM tb_juri WHERE id_juri='$id_juri'");

// mengalihkan ke halaman lihat juri
echo "<script>alert('Data berhasil terhapus');window.location='lihat_juri.php'</script>";
