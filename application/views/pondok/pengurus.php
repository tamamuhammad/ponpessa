  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header p-0">
          <div class="card card-widget widget-user" style="height: 150px;">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-olive" style="height: 150px; border-radius: 0px!important">
                  <h3 class="widget-user-username pt-5" style="font-size: 20pt">PENGURUS</h3>
              </div>
          </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-data="Pengurus"></div>
      <button type="button" data-toggle="modal" data-target="#addPengurus" class="btn btn-info tambahp ml-2 mb-2">Tambah Pengurus</button>
      <div class="card mx-2">
          <div class="card-body table-responsive p-0">

              <table class="table table-striped table-hover text-nowrap">
                  <tr>
                      <td>No.</td>
                      <td>Nama</td>
                      <td>Jabatan</td>
                      <td>Foto</td>
                      <td>Action</td>
                  </tr>
                  <?php
                    $i = 1;
                    foreach ($pengurus as $a) :
                    ?>
                      <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $a['nama'] ?></td>
                          <td><?= $a['jabatan'] ?></td>
                          <td><img src="<?= base_url('assets/img/pengurus/') . $a['foto'] ?>" width="75"></td>
                          <td>
                              <a href="" data-toggle="modal" data-target="#addPengurus" class="btn btn-warning editp" data-id="<?= $a['id'] ?>"><i class="fad fa-pencil-alt"></i></a>
                              <a href="<?= base_url('pondok/hapus/') . $a['id'] ?>" class="btn btn-danger hapus"><i class="fad fa-trash-alt"></i></a>
                          </td>
                      </tr>
                  <?php endforeach; ?>
              </table>
          </div>
      </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="addPengurus" tabindex="-1" role="dialog" aria-labelledby="addNewPengurus" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addNewPengurus">Tambah Pengurus</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="<?= base_url('pondok/pengurus') ?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" id="id" name="id" value="">
                      <div class="form-group">
                          <label for="nama">Nama :</label>
                          <input type="text" class="form-control" name="nama" id="nama">
                          <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                          <label for="jabatan">Jabatan :</label>
                          <input type="text" class="form-control" name="jabatan" id="jabatan">
                          <?= form_error('jabatan', '<small class="text-danger">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="foto" name="foto">
                              <label class="custom-file-label" for="foto">Pilih foto</label>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info">Tambah Pengurus</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>