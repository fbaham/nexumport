<!DOCTYPE HTML>
<!--
	Standout by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
<html>
	<head>
		<title>Untitled</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header Wrapper -->
			<div id="header-wrapper">
				<?php include "modules/header.php"; ?>
			</div>
			<!-- Main Wrapper -->
			<div id="main-wrapper">
				<?php
					if(isset($_GET["path"])){
						if($_GET["path"] == "inicio"||
							 $_GET["path"] == "nosotros"||
							 $_GET["path"] == "productos"||
							 $_GET["path"] == "contacto"){
								 $path = $_GET["path"];
								 include "modules/".$_GET["path"].".php";
						} else {
							include "modules/404.php";
						}
					} else {
						include "modules/inicio.php";
					}

				?>
			</div>
			<!-- Footer Wrapper -->
				<div id="footer-wrapper">

					<!-- Footer -->
						<?php include "modules/footer.php"; ?>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.slidertron.min.js"></script>
			<script src="assets/js/jquery.rotatorrr.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
