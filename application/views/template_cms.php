<!DOCTYPE html>

<html lang="en" class="no-js">

<head>
	<meta charset="utf-8" />
	<title><?= $judul_halaman; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="FlameOnePage freebie theme for web startups by FairTech SEO." name="description" />
	<meta content="FairTech" name="author" />
	<link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="<?= base_url('assets/flameone/');?>vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
		type="text/css" />
	<link href="<?= base_url('assets/flameone/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"
		type="text/css" />
	<link href="<?= base_url('assets/flameone/');?>css/animate.css" rel="stylesheet">
	<link href="<?= base_url('assets/flameone/');?>vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/flameone/');?>css/layout.min.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="favicon.ico" />
</head>


<body id="body" data-spy="scroll" data-target=".header">

	<header class="header navbar-fixed-top">
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="menu-container js_nav-item">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="toggle-icon"></span>
					</button>

					<div class="logo">
						<a class="logo-wrap" href="#body">
							<!-- <img class="logo-img logo-img-main" src="<?= base_url('assets/flameone/');?>img/logo.png"
								alt="FlameOnePage Logo">
							<img class="logo-img logo-img-active" src="<?= base_url('assets/flameone/');?>img/logo-dark.png"
								alt="FlameOnePage Dark Logo"> -->
							<h3 class="text-red fw-bold"><?= $konfigurasi->judul_website; ?></h3>
						</a>
					</div>
				</div>
				<div class="collapse navbar-collapse nav-collapse">

					<div class="menu-container">
						<ul class="nav navbar-nav navbar-nav-right">
							<li class="js_nav-item nav-item"><a href="<?= base_url('home') ?>">Home</a></li>
							<?php foreach ($kategori as $kate) {?>
							<li class="js_nav-item nav-item"><a
									href="<?= base_url('home/kategori/' . $kate['id_kategori']);?>"><?= $kate['nama_kategori']; ?></a>
							</li>
							<?php } ?>
							<li class="js_nav-item nav-item"><a href="#contact">Contact</a></li>
							<li class="js_nav-item nav-item"><a href="<?= base_url('auth');?>">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<?= $contents; ?>
	<!--========== FOOTER ==========-->
	<footer class="footer">
		<!-- Links -->
		<div class="section-seperator">
			<div class="content-md container">
				<div class="row">

					<div class="col-sm-4">
						<!-- List -->
						<ul class="list-unstyled footer-list">
							<li class="footer-list-item"><a href="#"><?= $konfigurasi->judul_website; ?></a></li>
							<li class="footer-list-item"><a href="#"><?= $konfigurasi->profil_website; ?></a></li>
							<li class="footer-list-item"><a href="#"><?= $konfigurasi->facebook; ?> &amp;
									<?= $konfigurasi->instagram; ?></a></li>
						</ul>
						<!-- End List -->
					</div>

					<div class="col-sm-4 sm-margin-b-30">
						<!-- List -->
						<ul class="list-unstyled footer-list">
							<li class="footer-list-item">
								<h3>Contact Us</h3>
							</li>
							<li class="footer-list-item">
								<i class="fa fa-map-marker" style="margin-right:10px;"></i><?= $konfigurasi->alamat; ?>
							</li>
							<li class="footer-list-item">
								<i class="fa fa-envelope" style="margin-right:10px;"></i><?= $konfigurasi->email; ?>
							</li>
							<li class="footer-list-item">
								<i class="fa fa-phone" style="margin-right:10px;"></i><?= $konfigurasi->no_wa; ?>
							</li>
							<li class="footer-list-item">
								<a href="https://www.instagram.com/<?= $konfigurasi->instagram; ?>"><i
										class="fa fa-instagram"></i></a>
								<a href="https://web.facebook.com/<?= $konfigurasi->facebook; ?>"><i
										class="fa fa-facebook"></i></a>
							</li>
							<li class="footer-list-item">
							</li>
						</ul>
						<!-- End List -->
					</div>

					<div class="col-sm-4 sm-margin-b-30">
						<!-- List -->
						<ul class="list-unstyled footer-list">
							<li class="footer-list-item"><a href="<?= base_url() ?>">Home</a></li>
							<?php foreach ($kategori as $kate) {?>
							<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover"
									href="<?= base_url('home/kategori/' . $kate['id_kategori']);?>">
									<?= $kate['nama_kategori']; ?></a></li>
							<li class="footer-list-item"></li>
							<?php } ?>
						</ul>
						<!-- End List -->
					</div>
				</div>
				<!--// end row -->
			</div>
		</div>
		<!-- End Links -->
	</footer>
	<!--========== END FOOTER ==========-->

	<!-- Back To Top -->
	<a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

	<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- CORE PLUGINS -->
	<script src="<?= base_url('assets/flameone/');?>vendor/jquery.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>vendor/jquery-migrate.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>vendor/bootstrap/js/bootstrap.min.js" type="text/javascript">
	</script>

	<!-- PAGE LEVEL PLUGINS -->
	<script src="<?= base_url('assets/flameone/');?>vendor/jquery.easing.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>vendor/jquery.back-to-top.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>vendor/jquery.wow.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>vendor/swiper/js/swiper.jquery.min.js" type="text/javascript">
	</script>
	<script src="<?= base_url('assets/flameone/');?>vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript">
	</script>
	<script src="<?= base_url('assets/flameone/');?>vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript">
	</script>

	<!-- PAGE LEVEL SCRIPTS -->
	<script src="<?= base_url('assets/flameone/');?>js/layout.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>js/components/wow.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>js/components/swiper.min.js" type="text/javascript"></script>
	<script src="<?= base_url('assets/flameone/');?>js/components/masonry.min.js" type="text/javascript"></script>

</body>
<!-- END BODY -->

</html>
