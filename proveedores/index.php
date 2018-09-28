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
		
		<?php
			include '../assets/menu.php';
		?>
		


		<!-- Left Sidebar End -->
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
                                    <h4 class="mt-0 header-title">Ejemplo de lista de proveedores</h4>
                                    <p class="text-muted m-b-30">La siguiente tabla muestra datos ilustrativos.</p>
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive b-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Código</th>
                                                        <th data-priority="1">Nombre</th>
                                                        <th data-priority="3">Apellidos</th>
                                                        <th data-priority="1">Dirección</th>
                                                        <th data-priority="3">Ciudad</th>
                                                        <th data-priority="3">Estado</th>
                                                        <th data-priority="6">Email</th>
                                                        <th data-priority="6">Teléfono</th>                         
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                        <td>597.74</td>
                                                        <td>12:12PM</td>
                                                        <td>14.81 (2.54%)</td>
                                                        <td>582.93</td>
                                                        <td>597.95</td>
                                                        <td>597.73 x 100</td>
                                                        <td>597.91 x 300</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                        <td>378.94</td>
                                                        <td>12:22PM</td>
                                                        <td>5.74 (1.54%)</td>
                                                        <td>373.20</td>
                                                        <td>381.02</td>
                                                        <td>378.92 x 300</td>
                                                        <td>378.99 x 100</td>
                                                    </tr>
                                                    <tr>
                                                        <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                        <td>191.55</td>
                                                        <td>12:23PM</td>
                                                        <td>3.16 (1.68%)</td>
                                                        <td>188.39</td>
                                                        <td>194.99</td>
                                                        <td>191.52 x 300</td>
                                                        <td>191.58 x 100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

				</div>
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
