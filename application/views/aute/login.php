<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <a class="" href="<?php echo base_url('informasi') ?>"><img src="<?php echo base_url() ?>assets/img/icon/home_icon.png" alt="" width="50" height="50"></a>
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <?php echo $this->session->flashdata('pesan') ?>
                            <h3 class="login-heading mb-4">Selamat datang</h3>

                            <!-- Sign In Form -->
                            <form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email" value="<?= set_value('email'); ?>" id="email" placeholder="Email" name="email">
                                    <label for="floatingPassword">Email</label>
                                    <?= form_error(
                                        'email',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ); ?>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                    <?= form_error(
                                        'password',
                                        '<small class="text-danger pl-3">',
                                        '</small>'
                                    ); ?>
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-lg btn-dark btn-login text-uppercase fw-bold mb-2" type="submit">Masuk</button>
                                    <a class="btn btn-lg btn-success btn-login text-uppercase fw-bold mb-2" href="<?= base_url('autentifikasi/registrasi'); ?>">
                                        Registrasi
                                    </a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>