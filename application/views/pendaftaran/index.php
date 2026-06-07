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

                <table class="table table-bordered table-hover dataTable" id="dataTable" width="100%">

                    <thead>
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
                                    <span class="badge badge-secondary"><?= $p->status; ?></span>
                                <?php endif; ?>
                            </td>
                            <td><?= $p->tanggal_daftar; ?></td>
                            <td>
                                <a href="<?= site_url('pendaftaran/edit/'.$p->id_pendaftaran); ?>" 
                                   class="btn btn-warning btn-sm">Edit</a>

                                <a href="<?= site_url('pendaftaran/hapus/'.$p->id_pendaftaran); ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center">Data pendaftaran kosong</td>
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

<!-- ================= STYLE FINAL ================= -->
<style>

/* FONT SAMA PASIEN */
body, table, th, td, .table, .dataTable {
    font-family: Arial, sans-serif !important;
}

/* TEXT TABLE */
table td {
    font-size: 14px;
    color: #333;
}

/* JUDUL */
h1, h2, h6 {
    font-family: Arial, sans-serif !important;
    color: #800020 !important;
    font-weight: bold;
}

/* CARD */
.card {
    border-radius: 10px !important;
    border: none !important;
    box-shadow: 0 2px 6px rgba(0,0,0,.08) !important;
}

/* HEADER TABLE (HILANGKAN ABU-ABU DATA TABLE) */
table.dataTable thead th,
thead th {
    background: #800020 !important;
    color: white !important;
    border-bottom: none !important;
}

/* HOVER ROW */
table.dataTable tbody tr:hover {
    background-color: #f8f0f2 !important;
}

/* BADGE */
.badge-success { background-color:#1cc88a !important; }
.badge-danger  { background-color:#e74a3b !important; }
.badge-warning { background-color:#800020 !important; }

/* UI DATA TABLE */
.dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter {
    margin-bottom: 10px;
    font-size: 14px;
}

/* BUTTON */
.btn {
    font-family: Arial, sans-serif !important;
}

</style>