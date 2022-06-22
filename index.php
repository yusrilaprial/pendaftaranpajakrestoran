<?php
error_reporting(0);
include('koneksi.php'); ?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="logo.ico">
	<title>BPPD KOTA PALEMBANG</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/album.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
		<img class="masthead-avatar mb-1" src="assets/img/logo.png" />
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#tentang">Tentang</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#info">Informasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="db.php">Pelayanan Pajak</a>
				</li>
			</ul>
			<a href="register.php" class="btn btn-outline-success mr-3">Register</a>

		</div>
	</nav>

	<main role="main">


		<section class="jumbotron text-center">
			<div class="container">
				<h1 class="jumbotron-heading">PAJAK RESTORAN</h1>
				<p class="lead text-muted">APLIKASI WEBSITE PENDAFTARAN WAJIB PAJAK RESTORAN DI BADAN PENGELOLAAN PAJAK DAERAH KOTA PALEMBANG</p>
				<p>
					<a href="#" class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModal">ADMIN</a>
				</p>
			</div>
		</section>
		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" id="info">Informasi Pajak Restoran</h2>
		<div class="album py-5 bg-light">
			<div class="container">

			<?php
			$file = htmlentities($_GET['p']);

			$folder = htmlentities($_GET['m']);

			$pagefolder = "$folder/$file.php";

			if (!empty($file) and file_exists($pagefolder)) {
			include("$pagefolder");
			} elseif (!empty($file) and !file_exists($pagefolder)) {
			include("404.html");
			} else {
			include('./pages/dashboard.php');
			}
			?>

			</div>
		</div>
		<div class="footer-logo">
			<img src="assets/img/1.jpg" height="40%" width="100%">
			<br>
			<br>
			<br>
			<!-- FOOT NAVIGATION -->
			<div class="container">
				<!-- SPOTLIGHT -->
				<div class="t3-spotlight t3-footnav  row">
					<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-6">
						<div class="t3-module module " id="Mod144">
							<div class="module-inner">
								<div class="module-ct">


									<div class="custom">

										<br>
										<p><strong>Badan Pengelolaan Pajak Daerah Kota Palembang adalah institusi pemerintah yang menerima dan mengelola pajak demi peningkatan pendapatan daerah kota Palembang.</strong></p>
									</div>
								</div>
							</div>
						</div>
						<div class="t3-module module " id="Mod127">
							<div class="module-inner">
								<div class="module-ct">
									<div class="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-6">
						<div class="t3-module module business-hour " id="tentang">
							<div class="module-inner">
								<h3 class="module-title "><span>Jam Layanan Kantor</span></h3>
								<div class="module-ct">

									<div class="custom business-hour">
										<ul>
											<li>Senin <strong>08:00 - 15:00</strong></li>
											<li>Selasa <strong>08:00 - 15:00</strong></li>
											<li>Rabu <strong>08:00 - 15:00</strong></li>
											<li>Kamis <strong>08:00 - 15:00</strong></li>
											<li>Jumat <strong>08:00 - 15:30</strong></li>
											<li>Sabtu Minggu <strong>Libur</strong></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="t3-module module address " id="Mod146">
							<div class="module-inner">
								<h3 class="module-title "><span>Apa itu BPPD</span></h3>
								<div class="module-ct">

									<div class="custom address">
										<p>Sektor pajak daerah merupakan sumber pendapatan utama bagi Pemerintah Kota Palembang,
											dengan memberikan kontribusi sepertiga dari total pendapatan daerah. Ini merupakan tugas utama dari dibentuknya Badan Pengelolaan Pendapatan Daerah, berharap adanya peningkatan kesadaran dan kepatuhan wajib pajak dalam membayar pajak daerah serta meningkatnya pengawasan atas pelaksanaan sistem perpajakan di Kota Palembang.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- SPOTLIGHT -->
			</div>
			<!-- //FOOT NAVIGATION -->

			<div class="t3-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-8 ">
						</div>
					</div>
				</div>
			</div>

	</main>
	<link rel="shortcut icon" href="logo.ico" type="image/x-icon">
	<link rel='stylesheet' href='db/css/bootstrap.min.css'>
	<link rel='stylesheet' href='db/css/main.css'>
	<link rel='stylesheet' href='db/css/slick.css'>
	<link rel='stylesheet' href='db/css/slick-theme.css'>
	<link rel='stylesheet' href='db/css/simplebar.css'>
	<link rel='stylesheet' href='db/css/summernote-bs4.css'>
	<link rel='stylesheet' href='db/css/sweetalert2.min.css'>
	<link rel='stylesheet' href='db/css/gijgo.min.css'>
	<script src="db/js/jquery-3.3.1.min.js"></script>
	<script src="db/js/bootstrap.bundle.min.js"></script>
	<script src="db/js/summernote-bs4.js"></script>

	<footer style="padding: 0;">
		<div class="footer-content">
			<div class="container">
				<div class="contact-content">
					<div class="contact-item">
						<div class="icon">
							<i class="mdi mdi-map-marker"></i>
						</div>
						<div class="desc">
							<h6 class="mb-1"><strong>Alamat</strong></h6>
							<i>Jl. Merdeka No.21, 19 Ilir, Kec. Bukit Kecil, Kota
								Palembang, Sumatera Selatan 30113.
							</i>
						</div>
					</div>
					<div class="contact-item">
						<div class="icon">
							<i class="mdi mdi-phone"></i>
						</div>
						<div class="desc">
							<h6 class="mb-1"><strong>Telepon</strong></h6>
							<i> (0711) 352282</i>
						</div>
					</div>
					<div class="contact-item">
						<div class="icon">
							<i class="mdi mdi-web"></i>
						</div>
						<div class="desc">
							<h6 class="mb-1"><strong>Website</strong></h6>
							<a href="https://bppd.palembang.go.id/" style="color: white;">bppd.palembang.go.id</a>
						</div>
					</div>
					<div class="contact-item">
						<div class="icon">
							<i class="mdi mdi-instagram"></i>
						</div>
						<div class="desc">
							<h6 class="mb-1"><strong>instagram</strong></h6>
							<a href="https://www.instagram.com/bppdkotapalembang/" style="color: white;">@bppdkotapalembang</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container text-center">
				© Copyright 2022. Badan Pengelolaan Pendapatan Daerah (BPPD) Kota Palembang (5 ID)
			</div>
		</div>
	</footer>
	</div>
	<script src='db/js/simplebar.min.js'></script>
	<script src='db/js/slick.min.js'></script>
	<script src='db/js/sweetalert2.min.js'></script>
	<script src='db/js/bottom.js'></script>
	<script src='db/js/pdf.js'></script>
	<script>
		console.log('modal of pelayanan-pajak is not exist')
	</script>
	<script>
		console.log('js of pelayanan-pajak is not exist')
	</script>
	<!-- End custom js for this page-->
  <script src="administrator/plugins/jquery/jquery.min.js"></script>
  <script src="administrator/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">LOGIN ADMIN</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
            			<small id="login-box-msg" class="form-text text-muted text-center"></small>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">Jangan salah memasukan email</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary btn-block" id="login">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  	<script src="js/ajaxLogin.js"></script>
	<script>
		$(document).ready(function() {
			Swal.fire({
				title: '<span><small>Selamat Datang di</small><br> <strong> Website BPPD Kota Palembang</strong></span>',
				type: 'info',
				html: `Untuk melakukan pendaftaran silakan tekan tombol register yang berada disebelah kanan atas anda.`,
				showCloseButton: true,
				showCancelButton: false,
				focusConfirm: false,

				confirmButtonText: 'Ok Terimakasih',

			})
		});
	</script>
</body>

</html>