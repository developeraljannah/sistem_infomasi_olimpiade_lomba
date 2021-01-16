<?php

// koneksi database
include '../../koneksi.php';

// menangkap data id yang di kirim dari url
$nisn = $_GET['nisn'];

// mendapatkan data foto
$cekfoto = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nisn = '$nisn'");
$getfoto = mysqli_fetch_array($cekfoto);
$foto = $getfoto['foto'];

// Jika foto ditemukan
if (is_file("foto_siswa/" . $foto)) {
    // menghapus foto di folder
    unlink("foto_siswa/" . $foto);
    // menghapus data dari tabel
    mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nisn='$nisn'");
    // mengalihkan ke halaman lihat juri
    echo "<script>alert('Data berhasil terhapus');window.location='lihat_siswa.php'</script>";
}else{
    mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE nisn='$nisn'");
    // mengalihkan ke halaman lihat juri
    echo "<script>alert('Data berhasil terhapus');window.location='lihat_siswa.php'</script>";
}
