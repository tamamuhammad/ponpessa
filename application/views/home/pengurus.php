    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/img/bg_1.jpg');">
    	<div class="overlay">
    		<div class="container">
    			<div class="row no-gutters slider-text align-items-center justify-content-center">
    				<div class="col-md-9 ftco-animate text-center">
    					<h1 class="mb-2 bread">Badan Kepengurusan</h1>
    					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>B. Kepengurusan Pondok SMK Syafi'i Akrom <i class="ion-ios-arrow-forward"></i></span></p>
    				</div>
    			</div>
    		</div>
    </section>

    <section class="gambar my-5">
    	<div class="container my-5" style="background-color: rgba(125, 125, 125, 0.1); border-radius: 10px">
    		<div class="row justify-content-center">
    			<div class="col-12">
    				<img src="<?= base_url() ?>assets/img/pengurus/<?= $pengasuh['foto'] ?>" class="card-img-top rounded-circle mx-auto d-block" style="width: 340px!important">
    				<h5 class="card-title text-center mt-3 font-weight-bolder"><?= $pengasuh['nama'] ?></h5>
    				<h5 class="card-text text-muted text-center ">Pengasuh Ponpes SMK Syafi'i Akrom</h5>
    			</div>
    		</div>


    		<div class="row justify-content-center py-5">
    			<?php foreach ($staff as $s) : ?>
    				<div class="col-4">
    					<img src="<?= base_url() ?>assets/img/pengurus/<?= $s['foto'] ?>" class="card-img-top rounded-circle mx-auto d-block" style="width: 340px!important">
    					<h5 class="card-title text-center font-weight-bolder mt-3"><?= $s['nama'] ?></h5>
    					<p class="card-text text-center"><?= $s['jabatan'] ?></p>
    				</div>
    			<?php endforeach ?>
    		</div>

    		<div class="row justify-content-center py-5">
    			<?php foreach ($pengurus as $p) : ?>
    				<div class="col">
    					<img src="<?= base_url() ?>assets/img/pengurus/<?= $p['foto'] ?>" class="card-img-top rounded-circle mx-auto d-block" style="width: 340px!important">
    					<h5 class="card-title text-center font-weight-bolder mt-3"><?= $p['nama'] ?></h5>
    					<p class="card-text text-center"><?= $p['jabatan'] ?></p>
    				</div>
    			<?php endforeach; ?>
    		</div>


    </section>