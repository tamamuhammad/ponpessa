  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header p-0">
          <div class="card card-widget widget-user" style="height: 150px;">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-olive" style="height: 150px; border-radius: 0px!important">
                  <h3 class="widget-user-username pt-5" style="font-size: 20pt">GALERI</h3>
              </div>
          </div>
      </div>
      <!-- /.content-header -->

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-data="Foto"></div>
      <div class="p-3">
          <form action="<?= base_url('dashboard/galeri') ?>" method="post" enctype="multipart/form-data" class="form-inline">
              <div class="form-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="foto" name="foto">
                      <label class="custom-file-label" for="foto">Pilih foto</label>
                  </div>
              </div>
              <div class="form-group mx-4">
                  <label for="ket">Keterangan :</label>
                  <input type="text" class="form-control ml-2" name="ket" id="ket" style="width: 504px">
              </div>
              <button type="submit" class="btn btn-info">Tambah Foto</button>
          </form>
      </div>
      <!-- Main content -->
      <div class="container">
          <div class="card-group p-2">
              <div class="row justify-content-center">
                  <?php foreach ($galeri as $foto) : ?>
                      <div class="col-sm-3 card mx-2 p-0">
                          <img src="<?= base_url('assets/img/galeri/') . $foto['foto'] ?>" class="card-img-top" style="border-radius: 5px">
                          <div class="card-body px-4 pb-0">
                              <h5 class="card-title">PONPES SMKSA</h5>
                              <p class="card-text"><?= $foto['ket'] ?></p>
                              <p class="card-text"><small class="text-muted"><?= $foto['tgl'] ?></small></p>
                              <a href="<?= base_url('dashboard/delete/') . $foto['id'] ?>" class="float-right hapus" style="margin-top: -40px"><i class="fad fa-trash-alt"></i></a>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          </div>
      </div>
  </div>