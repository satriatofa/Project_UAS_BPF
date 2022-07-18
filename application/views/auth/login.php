<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('Auth/cek_login') ?>" method="POST" class="mt-5 mb-5 login-input">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                            </div>
                        </form>
                        <p class="sign-up">Belum Punya Akun?<a href="<?= base_url('Auth/registrasi') ?>"> Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
