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
        <a class="navbar-brand" href="../home.php">Admin Panel</a>
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
                    <h1 class="mt-4">Data Guru Pendamping</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman untuk menampilkan informasi data guru pendamping lomba</li>
                    </ol>
                    <a href="tambah_gp.php" class="btn btn-success navbar-btn">Tambah</a>
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID GP</th>
                                            <th>Nama GP</th>
                                            <th>Email GP</th>
                                            <th>No Tlp GP</th>
                                            <th>Bidang Kompetisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Koneksi ke database
                                        include "../../koneksi.php";

                                        // perintah SQL
                                        $lihatgp = mysqli_query($koneksi, "SELECT * FROM tb_gurupendamping");

                                        // melakukan pengulangan pemanggilan data
                                        while ($data = mysqli_fetch_array($lihatgp)) {
                                            $id_gurupendamping = $data['id_gurupendamping'];
                                            $nama_gp = $data['nama_gp'];
                                            $email_gp = $data['email_gp'];
                                            $no_telpgp = $data['no_telpgp'];
                                            $bidang_kompetisi = $data['bidang_kompetisi'];
                                        ?>
                                            <tr>
                                                <td><?php echo $id_gurupendamping; ?></td>
                                                <td><?php echo $nama_gp; ?></td>
                                                <td><?php echo $email_gp; ?></td>
                                                <td><?php echo $no_telpgp; ?></td>
                                                <td><?php echo $bidang_kompetisi; ?></td>
                                                <td><a href="ubah_gp.php?id_gurupendamping=<?php echo $data['id_gurupendamping']; ?>" class="btn btn-info navbar-btn">Ubah</a>&nbsp;<a href="hapus_gp.php?id_gurupendamping=<?php echo $data['id_gurupendamping']; ?>" class="btn btn-danger navbar-btn" onClick="return confirm('Hapus data dengan nama guru pendamping : <?php echo $data['nama_gp']; ?> ?')" class="btn btn-danger navbar-btn">Hapus</a></td>
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