<?php
error_reporting(0);
session_start();

if (empty($_SESSION['email'])) {
    echo "<script>alert('anda harus login'); window.location = '../index.php';</script>";
}
include('../koneksi.php');
$sql = $conn->query("SELECT * FROM login WHERE login.email = '".$_SESSION['email']."'");
$data = $sql->fetch_array();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pendaftaran Pajak Restoran</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="./?m=./pages&p=profil" class="nav-link">Profile</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../logout.php" style="color:red">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./" class="brand-link">
                <img src="../assets/img/plg.png" class="brand-image" style="padding: 0px 6px;">
                <span class="brand-text font-weight-light">BPPD Palembang</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="modules/login/uploads/<?php echo $data['foto']; ?>" class="img-circle elevation-2" style="width: 40px;height: 40px;">
                    </div>
                    <div class="info" style="font-size: smaller;padding: 0px 10px;">
                        <a href="./?m=./pages&p=profil" class="d-block"><?php echo $data['nama']; ?></a>
                        <small class="badge badge-warning"><?php echo $data['email']; ?></small>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Pajak Restoran<i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./?m=./modules/login&p=index" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Login Admin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./?m=./modules/pendaftaran&p=index" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pendaftaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./?m=./modules/informasi&p=index" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Informasi</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content p-3">
                <?php
                $file = htmlentities($_GET['p']);

                $folder = htmlentities($_GET['m']);

                $pagefolder = "$folder/$file.php";

                if (!empty($file) and file_exists($pagefolder)) {
                    include("$pagefolder");
                } elseif (!empty($file) and !file_exists($pagefolder)) {
                    include("404.html");
                } else {
                    include('dashboard.php');
                }
                ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2022 <a href="#">Badan Pengelolaan Pendapatan Daerah (BPPD) Kota Palembang (5 ID)</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>

</html>