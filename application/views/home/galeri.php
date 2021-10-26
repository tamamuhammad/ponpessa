    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/img/bg_1.jpg');">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row no-gutters slider-text align-items-center justify-content-center">
    			<div class="col-md-9 ftco-animate text-center">
    				<h1 class="mb-2 bread">Galery</h1>
    				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Galery <i class="ion-ios-arrow-forward"></i></span></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<?php foreach ($foto as $f) : ?>
    				<div class="col-md-4">
    					<div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?= base_url() ?>assets/img/galeri/<?= $f['foto'] ?>);">
    						<div class="overlay"></div>
    						<div class="text text-center p-4">
    							<h3 class="text-white"><?= $f['ket'] ?></h3>
    							<span><?= $f['tgl'] ?></span>
    						</div>
    					</div>
    				</div>
    			<?php endforeach; ?>
    		</div>
    		<div class="row mt-5">
    			<div class="col text-center">
    				<?= $this->pagination->create_links(); ?>
    			</div>
    		</div>
    		<!-- <div class="row mt-5">
    			<div class="col text-center">
    				<div class="block-27">
    					<ul>
    						<li><a href="#">&lt;</a></li>
    						<li class="active"><span>1</span></li>
    						<li><a href="#">2</a></li>
    						<li><a href="#">3</a></li>
    						<li><a href="#">4</a></li>
    						<li><a href="#">5</a></li>
    						<li><a href="#">&gt;</a></li>
    					</ul>
    				</div>
    			</div>
    		</div> -->
    	</div>
    </section>