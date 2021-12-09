<!-- Header-->
<header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder">Selamat Datang Adminku</h1>
        <p class="lead">Kelola dan update website kita</p>
        <a class="btn btn-lg btn-light" href="#pariwisata">YUK!</a>
    </div>
</header>
<!-- About section-->
<section id="pariwisata">
    <div class="container">
        <h1 class="text-center">Data Pariwisata</h1>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php } ?>
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data Pariwisata
        </button>
        <div class="row gx-4 justify-content-center">
            <!-- Tabel -->
            <table class="table mt-3" id="table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pariwisata</th>
                        <th>Alamat</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($pariwisata as $p) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $p['nama_pariwisata']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['harga']; ?></td>
                            <td><?= $p['kategori']; ?></td>
                            <td><?= $p['deskripsi']; ?></td>
                            <td>
                                <img src="<?= base_url('assets/img/upload/') . $p['gambar']; ?>" alt="" class="img-thumbnail img-fluid">
                            </td>
                            <td>
                                <a href="<?= base_url('admin/editpariwisata/') . $p['id_pariwisata']; ?>" class="btn btn-success"> Ubah</a>
                                <a href="<?= base_url('admin/hapus_pariwisata/') . $p['id_pariwisata']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $p['nama_pariwisata']; ?> ?');" class="btn btn-danger mt-2"> Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- Services section-->
<section class="bg-light" id="anggota">
    <div class="container">
        <h1 class="text-center">Data Pengguna Website</h1>
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Anggota</th>
                            <th>Email</th>
                            <th>Role ID</th>
                            <th>Aktif</th>
                            <th>Member/admin Sejak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($anggota as $a) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $a['nama']; ?></td>
                                <td><?= $a['email']; ?></td>
                                <td><?= $a['role_id']; ?></td>
                                <td><?= $a['is_active']; ?></td>
                                <td><?= date('D, d F Y', $a['tanggal_input']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <p>keterangan :</p>
                <p>role id 1 = Administrator</p>
                <p>role id 2 = Member</p>

            </div>
        </div>
    </div>
</section>
<!-- Contact section-->
<section id="tiket">
    <div class="container">
        <div class="row gx-4 justify-content-center">
            <h1 class="text-center">E-tiket</h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pariwisata</th>
                        <th>Nama Pembeli</th>
                        <th>Email</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Harga</th>
                        <th>Jumlah Beli</th>
                        <th>Total</th>
                        <th>Id Tiket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($tiket as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama_pariwisata']; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['tanggal']; ?></td>
                            <td>RP. <?= $a['harga']; ?></td>
                            <td><?= $a['jumlah_beli']; ?></td>
                            <td>Rp. <?= $a['total_bayar']; ?></td>
                            <td><?= $a['id_tiket']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_pariwisata" name="nama_pariwisata" placeholder="Masukkan nama pariwisata"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga"><br>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Kategori" name="kategori" placeholder="Kategori"><br>
                    </div>
                    <div class="mb-3">
                        <label for="deksripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="5" name="deskripsi"></textarea>
                    </div>
                    <div class="form-group">Gambar
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>