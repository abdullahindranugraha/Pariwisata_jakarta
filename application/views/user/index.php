<div class="content-stickyfooter">
    <div class="container-fluid">
        <?php echo $this->session->flashdata('pesan') ?>

        <div class="profile">
            <h1 class="text-center"><?= $judul ?></h1>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="...">
                </div>

                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-4 bg-light mt-4">
                            <h3>Nama</h3>
                        </div>
                        <div class="col-sm-8 mt-4">
                            <h3><?= $user['nama']; ?></h3>
                        </div>

                        <div class="col-sm-4 bg-light mt-4">
                            <h3>Email</h3>
                        </div>
                        <div class="col-sm-8 mt-4">
                            <h3><?= $user['email']; ?></h3>
                        </div>

                        <div class="col-sm-4 bg-light mt-4">
                            <h5>Jadi Admin/Member Sejak</h5>
                        </div>
                        <div class="col-sm-8 mt-4">
                            <h3><?= date('d F Y', $user['tanggal_input']); ?></h3>
                        </div>
                    </div>
                </div>
                <center>
                    <!-- <div class="btn btn-success"> -->
                    <a href="<?= base_url('user/ubahprofil'); ?>" class="btn btn-success"><i class="fas fa-user-edit"></i> Ubah Profil</a>
                    <!-- </div> -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#LogoutModal">
                        <a href="<?= base_url('autentifikasi/logout'); ?>" class="text text-white"></a>Logout
                    </button>
                </center><br><br>
            </div>
        </div>
    </div>
</div>