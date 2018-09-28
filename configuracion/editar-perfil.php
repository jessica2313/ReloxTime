<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>ReloxTime</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="Themesbrand" name="author">
	<link rel="shortcut icon" href="../../assets/images/favicon.png">
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Begin page -->
	<div id="wrapper">
		<div class="topbar">
			<!-- LOGO -->
			<div class="topbar-left"><a href="editar-perfil.php" class="logo"><span><img src="../assets/images/logoRelox-white.png" alt="" height="30"> </span><i><img src="../assets/images/logo-sm.png" alt="" height="22"></i></a></div>
			<div class="navbar-custom" style="background-color: #2b3a4a;">
				<ul class="navbar-right d-flex list-inline float-right mb-0">
					<li class="notification-list nav-pro-img">
						<p class="nav-link arrow-none waves-effect nav-user"><img src="../assets/images/users/user-4.jpg" alt="user" class="rounded-circle"><span style="font-size: 20px; color: #FFF; padding: 10px;">Admin</span>
						</p>
					</li>

				</ul>
				<ul class="list-inline menu-left mb-0">
					<li class="float-left">
						<button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
					</li>
				</ul>
			</div>

		</div>
		<!-- Top Bar End -->
		<!-- ========== Left Sidebar Start ========== -->
		<div class="left side-menu">
			<div class="slimscroll-menu" id="remove-scroll">
				<!--- Sidemenu -->
				<div id="sidebar-menu">
					<!-- Left Menu Start -->
					<ul class="metismenu" id="side-menu">
						<li class="menu-title">Menu</li>
						<li><a href="../index.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span>Inicio</span></a></li>
						<li><a href="../proveedores" class="waves-effect"><i class="mdi mdi-account"></i><span> Proveedores</span></a></li>
						<li><a href="../almacen" class="waves-effect"><i class="mdi mdi-package-variant"></i><span> Almacén </span></a></li>
						<li><a href="../ventas" class="waves-effect"><i class="mdi mdi-lock-open"></i><span> Ventas </span></a></li>
						<li><a href="../usuarios" class="waves-effect"><i class="mdi mdi-account"></i><span> Usuarios </span></a></li>
						<li><a href="../configuracion/editar-perfil.php" class="waves-effect"><i class="mdi mdi-settings"></i><span> Configuración </span></a></li>
						<li><a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-power"></i><span> Cerrar Sesión </span></a></li>
					</ul>
				</div>
				<!-- Sidebar -->
				<div class="clearfix"></div>
			</div>
			<!-- Sidebar -left -->
		</div>
		

		<!-- LeftSidebar End -->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid" style="padding: 0;">
					<?php
                    include 'menu.php';
                    ?>

                    <div class="row" style="margin-top: 15px;margin-bottom: 15px; margin-right: 0px; margin-left: 0px;">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                     <h4 class="mt-10 header-title" style="padding-bottom: 15px;">Registrar Usuario</h4>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nombre</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Apellidos</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" id="example-email-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-sm-2 col-form-label">Contraseña Anterior</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="example-password-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-sm-2 col-form-label">Contraseña Nueva</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="example-password-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-password-input" class="col-sm-2 col-form-label">Repetir Contraseña</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="example-password-input">
                                        </div>
                                    </div>
                                    <center><button type="button" class="btn btn-secondary waves-effect" style="background-color:#2b3a4a; ">Enviar</button> </center>  
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

				</div>
				<!-- container-fluid -->
			</div>
			<!-- content -->
			<footer class="footer">© 2018 Inventario<span class="d-none d-sm-inline-block"><i class="mdi mdi-heart text-danger"></i> by Jessica</span>.</footer>
		</div>
		<!-- ============================================================== -->
		<!-- End Right content here -->
		<!-- ============================================================== -->
	</div>
	<!-- END wrapper -->
	<!-- jQuery  -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/js/metisMenu.min.js"></script>
	<script src="../assets/js/jquery.slimscroll.js"></script>
	<script src="../assets/js/waves.min.js"></script>
	<script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<!--Morris Chart-->
	<script src="plugins/morris/morris.min.js"></script>
	<script src="plugins/raphael/raphael-min.js"></script>
	<script src="../assets/pages/dashboard.js"></script>
	<!-- App js -->
	<script src="../assets/js/app.js"></script>
</body>

</html>
