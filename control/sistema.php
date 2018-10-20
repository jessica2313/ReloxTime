<?php
include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title>ReloxTime</title>
	<meta content="Admin Dashboard" name="description">
	<meta content="Themesbrand" name="author">
	<link rel="shortcut icon" href="../assets/images/favicon.png">
	<link rel="stylesheet" href="../plugins/morris/morris.css">
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Begin page -->
	<div id="wrapper">
		
		<?php
			include '../assets/menu.php';
		?>
		


		<!-- LeftSidebar End -->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">
					<nav class="navbar-custom">	
						<ul class="list-inline menu-left mb-0" id="menuindex">
							
						</ul>
						<h3 class="tituloindex">Sistema Control de Inventario</h3>
					</nav>
					<div class="row" id="submenu">
						<div class="col-12">
							<div class="card m-b-20">
								<div class="card-body">
									<p class="text-muted m-b-10"> El sistema Control de Inventarios de la Relojeria "ReloxTime" permite a los administradores gestionar el almacen, ventas, proveedores, usuarios, con la finalidad de tener un mayor control sobre la empresa.</p>
								</div>
								<div class="card-body">
									<h4>Misión</h4>
									<p class="text-muted m-b-10">Comercializar productos con la mejor tecnología e innovación, que proporcionen a nuestros clientes, satisfacción y solución de sus necesidades, garantizando la mejor experiencia de consumo. La honestidad, la capacitación y el trabajo continuo, son el compromiso que siempre estaremos dispuestos a cumplir con respaldo y eficiencia.</p>
								</div>
								<div class="card-body">
									<h4>Visión</h4>
									<p class="text-muted m-b-10"> En el 2019, el objetivo será el respaldo para el cliente, basado en capacitación continua a nuestro personal y comercializando productos y servicios de excelente tecnología. El crecimiento de nuestra organizaciónestará fundamentado en la apertura y atención de nuevas tiendas a nivel nacional, generando infraestructuras que nos permitan un desarrollo sostenido en el mercado.</p>
								</div>
							</div>
						</div>
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
	<script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<!--Morris Chart-->
	<script src="../plugins/morris/morris.min.js"></script>
	<script src="../plugins/raphael/raphael-min.js"></script>
	<script src="../assets/pages/dashboard.js"></script>
	<!-- App js -->
	<script src="../assets/js/app.js"></script>
</body>

</html>
