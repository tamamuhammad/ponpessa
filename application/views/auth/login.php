<div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url('auth') ?>">Login <b>PONPES SMKSA</b></a>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="text-muted text-center">Log In untuk halaman web Pondok Pesantren SMK Syafi'i Akrom</p>
            <form action="<?= base_url('auth'); ?>" method="post">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Email" name="email" id="email" autofocus value="<?= set_value('email') ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                <div class="input-group mt-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                <div class="row mt-3">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-success btn-block">Log In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->