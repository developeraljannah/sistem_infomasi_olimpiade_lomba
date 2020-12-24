<?php
// default waktu
date_default_timezone_set('Asia/Jakarta');
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbolka_alazhar");

// apabila koneksi gagal 
if (mysqli_connect_errno()) {
    echo "<script>alert('Koneksi database gagal, silahkan kontak admin');</script>";
}
