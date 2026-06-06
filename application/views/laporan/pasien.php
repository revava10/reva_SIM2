<div class="container">

    <h3>Laporan Pasien</h3>

    <form method="GET">

        <input type="text"
               name="nama"
               value="<?= $nama ?>"
               placeholder="Cari nama pasien">

        <button type="submit" class="btn btn-secondary">
            Filter
        </button>

        <a href="<?= base_url('laporan/pasien') ?>"
           class="btn btn-secondary">
           Reset
        </a>

    </form>

    <br>

    <a href="<?= base_url('laporan/cetak_pasien') ?>"
       target="_blank"
       class="btn btn-primary mb-3">
       Cetak PDF
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Keluhan</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        foreach($pasien as $p){
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p->nama ?></td>
            <td><?= $p->alamat ?></td>
            <td><?= $p->telepon ?></td>
            <td><?= $p->keluhan ?></td>
            <td><?= $p->status ?></td>
        </tr>

        <?php } ?>

    </table>

</div>