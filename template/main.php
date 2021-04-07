<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
	<title>Hotel Manager App</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">


	<!-- Icon fonts -->
	<link rel="stylesheet" href="/assets/fonts/fontawesome.css">
	<link rel="stylesheet" href="/assets/fonts/ionicons.css">
	<link rel="stylesheet" href="/assets/fonts/linearicons.css">
	<link rel="stylesheet" href="/assets/fonts/open-iconic.css">
	<link rel="stylesheet" href="/assets/fonts/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="/assets/fonts/feather.css">

	<!-- Core stylesheets -->
	<link rel="stylesheet" href="/assets/css/bootstrap-material.css">
	<link rel="stylesheet" href="/assets/css/shreerang-material.css">
	<link rel="stylesheet" href="/assets/css/uikit.css">

	<!-- Libs -->
	<link rel="stylesheet" href="/assets/libs/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" href="/assets/libs/flot/flot.css">

	<!-- DataTable -->
	<link rel="stylesheet" href="/assets/plugins/DataTables-1.10.24/css/dataTables.bootstrap4.min.css">

	<!-- Select -->
	<link rel="stylesheet" href="/assets/plugins/select2-4.0.13/dist/css/select2.css">

</head>

<body>
	<!-- [ Preloader ] Start -->
	<div class="page-loader">
		<div class="bg-primary"></div>
	</div>
	<!-- [ Preloader ] End -->

	<!-- [ Layout wrapper ] Start -->
	<div class="layout-wrapper layout-2">
		<div class="layout-inner">
			<!-- [ Layout sidenav ] Start -->
			<?php include('partials/sidenav.php'); ?>
			<!-- [ Layout sidenav ] End -->
			<!-- [ Layout container ] Start -->
			<div class="layout-container">
				<!-- [ Layout navbar ( Header ) ] Start -->
				<?php include('partials/navbar.php'); ?>
				<!-- [ Layout navbar ( Header ) ] End -->

				<!-- [ Layout content ] Start -->
				<div class="layout-content">

					<!-- [ content ] Start -->
					<div class="container-fluid flex-grow-1 container-p-y">
						
						<?php include('pages/'. $page .'.php'); ?>

					</div>
					<!-- [ content ] End -->

					<!-- [ Layout footer ] Start -->
					<?php include('partials/footer.php'); ?>
					<!-- [ Layout footer ] End -->
				</div>
				<!-- [ Layout content ] Start -->
			</div>
			<!-- [ Layout container ] End -->
		</div>
		<!-- Overlay -->
		<div class="layout-overlay layout-sidenav-toggle"></div>
	</div>
	<!-- [ Layout wrapper] End -->

	<!-- Core scripts -->
	<script src="/assets/js/pace.js"></script>
	<script src="/assets/js/jquery-3.3.1.min.js"></script>
	<script src="/assets/libs/popper/popper.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script src="/assets/js/sidenav.js"></script>
	<script src="/assets/js/layout-helpers.js"></script>
	<script src="/assets/js/material-ripple.js"></script>

	<!-- Libs -->
	<script src="/assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="/assets/libs/eve/eve.js"></script>
	<script src="/assets/libs/flot/flot.js"></script>
	<script src="/assets/libs/flot/curvedLines.js"></script>
	<script src="/assets/libs/chart-am4/core.js"></script>
	<script src="/assets/libs/chart-am4/charts.js"></script>
	<script src="/assets/libs/chart-am4/animated.js"></script>

	<script src="/assets/js/demo.js"></script>
	<script src="/assets/js/analytics.js"></script>
	<script src="/assets/js/pages/dashboards_index.js"></script>

	<!-- DataTable -->
	<script src="/assets/plugins/DataTables-1.10.24/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/DataTables-1.10.24/js/dataTables.bootstrap4.js"></script>

	<!-- Select -->
	<script src="/assets/plugins/select2-4.0.13/dist/js/select2.full.js"></script>
	<script>
		$(document).ready(function () {
			$('#my_table').DataTable();
		});

		$('#customSelect').select2();
	</script>
	
</body>

</html>