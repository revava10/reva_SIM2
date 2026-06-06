<div class="container">

    <h3>Laporan Dokter</h3>

    <form method="GET">

        <input type="text"
               name="keyword"
               value="<?= $keyword ?>"
               placeholder="Cari nama dokter atau spesialis">

        <button type="submit" class="btn btn-secondary">
            Filter
        </button>

        <a href="<?= base_url('laporan/dokter') ?>"
           class="btn btn-secondary">
           Reset
        </a>

    </form>

    <br>

    <a href="<?= base_url('laporan/cetak_dokter') ?>"
       target="_blank"
       class="btn btn-primary mb-3">
       Cetak PDF
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
        </tr>

        <?php
        $no = 1;
        foreach($dokter as $d){
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d->nama_dokter ?></td>
            <td><?= $d->spesialis ?></td>
        </tr>

        <?php } ?>

    </table>

</div>