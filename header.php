<?php
include "lib/config.php";
include "lib/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="description"
		content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
	<meta name="author" content="websmirno.site">
	<meta name="format-detection" content="telephone=no">
	<title>Puskesmas Kemangai</title>
	<!-- Stylesheets -->
	<link href="vendor/slick/slick.css" rel="stylesheet">
	<link href="vendor/animate/animate.min.css" rel="stylesheet">
	<link href="icons/style.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
	<link href="css/style-color-3.css" rel="stylesheet">
	<!--Favicon-->
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<!-- Google map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page layout-landing">
	<!--header-->
	<header class="header">
		<div class="header-quickLinks js-header-quickLinks d-lg-none">
			<div class="quickLinks-top js-quickLinks-top"></div>
			<div class="js-quickLinks-wrap-m">
			</div>
		</div>
		<div class="header-topline d-none d-lg-flex">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto d-flex align-items-center">
						<!-- <div class="header-phone"><i class="icon-telephone"></i><a
								href="tel:1-847-555-5555">1-800-267-0000</a></div> -->
						<div class="header-info"><i class="icon-placeholder2"></i>Jl. Raden Paku, Desa Bukit Tinggi Kecamatan Ambalau
						</div>
						<div class="header-info"><i class="icon-black-envelope"></i><a
								href="mailto:info@dentco.net">puskesmaskemangai17@gmail.com</a></div>
					</div>
					<div class="col-auto ml-auto d-flex align-items-center">
						<span class="header-social">
							<a href="#" class="hovicon"><i class="icon-facebook-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-twitter-logo-circle"></i></a>
							<a href="#" class="hovicon"><i class="icon-google-plus-circle"></i></a>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="header-content">
			<div class="container">
				<div class="row align-items-lg-center">
					<button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
						<span class="icon-menu"></span>
					</button>
					<div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
						<a href="index.php" class="header-logo"><img src="images/logo.png" alt=""
								class="img-fluid"></a>
					</div>
					<div class="col-lg ml-auto header-nav-wrap">
						<div class="header-nav js-header-nav">
							<nav class="navbar navbar-expand-lg btco-hover-menu">
								<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tentang
												kami</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="profile.php">Profile</a></li>
												<li><a class="dropdown-item" href="struktur.php">Struktur</a>
												</li>
												<li><a class="dropdown-item" href="demografi.php">Demografi</a></li>
												<li><a class="dropdown-item" href="dokter.php">Karyawan</a></li>
											</ul>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link dropdown-toggle"
												data-toggle="dropdown">Pelayanan</a>
											<ul class="dropdown-menu">
												<li><a class="dropdown-item" href="layanan-ukp.php">Layanan UKP</a>
												</li>
												<li><a class="dropdown-item" href="layanan-ukm.php">Layanan UKM</a>
												<li><a class="dropdown-item" href="jadwal-dokter.php">Jadwal</a>
												</li>
												<li><a class="dropdown-item" href="mekanisme-rujukan.php">Mekanisme
														Rujukan</a>
												</li>
										</li>
									</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Data
											Kesehatan</a>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle"
											data-toggle="dropdown">Informasi</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="tarif.php">Tarif</a>
											</li>
											<li><a class="dropdown-item" href="berita.php">Berita</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="kontak.php">Hubungi Kami</a>
									</li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="header-search">
							<form action="#" class="form-inline">
								<i class="icon-search"></i>
								<input type="text" placeholder="Search">
								<button type="submit"><i class="icon-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>