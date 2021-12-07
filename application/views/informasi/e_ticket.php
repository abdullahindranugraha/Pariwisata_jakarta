<section class="bg-light" id="anggota">
    <div class="container">
        <h1 class="text-center">E-tiket</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nama pariwisata</th>
                    <th>nama Pembeli</th>
                    <th>email</th>
                    <th>tanggal kunjungan</th>
                    <th>harga</th>
                    <th>jumlah beli</th>
                    <th>total</th>
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
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>