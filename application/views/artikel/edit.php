<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header p-0">
        <div class="card card-widget widget-user" style="height: 150px;">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-olive" style="height: 150px; border-radius: 0px!important">
                <h3 class="widget-user-username pt-5" style="font-size: 20pt">EDIT ARTIKEL</h3>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-8">
            <form action="<?= base_url('dashboard/edit/') . $artikel['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $artikel['judul']; ?>">
                        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isi" class="col-sm-2 col-form-label">isi</label>
                    <div class="col-sm-10">
                        <textarea class="textarea" placeholder="Isi Artikel" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="isi" id="isi"><?= $artikel['isi'] ?></textarea>
                        <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Header</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 justify-content-end">
                    <button class="btn btn-warning" type="submit">Edit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->