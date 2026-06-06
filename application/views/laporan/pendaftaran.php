<div class="container-fluid">


<h3 class="mb-4">
    <i class="fas fa-file-medical"></i>
    Laporan Pendaftaran Pasien
</h3>

<!-- CARD STATISTIK -->
<div class="row">

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-primary">
            <div class="card-body">
                <h6>Total Pendaftaran</h6>
                <h3><?= count($data); ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-primary">
            <div class="card-body">
                <h6>Menunggu</h6>
                <h3>
                    <?= count(array_filter($data, function($d){
                        return $d->status == 'Diproses';
                    })); ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-primary">
            <div class="card-body">
                <h6>Disetujui</h6>
                <h3>
                    <?= count(array_filter($data, function($d){
                        return $d->status == 'Disetujui';
                    })); ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card shadow border-left-primary">
            <div class="card-body">
                <h6>Ditolak</h6>
                <h3>
                    <?= count(array_filter($data, function($d){
                        return $d->status == 'Ditolak';
                    })); ?>
                </h3>
            </div>
        </div>
    </div>

</div>

<!-- FILTER -->
<div class="card shadow mb-3">
    <div class="card-body">

        <form method="get" class="form-inline">

            <label class="mr-2">
                <strong>Bulan :</strong>
            </label>

            <input type="month"
                   name="bulan"
                   value="<?= $bulan; ?>"
                   class="form-control mr-2">

            <button type="submit"
                    class="btn btn-primary btn-sm mr-2">
                Filter
            </button>

            <a href="<?= site_url('laporan/pendaftaran'); ?>"
               class="btn btn-secondary btn-sm mr-2">
                Reset
            </a>

            <a href="<?= site_url('laporan/cetak_pendaftaran'); ?>"
               target="_blank"
               class="btn btn-danger btn-sm">
                Cetak PDF
            </a>

        </form>

    </div>
</div>

<!-- TABEL -->
<div class="card shadow">
    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered">

                <thead style="background:#800020;color:white;">
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Dokter</th>
                        <th>Tanggal Daftar</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                <?php $no=1; foreach($data as $d): ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d->nama_pasien; ?></td>
                    <td><?= $d->nama_dokter; ?></td>
                    <td><?= $d->tanggal_daftar; ?></td>

                    <td>
                        <?php if($d->status == 'Diproses'): ?>
                            <span class="badge badge-warning">
                                Menunggu
                            </span>

                            <?php elseif($d->status == 'Disetujui'): ?>
                            <span class="badge badge-maroon">
                                Disetujui
                            </span>
                        <?php else: ?>
                            <span class="badge badge-danger">
                                Ditolak
                            </span>
                        <?php endif; ?>
                    </td>

                </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>
</div>
```

</div>