<?php

// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id_kelas = $_GET['id_kelas'];

// menghapus data dari tabel
mysqli_query($koneksi, "DELETE FROM tb_kelas WHERE id_kelas='$id_kelas'");

// mengalihkan ke halaman lihat juri
echo "<script>alert('Data berhasil terhapus');window.location='lihat_kelas.php'</script>";
