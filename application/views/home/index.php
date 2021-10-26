<section class="home-slider owl-carousel">
	<div class="slider-item" style="background-image:url(assets/img/bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<h1 class="mb-4">Ponpes SMK Syafi'i Akrom</h1>
					<span class="subheading">Kota Pekalongan</span>
				</div>
			</div>
		</div>
	</div>

	<div class="slider-item" style="background-image:url(assets/img/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<h1 class="mb-4">Ponpes SMK Syafi'i Akrom</h1>
					<span class="subheading">Kota Pekalongan</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Artikel</span></h2>
				<p>Berita Terbaru Seputar Ponpes-SMK Syafi'i Akrom dan seputar hukum Islam dalam kehidupan sehari-hari</p>
			</div>
		</div>
		<div class="row">
			<?php foreach ($artikel as $a) : ?>
				<div class="col-md-6 col-lg-4 ftco-animate">
					<div class="blog-entry">
						<a class="block-20 d-flex align-items-end" style="background-image: url('assets/img/artikel/<?= $a['gambar'] ?>');">
							<div class="meta-date text-center p-2">
								<?php
								$tgl = date("Y-M-d", strtotime($a['tgl']));
								$tgl = explode("-", $tgl);
								?>
								<span class="day"><?= $tgl[2] ?></span>
								<span class="mos"><?= $tgl[1] ?></span>
								<span class="yr"><?= $tgl[0] ?></span>
							</div>
						</a>
						<div class="text bg-white p-4">
							<h3 class="heading"><a href="<?= base_url('artikel/index/') . $a['id'] ?>"><?= $a['judul'] ?></a></h3>
							<p><?= substr($a['isi'], 0, 100) ?></p>
							<div class="d-flex align-items-center mt-4">
								<p class="mb-0"><a href="<?= base_url('artikel/index/') . $a['id'] ?>" class="btn btn-success">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
								<p class="ml-auto mb-0">
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>



<section class="ftco-intro ftco-no-pb img" style="background-image: url(assets/img/bg_3.jpg);">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
				<h2 class="mb-0">Jumlah Santri Pondok SMK Syafi'i Akrom</h2>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter" id="section-counter">
	<div class="container">
		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="wrapper">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18" style="text-align: center;">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="<?= $s['jumlah'] ?>">0</strong>
								<span>Santri</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4">Pengasuh Ponpes Syafi'i Akrom</h2>
				<p>Ponpes-SMK Syafi'i Akrom diasuh oleh beliau Kyai Muhsinin yang sekaligus menjadi guru di SMK Syafi'i Akrom</p>

				<img src="<?= base_url('assets/img/pengurus/' . $pengurus['foto']) ?>" class="rounded-circle" width="304" height="236">
				<h5 class="card-title text-center font-weight-bolder mt-3"><?= $pengurus['nama'] ?></h5>
				<p class="card-text text-center">Pengasuh Ponpes SMK Syafi'i Akrom</p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4">Alamat Ponpes SMK Syafi'i Akrom</h2>
				<p>Ponpes-SMK Syafi'i Akrom beralamat di Jl. Pelita 1 No. 322 Kota Pekalongan 51133 Jawa Tengah, Indonesia. </p>

			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7945588062157!2d109.66541131477285!3d-6.915148995003494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70241cd03a660b%3A0x4f78c8f09669ab88!2sSMK%20Syafi&#39;i%20Akrom!5e0!3m2!1sid!2sid!4v1595295756229!5m2!1sid!2sid" width="2000" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
	</div>
</section>