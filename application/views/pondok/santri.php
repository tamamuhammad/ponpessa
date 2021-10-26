<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-top: -5px">
    <!-- Content Header (Page header) -->
    <div class="card card-widget widget-user" style="height: 600px;">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-olive" style="height: 250px">
            <h3 class="widget-user-username pt-5" style="font-size: 20pt">JUMLAH SANTRI</h3>
            <?php foreach ($santri as $s) : ?>
                <h5 class="widget-user-desc" style="font-size: 40pt"><?= $s['jumlah'] ?> Santri <a href="" data-toggle="modal" data-target="#editSantri" style=" text-decoration:none;color:white;font-size:10pt"><i class="fas fa-pencil-alt"></i></a></h5>
                <h5 class="pb-5"><?= $s['tahun'] ?></h5>
            <?php endforeach; ?>
        </div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-data="Jumlah Santri"></div>
    </div>
</div>
<!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade" id="editSantri" tabindex="-1" role="dialog" aria-labelledby="editNewSantri" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editNewSantri">Edit Jumlah Santri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pondok/santri') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="<?= $santri[0]['id'] ?>">
                    <div class="form-group">
                        <label for="jumlah">Jumlah Santri Terbaru :</label>
                        <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?= $santri[0]['jumlah'] ?>">
                        <?= form_error('jumlah', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Edit Santri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>