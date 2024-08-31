<?php  
    session_start();

    // cegah masuk / kembali ke hal login
    if (!isset($_SESSION['login'])) {
        header('Location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="adjimuhamadzidan">
    <link rel="icon" type="image/x-icon" href="assets/img/logo_birayang.ico">

    <title>SPK Penerima Beasiswa Tahfidz - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" 
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style type="text/css">
        * {
            font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        }

        .sidebar {
            background-color: #192a56;
        }

        .judul-navbar {
            font-size: 14px;
             margin-left: 12px;
        }

        .img-profile {
            width: 50px;
            height: 50px;
        }

        .pagination .active .page-link {
            background-color: #192a56;
            border-color: #192a56;
        }

        .dataTables_paginate .paginate_button.page-item.active a {
            background-color: #192a56;
            border-color: #192a56;
        }

        .dataTables_paginate .paginate_button.page-item:not(.active) a {
            color: #192a56;
        }  

        .btn-custom {
            background-color: #192a56;
            border-color: #192a56;
            color: white;
        }

        .btn-custom:hover {
            background-color: #100C3D;
            border-color: #100C3D;
            color: white;
        }

        .text-info {
            color: #192a56 !important;
        }

        .border-left-info {
            border-left: .25rem solid #192a56 !important;
            border-left-color: #192a56 !important;
        }
        
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php?page=dashboard">
                <div class="sidebar-brand-icon p-0">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <!-- <h1 class="h2 font-weight-bold my-auto">SPK</h1> -->
                    <img src="assets/img/logo_birayang.png" alt="SDN 1 Birayang" class="img-profile">
                </div>
                <div class="sidebar-brand-text text-left font-weight-bold judul-navbar">SPK Penerima Beasiswa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- sidebar link -->
            <?php require 'template/sidebar_menu.php'; ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-4">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top border-bottom">

                <!-- nav_bar -->
                <?php require 'template/navbar.php'; ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- isi halaman / konten -->
                    <?php require 'config/control_pages.php'; ?>

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>SPK Penerima Beasiswa Tahfidz SD Negeri 1 Birayang - <?= date("Y"); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-0" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-0 border-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin menutupnya?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times fa-xs"></i></span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" untuk meninggalkan dashboard</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary rounded-0" type="button" data-dismiss="modal"><i class="fas fa-chevron-left fa-sm"></i> Kembali</button>
                    <a class="btn btn-custom rounded-0" href="logout.php"><i class="fas fa-sign-out-alt fa-sm"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

     <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        let popup = document.getElementById('notif');
        if (popup.style.display = 'block') {
            setTimeout(function() {
                popup.style.opacity = '0'
                popup.style.transition = 'opacity 1s ease-in-out';
                setTimeout(function() {
                    popup.style.display = 'none';
                }, 1000)
            }, 1000);
        }
    </script>

</body>

</html>