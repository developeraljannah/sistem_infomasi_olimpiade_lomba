<?php

// koneksi database
include '../../koneksi.php';

// menangkap data yang di kirim dari form
$nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$nama_siswa = mysqli_real_escape_string($koneksi, $_POST['nama_siswa']);
$id_kelas = mysqli_real_escape_string($koneksi, $_POST['id_kelas']);
$tempat_lahir = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
$asal_sd = mysqli_real_escape_string($koneksi, $_POST['asal_sd']);
$foto = mysqli_real_escape_string($koneksi, $_FILES['foto']['name']);
$jenis_foto = mysqli_real_escape_string($koneksi, $_FILES['foto']['type']);

// ganti nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis') . '-' . $foto;

// Set folder tempat menyimpan fotonya
$file_tmp = $_FILES['foto']['tmp_name'];

// mengupload foto ke folder
move_uploaded_file($file_tmp, 'foto_siswa/' . $fotobaru);

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO tb_siswa(nisn,nis,nama_siswa,id_kelas,tempat_lahir,tanggal_lahir,asal_sd,foto)VALUES('$nisn','$nis','$nama_siswa','$id_kelas','$tempat_lahir','$tanggal_lahir','$asal_sd','$fotobaru')");
echo "<script>alert('Data siswa telah berhasil ditambahkan');window.location='lihat_siswa.php'</script>";
