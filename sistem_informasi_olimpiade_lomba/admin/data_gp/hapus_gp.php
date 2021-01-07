<?php

// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$id_gurupendamping = $_GET['id_gurupendamping'];

// menghapus data dari tabel
mysqli_query($koneksi, "DELETE FROM tb_gurupendamping WHERE id_gurupendamping='$id_gurupendamping'");

// mengalihkan ke halaman lihat guru pendamping
echo "<script>alert('Data berhasil terhapus');window.location='lihat_gp.php'</script>";
