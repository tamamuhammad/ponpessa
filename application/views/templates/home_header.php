<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo $judul; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/animate.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/aos.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/all.min.css">
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-success ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<!-- <form action="#" class="searchform order-lg-last">
				<div class="form-group d-flex">
					<input type="text" class="form-control pl-3" placeholder="Search">
					<button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
				</div>
			</form> -->
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item <?= ($this->uri->segment(2) == '' ? 'active' : '') ?>"><a href="<?= base_url('home'); ?>" class="nav-link pl-0">Home</a></li>
					<li class="nav-item <?= ($this->uri->segment(2) == 'artikel' ? 'active' : '') ?>"><a href="<?= base_url('home/artikel') ?>" class="nav-link">Artikel</a></li>
					<li class="nav-item <?= ($this->uri->segment(2) == 'madrasah' ? 'active' : '') ?>"><a href="<?= base_url('home/madrasah'); ?>" class="nav-link">Madrasah</a></li>
					<li class="nav-item <?= ($this->uri->segment(2) == 'pengurus' ? 'active' : '') ?>"><a href="<?= base_url('home/pengurus'); ?>" class="nav-link">Badan Kepengurusan</a></li>
					<li class="nav-item  <?= ($this->uri->segment(2) == 'galeri' ? 'active' : '') ?>"><a href="<?= base_url('home/galeri'); ?>" class="nav-link">Galeri</a></li>
					<li class="nav-item <?= ($this->uri->segment(2) == 'profil' ? 'active' : '') ?>"><a href="<?= base_url('home/profil'); ?>" class="nav-link">Profil</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->