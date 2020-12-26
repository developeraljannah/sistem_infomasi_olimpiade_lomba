<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Informasi Olimpiade, Lomba dan Kompetensi Al Azhar</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <!-- varian warna -->
    <!-- biru gelap : primary -->
    <!-- merah : danger -->
    <!-- hijau : success -->
    <!-- kuning : warning -->
    <!-- abu-abu : secondary -->
    <!-- biru cerah : info -->
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar Administrator</h3></div>
                                    <div class="card-body">
                                        <form action="simpan-admin.php" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <!-- form input -->
                                                <!-- text, email, number, password, select, radio, submit, reset, file -->
                                                <input class="form-control py-4" type="text" name="user" placeholder="Ketikkan username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" type="password" name="pass" placeholder="Ketikkan kata sandi" />
                                            </div>
                                            <input type="submit" class="btn btn-success btn-block" name="daftar" value="Daftar">
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Sudah punya akun? Login sekarang</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
