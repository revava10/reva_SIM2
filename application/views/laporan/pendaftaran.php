<div class="container-fluid">
    <h3>Laporan Data Pendaftaran</h3>

    <br>

    <a href="<?= site_url('laporan/cetak/pendaftaran'); ?>"
       target="_blank"
       class="btn btn-primary btn-sm">
       Cetak PDF
    </a>

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>ID Pendaftaran</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Daftar</th>
        </tr>

        <?php $no = 1; foreach($data as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->id_pendaftaran; ?></td>
            <td><?= $d->nama_pasien; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= $d->tanggal_daftar; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>