<?php

// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id_kategori = $_GET['id_kategori'];

// menghapus data dari tabel
mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori='$id_kategori'");

// mengalihkan ke halaman lihat juri
echo "<script>alert('Data berhasil terhapus');window.location='lihat_kategori.php'</script>";
