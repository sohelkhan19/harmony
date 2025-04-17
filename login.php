<?php session_start(); 
    if(isset($_SESSION['admin_id'])){
        header('location: index');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>

    <link rel="shortcut icon" href="img/logo-removebg-preview.png" type="image/x-icon">

    <!-- Custom styles -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
</head>

<body class="bg-gradient-primary" style="height: 100vh; display:flex; align-items: center;" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="img/login-img.jpg" width="380px" height="400px" style="margin-left: 30px;" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 mt-5">Welcome Back!</h1>
                                    </div>
                                    <form id="loginForm">
                                        <div class="form-group">
                                            <input type="email" id="email" class="form-control form-control-user"
                                                placeholder="Enter Email Address..." >
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" class="form-control form-control-user"
                                                placeholder="Password" >
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <input type="hidden" id="loginStatus">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>

    <!-- Bootstrap & Core scripts -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
