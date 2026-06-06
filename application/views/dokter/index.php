<div class="container-fluid">

    <h2 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user-md"></i> Data Dokter
    </h2>

    <a href="<?= site_url('dokter/tambah'); ?>" class="btn btn-danger mb-3">
        <i class="fas fa-plus"></i> Tambah Dokter
    </a>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead style="background:#a0002d; color:white;">
                        <tr>
                            <th>No</th>
                            <th>id_dokter</th>
                            <th>nama_dokter</th>
                            <th>Spesialis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                                    <tbody>
                <?php $no = 1; foreach($dokter as $d): ?>
                <tr>
                    <td><?= $no++; ?></td>

                    <!-- TAMBAHAN INI -->
                    <td><?= $d->id_dokter; ?></td>

                    <td><?= $d->nama_dokter; ?></td>
                    <td><?= $d->spesialis; ?></td>

                    <td>
                        <a href="<?= site_url('dokter/edit/'.$d->id_dokter); ?>"
                        class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="<?= site_url('dokter/hapus/'.$d->id_dokter); ?>"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>

                </table>

            </div>

        </div>
    </div>

</div>