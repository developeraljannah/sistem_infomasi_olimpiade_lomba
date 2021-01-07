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
        <a class="navbar-brand" href="home.php">Admin Panel</a>
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
                    <h1 class="mt-4">Ubah Guru Pendamping</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Halaman untuk memperbarui informasi data guru pendamping</li>
                    </ol>
                    <div class="row">
                        <div class="card-body">

                            <!-- Ambil data dari url -->
                            <?php
                            // koneksi ke database
                            include "../../koneksi.php";
                            // ambil id dari url
                            $idgp = $_GET['id_gurupendamping'];
                            $caridata = mysqli_query($koneksi, "SELECT * FROM tb_gurupendamping WHERE id_gurupendamping = '$idgp'");
                            $data = mysqli_fetch_array($caridata);
                            $id_gurupendamping = $data['id_gurupendamping'];
                            $nama_gp = $data['nama_gp'];
                            $email_gp = $data['email_gp'];
                            $no_telpgp = $data['no_telpgp'];
                            $bidang_kompetisi = $data['bidang_kompetisi'];
                            ?>
                            <!-- Form -->
                            <form action="perbarui_gp.php" method="POST">
                                <div class="form-group">
                                    <label>ID Guru Pendamping</label>
                                    <input type="text" class="form-control" name="id_gurupendamping" value="<?php echo $id_gurupendamping; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Guru Pendamping</label>
                                    <input type="text" class="form-control" name="nama_gp" value="<?php echo $nama_gp; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Guru Pendamping</label>
                                    <input type="email" class="form-control" name="email_gp" value="<?php echo $email_gp; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>No.HP Guru Pendamping</label>
                                    <input type="text" class="form-control" name="no_telpgp" value="<?php echo $no_telpgp; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Bidang Kompetisi</label>
                                    <input type="text" class="form-control" name="bidang_kompetisi" value="<?php echo $bidang_kompetisi; ?>" required>
                                </div>
                                <input type="submit" name="ubah" value="Perbarui" class="btn btn-success navbar-btn">&nbsp;
                                <a href="lihat_gp.php" class="btn btn-info navbar-btn">Kembali</a>
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