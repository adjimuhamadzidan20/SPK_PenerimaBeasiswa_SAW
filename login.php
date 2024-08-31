<?php
    session_start();  

    // // cegah masuk ke dashboard (index)
    if (isset($_SESSION['login'])) {
        header('Location: index.php');
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

    <title>SPK Penerima Beasiswa Tahfidz - Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" 
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css">
        * {
            font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        }

        .bg-login-image {
            background-image: url(assets/img/background.jpg);
        }

        .logo {
            width: 5rem;
            height: 5rem;
        }

        span {
            font-size: 1rem;
            font-weight: 600;
        }

        h5 {
            font-weight: 600;
        }

        .container {
            margin-top: 6rem;
            margin-bottom: 5rem;
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

    </style>

</head>

<body class="bg-gradient-white">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow rounded-0">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex bg-login-image align-items-center justify-content-center">
                                <div class="row justify-content-center">
                                    <div class="col-2 d-flex justify-content-center align-items-center p-0 pl-5">
                                      <img src="assets/img/logo_birayang.png" alt="SDN 1 Birayang" title="SDN 1 Birayang" class="logo">  
                                    </div>
                                    <div class="col-10 d-flex align-items-center">
                                      <div class="m-auto pl-1">
                                        <h5 class="text-white text-uppercase"><span>SPK Penerima Beasiswa Tahfidz</span><br>SD Negeri 1 Birayang</h5>  
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-4 p-sm-5 p-md-5 p-lg-5 p-xl-5">
                                    <div class="text-center">
                                        <img src="assets/img/logo_birayang.png" alt="SDN 1 Birayang" title="SDN 1 Birayang" class="logo d-lg-none mb-2">
                                        <h5 class="text-gray-800 text-uppercase mb-4 d-lg-none"><span>SPK Penerima Beasiswa Tahfidz</span><br>SD Negeri 1 Birayang</h5>
                                        <p class="h6 text-gray-800 mb-4 d-lg-none">Admin Login</p>
                                        <p class="h5 text-gray-800 mb-4 d-lg-block d-none">Admin Login</p>
                                        <!-- <img src="assets/img/SMKN9_Bekasi.png" alt="" class="img-profile w-25"> -->
                                    </div>

                                    <?php 
                                        if (isset($_SESSION['status'])) :
                                    ?>
                                        <div class="alert alert-danger rounded-0 small" role="alert" id="notif">
                                            <?= $_SESSION['status']; ?>
                                        </div>
                                    <?php  
                                        unset($_SESSION['status']);
                                        endif;
                                    ?>  

                                    <form class="user" method="post" action="config/proses_login.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user rounded-0"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user rounded-0"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-custom btn-user btn-block rounded-0" name="masuk">
                                            <i class="fas fa-sign-in-alt fa-fw"></i> Masuk
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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