  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header p-0">
          <div class="card card-widget widget-user" style="height: 150px;">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-olive" style="height: 150px; border-radius: 0px!important">
                  <h3 class="widget-user-username pt-5" style="font-size: 20pt">ARTIKEL</h3>
              </div>
          </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-data="Artikel"></div>
      <a href="<?= base_url('dashboard/tambah') ?>" class="btn btn-info tambah ml-2 mb-2">Tambah Artikel</a>
      <div class="card mx-2">
          <div class="card-body table-responsive p-2">

              <table class="table table-striped table-hover table-responsive" id="zero_config">
                  <thead>
                      <tr>
                          <td>No.</td>
                          <td>Judul</td>
                          <td>Isi</td>
                          <td>Header</td>
                          <td>Tanggal Posting</td>
                          <td>Action</td>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                        $i = 1;
                        foreach ($artikel as $a) :
                        ?>
                          <tr>
                              <td><?= $i++; ?></td>
                              <td><?= $a['judul'] ?></td>
                              <td><?= substr($a['isi'], 0, 60) ?></td>
                              <td><img src="<?= base_url('assets/img/artikel/') . $a['gambar'] ?>" width="50"></td>
                              <td><?= $a['tgl'] ?></td>
                              <td>
                                  <a href="<?= base_url('dashboard/edit/') . $a['id'] ?>" class="btn btn-warning edit"><i class="fad fa-pencil-alt"></i></a>
                                  <a href="<?= base_url('dashboard/hapus/') . $a['id'] ?>" class="btn btn-danger hapus"><i class="fad fa-trash-alt"></i></a>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
          </div>
      </div>
  </div>

  <!-- Modal
  <div class="modal fade" id="addArtikel" tabindex="-1" role="dialog" aria-labelledby="addNewArtikel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addNewArtikel">Tambah Artikel</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('dashboard/artikel') ?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id" id="id" value="">
                      <div class="form-group">
                          <label for="judul">Judul :</label>
                          <input type="text" class="form-control" name="judul" id="judul">
                          <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="foto" name="foto">
                              <label class="custom-file-label" for="foto">Pilih Header</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="isi">Isi :</label>
                          <textarea class="textarea" placeholder="Isi Artikel" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="isi" id="isi"></textarea>
                          <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info">Tambah Artikel</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div> -->