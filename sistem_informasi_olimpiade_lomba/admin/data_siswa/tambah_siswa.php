<?php
session_start();
if ($_SESSION['kondisi'] != "login") {
    header("location:../index.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Informasi Olimpiade, Lomba dan Kompetensi Al Azhar</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Admin Panel</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <!-- Menu Navigasi -->
                <?php include "../navigasi_in.php"; ?>
                <div class="sb-sidenav-footer">
                    <div class="small">Nama Admin :</div>
                    <p class="text-gray-800">
                        <!-- Page Heading -->
                        <?php
                        $username = $_SESSION['username'];
                        echo $username;
                        ?>
                    </p>
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Tambah Siswa</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman untuk menambahkan data siswa</li>
                    </ol>
                    <div class="row">
                        <div class="card-body">
                            <!-- Form -->
                            <form action="simpan_siswa.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>NISN</label>
                                    <input type="text" class="form-control" name="nisn" placeholder="Ketikkan NISN" required>
                                </div>
                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="text" class="form-control" name="nis" placeholder="Ketikkan NIS" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input type="text" class="form-control" name="nama_siswa" placeholder="Ketikkan Nama Siswa" required>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select class="form-control" name="id_kelas" required>
                                        <option value="">--Pilih Kelas--</option>
                                        <?php
                                        // koneksi ke database
                                        include "../../koneksi.php";

                                        // Menampilkan data kelas
                                        $querykelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                                        while ($datakelas = mysqli_fetch_array($querykelas)) {
                                            $idkelas = $datakelas['id_kelas'];
                                            $namakelas = $datakelas['nama_kelas'];
                                        ?>
                                            <option value="<?php echo $idkelas; ?>"><?php echo $namakelas ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Ketikkan Tempat Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tanggal_lahir" placeholder="Ketikkan Tanggal Lahir" required>
                                </div>
                                <div class="form-group">
                                    <label>Asal SD</label>
                                    <input type="text" class="form-control" name="asal_sd" placeholder="Ketikkan Asal SD" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" class="form-control-file" name="foto">
                                </div>
                                <input type="submit" name="tambah" value="Simpan" class="btn btn-success navbar-btn">&nbsp;
                                <a href="lihat_siswa.php" class="btn btn-info navbar-btn">Kembali</a>
                            </form>
                            <!-- Tutup Form -->
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
</body>

</html>