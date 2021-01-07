<?php

// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id_kompetisi = $_GET['id_kompetisi'];

// menghapus data dari tabel
mysqli_query($koneksi, "DELETE FROM tb_kompetisi WHERE id_kompetisi='$id_kompetisi'");

// mengalihkan ke halaman lihat juri
echo "<script>alert('Data berhasil terhapus');window.location='lihat_kompetisi.php'</script>";
