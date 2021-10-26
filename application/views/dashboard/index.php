  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header p-0">
          <div class="card card-widget widget-user" style="height: 150px;">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-olive" style="height: 150px; border-radius: 0px!important">
                  <h3 class="widget-user-username pt-5" style="font-size: 20pt">DASHBOARD</h3>
              </div>
          </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-lg-3 col-6 mt-5">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                      <div class="inner">
                          <?php foreach ($santri as $s) : ?>
                              <h3 style="font-size: 36pt"><?= $s['jumlah']; ?></h3>
                          <?php endforeach; ?>

                          <p class="mt-1 mb-0">Jumlah Santri</p>
                      </div>
                      <div class="icon">
                          <i style="padding-left: 15px; font-size: 75px" class="circle elevation-2 fad fa-users"></i>
                      </div>
                      <a class="small-box-footer btn w-100" href="<?= base_url('pondok/santri') ?>">Lihat Selengkapnya</a>
                  </div>
              </div>
              <div class="col-lg-3 col-6 mt-5">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                      <div class="inner">
                          <h3 style="font-size: 36pt"><?= $artikel; ?></h3>

                          <p class="mt-1 mb-0">Jumlah Artikel</p>
                      </div>
                      <div class="icon">
                          <i style="padding-left: 18px; font-size: 75px" class="circle elevation-2 fad fa-newspaper"></i>
                      </div>
                      <a class="small-box-footer btn w-100" href="<?= base_url('dashboard/artikel') ?>">Lihat Selengkapnya</a>
                  </div>
              </div>
              <div class="col-lg-3 col-6 mt-5">
                  <!-- small box -->
                  <div class="small-box bg-primary">
                      <div class="inner">
                          <h3 style="font-size: 36pt"><?= $pengurus; ?></h3>

                          <p class="mt-1 mb-0">Jumlah Pengurus</p>
                      </div>
                      <div class="icon">
                          <i style="padding-left: 35px; font-size: 75px" class="circle elevation-2 fad fa-clipboard-user"></i>
                      </div>
                      <a class="small-box-footer btn w-100" href="<?= base_url('pondok/pengurus') ?>">Lihat Selengkapnya</a>
                  </div>
              </div>
          </div>
      </section>
  </div>