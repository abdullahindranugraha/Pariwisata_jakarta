<section id="ubah_pariwisata">
    <div class="container">
        <h1 class="text-center"><?= $judul ?></h1>
        <?php
        foreach ($pariwisata as $p) { ?>
            <div class="row">
                <div class="col-sm-4 mt-4">
                    <img src="<?= base_url('assets/img/upload/') . $p['gambar']; ?>" class="img-thumbnail" alt="...">
                </div>

                <div class="col-sm-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $p['nama_pariwisata']; ?></h5>
                        <form action="<?= base_url('admin/editpariwisata'); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="old_pict" value="<?= $p['gambar']; ?>">
                            <input type="hidden" name="id_pariwisata" value="<?= $p['id_pariwisata']; ?>">
                            <div class="form-group">
                                <label for="judul_buku">Nama Pariwisata</label>
                                <input type="text" class="form-control formcontrol-user" id="nama_pariwisata" name="nama_pariwisata" placeholder="Masukkan Nama Pariwisata" value="<?= $p['nama_pariwisata']; ?>"><br>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Masukkan nama alamat" value="<?= $p['alamat']; ?>"><br>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control formcontrol-user" id="harga" name="harga" placeholder="Masukkan harga" value="<?= $p['harga']; ?>"><br>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="kategori" name="kategori" placeholder="Masukkan kategori" value="<?= $p['kategori']; ?>"><br>
                            </div>

                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="4" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi"><?= $p['deskripsi']; ?></textarea><br>

                            <div class="custom-file">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Pilih Gambar</label>
                                    <input class="form-control" type="file" id="gambar" name="gambar">
                                </div>
                            </div>
                        <?php } ?>

                        <div class="form-group float-right mt-3">
                            <a href="<?= base_url('admin'); ?>" class="btn btn-secondary"><i class="fas fa-ban"></i> Batal</a>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</section>

<!-- End of Main Content -->