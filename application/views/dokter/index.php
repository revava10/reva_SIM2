<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Data Dokter</h1>

    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= site_url('admin/tambah_dokter'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Dokter
    </a>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>id_dokter</th>
                            <th>nama_dokter</th>
                            <th>spesialis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php if(!empty($dokter)): ?>

                        <?php $no = 1; ?>
                        <?php foreach($dokter as $d): ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d->id_dokter; ?></td>
                            <td><?= $d->nama_dokter; ?></td>
                            <td><?= $d->spesialis; ?></td>

                            <td>
                                <a href="<?= site_url('admin/edit_dokter/'.$d->id_dokter); ?>"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?= site_url('admin/hapus_dokter/'.$d->id_dokter); ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="5" class="text-center">
                                Data dokter kosong
                            </td>
                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>