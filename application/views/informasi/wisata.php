<div class="bg-wisata">
    <h1 class="text-center"><?php echo $judul ?></h1>
    <center>
        <hr>
    </center>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>We travel not to escape life, but for life not to escape us</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Someone
        </figcaption>
    </figure>
    <div class="container-fluid">
        <?php
        foreach ($pariwisata as $b) { ?>
            <section class="pariwisata">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php echo base_url() ?>assets/img/upload/<?= $b['gambar']; ?>" alt="..." class="img-thumbnail">
                    </div>
                    <div class="col-sm-7">
                        <h1><?= $b['nama_pariwisata']; ?></h1>
                        <h3><?= $b['kategori']; ?></h3>
                        <h5><?= $b['alamat']; ?></h5>
                        <p><?= $b['deskripsi']; ?></p>
                        <h2>Rp. <?= $b['harga']; ?></h2>
                        <a href="<?php echo base_url('informasi/tiket/') . $b['id_pariwisata']; ?>" class="btn btn-primary">Beli Tiket</a>
                    </div>
                </div>
            </section>
        <?php } ?>
    </div>
</div>