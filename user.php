<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
    <script type="text/javascript">
        alert("Maaf Anda belum login");
        window.location.assign('index.php');
    </script>;
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data diri</title>

    <!-- Custom fonts for this template-->
    <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-60">
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Data diri</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="?url=tulis_data">
                    <i class="fas fa-edit"></i>
                    <span>tulis catatan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?url=catatan_perjalanan">
                    <i class="fas fa-book"></i>
                    <span>Catatan perjalanan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?url=print">
                    <i class="fas fa-print"></i>
                    <span>print</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <h3>APLIKASI CATATAN PERJALANAN</h3>


                    <!-- Sidebar Toggle (Topbar) -->




                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    Selamat datang:<?= $_SESSION['nama_lengkap']; ?>
                                </li>
                                <div class="topbar-divider d-none d-sm-block"></div>

                                <a href="logout.php" onclick="return confirm('apakah anda yakin?')">Logout</a>
                            </ul>
                        </div>





                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="mb-4 text-gray-800">
                        <?php
                        if (!empty(@$_GET['url'])) {
                            switch (@$_GET['url']) {
                                case 'catatan_perjalanan':
                                    include 'lihat_data.php';
                                    break;
                                case 'tulis_data':
                                    include 'tulis_data.php';
                                    break;
                                case 'edit_catatan':
                                    include 'edit_catatan.php';
                                    break;
                                case 'print':
                                    include 'print_data.php';
                                    break;

                                default:
                                    echo "halaman tidak di temukan";
                                    break;
                            }
                        } else {
                        ?>
                            <div class="row">

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">

                                                <div class="col mr-2">
                                                    <a href="?url=tulis_data">
                                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            Tulis catatan</div>

                                                </div>
                                                </a>
                                                <div class="col-auto">

                                                    <i class="fas fa-edit fa-2x "></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="?url=catatan_perjalanan">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                            catatan perjalanan</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                    </a>
                                                </div>
                                                <div class="col-auto">

                                                    <i class="fas fa-book fa-2x "></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->


                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <a href="?url=print">
                                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                            print</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                    </a>
                                                </div>
                                                <div class="col-auto">

                                                    <i class="fas fa-print fa-2x "></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php }
                        ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>UKK XII RPL2|MUHAMMAD SYAHRONI </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->


    <!-- Bootstrap core JavaScript-->
    <script src="asset/vendor/jquery/jquery.min.js"></script>
    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="asset/js/sb-admin-2.min.js"></script>
    <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/datatables-demo.js"></script>


</body>

</html>