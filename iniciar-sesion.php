<?php
include('login.php'); // Includes Login Script
 
if(isset($_SESSION['login_user_sys'])){
header("location: control/sistema.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 02:49:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center m-0"><a href="index.php" class="logo logo-admin"><img src="assets/images/logoRelox.png" height="30" alt="logo"></a></h3>
                <div class="p-3">
                    <form class="form-horizontal m-t-30" action="#" method="post">
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="email" class="form-control" id="username" placeholder="Ingresa tu email" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Contraseña</label>
                            <input type="password" class="form-control" id="userpassword" placeholder="Ingresa tu contraseña" name="password" required>
                        </div>
                        <div class="form-group row m-t-20">
                            <div class="col-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="submit">Iniciar Sesión</button>
                            </div>
                            <span id="mensaje-login"><?php echo $error; ?></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="m-t-40 text-center">
            
            <p>© 2018 Inventario<span class="d-none d-sm-inline-block"><i class="mdi mdi-heart text-danger"></i> by Jessica</span>.</p>
        </div>
    </div>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Sep 2018 02:49:38 GMT -->

</html>