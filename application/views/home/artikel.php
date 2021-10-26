    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>assets/img/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Artikel</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Artikel <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <?php foreach ($artikel as $a) : ?>
            <div class="col-md-6 col-lg-4 ftco-animate">
              <div class="blog-entry">
                <a class="block-20 d-flex align-items-end" style="background-image: url('<?= base_url() ?>assets/img/artikel/<?= $a['gambar'] ?>');">
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
                  <p><?= substr($a['isi'], 0, 50) ?></p>
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
        <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#"><span>1</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
        <div class="row mt-5">
          <div class="col text-center">
            <?= $this->pagination->create_links(); ?>
          </div>
        </div>
      </div>
    </section>