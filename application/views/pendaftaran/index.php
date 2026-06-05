<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Data Pendaftaran Pasien</h1>

    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <a href="<?= site_url('pendaftaran/tambah'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Pendaftaran
    </a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Jam Kunjungan</th>
                            <th>Status</th>
                            <th>Tanggal Daftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php if(!empty($pendaftaran)): ?>
                        <?php $no = 1; ?>
                        <?php foreach($pendaftaran as $p): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->nama_pasien; ?></td>
                            <td><?= $p->keluhan; ?></td>
                            <td><?= $p->tanggal_kunjungan; ?></td>
                            <td><?= $p->jam_kunjungan; ?></td>
                            <td>
                                <?php if($p->status == 'Proses'): ?>
                                    <span class="badge badge-warning">Proses</span>
                                <?php elseif($p->status == 'Disetujui'): ?>
                                    <span class="badge badge-success">Disetujui</span>
                                <?php elseif($p->status == 'Ditolak'): ?>
                                    <span class="badge badge-danger">Ditolak</span>
                                <?php else: ?>
                                    <span class="badge badge-secondary">
                                        <?= $p->status; ?>
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td><?= $p->tanggal_daftar; ?></td>
                            <td>
                                <a href="<?= site_url('pendaftaran/edit/'.$p->id_pendaftaran); ?>" 
                                   class="btn btn-warning btn-sm">
                                   Edit
                                </a>

                                <a href="<?= site_url('pendaftaran/hapus/'.$p->id_pendaftaran); ?>" 
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
                                Data pendaftaran kosong
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