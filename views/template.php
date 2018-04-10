<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Nexumport</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<?php include "modules/header.php"; ?>

		<!-- Main -->
			<div id="main">
			<?php

				if(isset($_GET["path"])){
					if($_GET["path"] == "inicio"||
						 $_GET["path"] == "nosotros"||
					 	 $_GET["path"] == "servicios"||
						 $_GET["path"] == "contacto"){
						include "modules/".$_GET['path'].".php";
					}
				} else {
					include "modules/inicio.php";
				}

			?>

			</div>

		<!-- Footer -->
			<?php include "modules/footer.php"; ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<!-- <script src="assets/js/jquery.scrollzer.min.js"></script> -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
