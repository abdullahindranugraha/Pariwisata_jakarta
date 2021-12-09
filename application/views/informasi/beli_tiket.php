<div class="container">
    <div class="row">
        <?php
        foreach ($pariwisata as $p) { ?>
            <div class="col-sm-4 mt-5">
                <img src="<?= base_url('assets/img/upload/') . $p['gambar']; ?>" class="img-thumbnail" alt="...">
            </div>

            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">Pembelian Ticket</h3>
                    <form action="<?= base_url('informasi/tiket'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="nama_pariwisata" class="col-sm-3 col-form-label">Nama Pariwisata</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama_pariwisata" name="nama_pariwisata" value="<?= $p['nama_pariwisata']; ?>" readonly><br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $p['harga']; ?>" readonly><br>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Atas Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" readonly><br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">id pengguna</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_pengguna" name="id_pengguna" value="<?= $user['id']; ?>" readonly><br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly><br>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control formcontrol-user" id="tanggal" name="tanggal" placeholder="Tanggal Kunjungan" required><br>
                            <?= form_error(
                                'tanggal',
                                '<small class="text-danger pl-3">',
                                '</small>'
                            ); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_beli" class="col-sm-3 col-form-label">Jumlah Beli:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control formcontrol-user" id="jumlah_beli" name="jumlah_beli" min="1" max="100" value="1">
                        </div>
                    </div>

                    <div class="form-group float-right mt-3">
                        <a href="<?= base_url('informasi/wisata'); ?>" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    </form>
                </div>
            </div>
    </div>

</div>

<!-- End of Main Content -->