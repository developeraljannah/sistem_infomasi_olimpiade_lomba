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
                    <h1 class="mt-4">Data Siswa</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman untuk menampilkan informasi data Siswa</li>
                    </ol>
                    <a href="tambah_siswa.php" class="btn btn-success navbar-btn">Tambah</a>
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama Siswa</th>
                                            <th>Nama Kelas</th>
                                            <th>Tempat Lahir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Koneksi ke database
                                        include "../../koneksi.php";

                                        // perintah SQL
                                        $lihatsiswa = mysqli_query($koneksi, "SELECT tb_siswa.nisn, tb_siswa.nis, tb_siswa.nama_siswa, tb_kelas.nama_kelas, tb_siswa.tempat_lahir FROM tb_siswa, tb_kelas WHERE tb_siswa.id_kelas = tb_kelas.id_kelas");
                                        
                                        // melakukan pengulangan pemanggilan data
                                        while($data = mysqli_fetch_array($lihatsiswa))
                                        {
                                            $nisn = $data['nisn'];
                                            $nis = $data['nis'];
                                            $nama_siswa = $data['nama_siswa'];
                                            $nama_kelas = $data['nama_kelas'];
                                            $tempat_lahir = $data['tempat_lahir'];
                                        ?>
                                        <tr>
                                            <td><?php echo $nisn; ?></td>
                                            <td><?php echo $nis; ?></td>
                                            <td><?php echo $nama_siswa; ?></td>
                                            <td><?php echo $nama_kelas; ?></td>
                                            <td><?php echo $tempat_lahir; ?></td>
                                            <td><a href="ubah_siswa.php?nisn=<?php echo $data['nisn']; ?>" class="btn btn-info navbar-btn">Ubah</a>&nbsp;<a href="hapus_siswa.php?nisn=<?php echo $data['nisn']; ?>" class="btn btn-danger navbar-btn" onClick="return confirm('Hapus data dengan nama siswa : <?php echo $data['nama_siswa']; ?> ?')">Hapus</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
