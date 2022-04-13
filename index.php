<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>APLIKASI PEDULI DIRI</title>

    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    </p>


    <script type="text/javascript">
        var maxChar = 16;

        function count() {
            if (document.forme.nik.value.length == maxChar) {
                document.forme.counter.value = maxChar - document.forme.nik.value.length;
            } else
                document.forme.nik.value = document.forme.nik.value.substring(0, maxChar);
        }


        function initial() {
            document.forme.counter.value = maxChar;
        }
    </script>



</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="asset/img/p.png" alt="" width="30%">
                                        <br><br>
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang Di Aplikasi Peduli Diri</h1>
                                        <h6>Silahkan masukkan nik dan nama lengkap anda</h6>
                                        <?php

                                        session_start();
                                        if (!empty($_SESSION["aman"])) {
                                            echo $_SESSION["aman"];
                                            unset($_SESSION["aman"]);
                                        }
                                        if (!empty($_SESSION["gagal"])) {
                                            echo $_SESSION["gagal"];
                                            unset($_SESSION["gagal"]);
                                        }
                                        ?>
                                    </div>
                                    <form action="proses_login.php" class="user" method="post" name="forme">

                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" placeholder="Masukkan NIK" name="nik" required onkeyup="count()">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Masukkan Nama lengkap" name="nama_lengkap" required>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fa fa-spinner"></i> login</button>

                                        </div>
                                        <div class="form-group">
                                            <a href="register.php" class="btn btn-primary btn-user btn-block">Belum Punya Akun? Silahkan Registrasi Akun!<i class=" fa fa-arrow-right fa-fw"></i></a>

                                        </div>

                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="asset/vendor/jquery/jquery.min.js"></script>
        <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="asset/js/sb-admin-2.min.js"></script>

</body>

</html>