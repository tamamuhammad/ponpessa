<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header p-0">
        <div class="card card-widget widget-user" style="height: 150px;">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-olive" style="height: 150px; border-radius: 0px!important">
                <h3 class="widget-user-username pt-5" style="font-size: 20pt">GANTI PASSWORD</h3>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-10">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-data="Password"></div>
            <?= $this->session->flashdata('danger'); ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="passwordlama" class="col-sm-2 col-form-label">Password lama</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwordlama" name="passwordlama">
                        <?= form_error('passwordlama', '<small class="text-danger">', '</small') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="passwordbaru" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwordbaru" name="passwordbaru">
                        <?= form_error('passwordbaru', '<small class="text-danger">', '</small') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ulangipassword" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="ulangipassword" name="ulangipassword">
                        <?= form_error('ulangipassword', '<small class="text-danger">', '</small') ?>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <button class="btn btn-warning" type="submit">Ganti password</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->