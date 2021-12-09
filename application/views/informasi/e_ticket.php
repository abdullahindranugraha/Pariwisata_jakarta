<div class="content-stickyfooter bg-light">
    <div class="container">
        <h1 class="text-center">E-tiket</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama pariwisata</th>
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