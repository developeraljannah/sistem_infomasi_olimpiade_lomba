<?php

// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$username = mysqli_real_escape_string($koneksi, $_POST['user']);
$password = mysqli_real_escape_string($koneksi, $_POST['pass']);
$status = "pending";

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_login(username, password, status) VALUES ('$username','$password','$status')");
echo "<script>alert('Akun sedang dalam masa verifikasi, terimakasih untuk pendaftarannya');window.location='index.php'</script>";
