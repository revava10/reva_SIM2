<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= site_url('admin/tambah_pasien'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Pasien
    </a>

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>ID Pasien</th>
                            <th>nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>no_telp</th>
                            <th>Username</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php if(!empty($pasien)): ?>

                        <?php $no = 1; ?>
                        <?php foreach($pasien as $p): ?>

                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->id_pasien; ?></td>
                            <td><?= $p->nama; ?></td>
                            <td><?= $p->tanggal_lahir; ?></td>
                            <td><?= $p->alamat; ?></td>
                            <td><?= $p->no_telp; ?></td>
                            <td><?= $p->username; ?></td>

                            <td>
                                <a href="<?= site_url('admin/edit_pasien/'.$p->id_pasien); ?>"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?= site_url('admin/hapus_pasien/'.$p->id_pasien); ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="8" class="text-center">
                                Data pasien kosong
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