<div class="container-fluid">
    <h3>Laporan Data Pasien</h3>

    <br>

    <a href="<?= site_url('laporan/cetak/pasien'); ?>"
       target="_blank"
       class="btn btn-primary btn-sm">
       Cetak PDF
    </a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>ID Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
        </tr>

        <?php $no = 1; foreach($pasien as $p): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->id_pasien; ?></td>
            <td><?= $p->nama; ?></td>
            <td><?= $p->jenis_kelamin; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>