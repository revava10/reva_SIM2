<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h2 class="h3 text-gray-800">
            <i class="fas fa-user-injured"></i> Data Pasien
        </h2>

        <a href="<?= site_url('admin/tambah_pasien'); ?>"
            class="btn btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah Pasien
        </a>

    </div>

    <!-- ALERT -->
    <?php if($this->session->flashdata('success')): ?>
        <div class="alert alert-success shadow-sm">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <!-- CARD STATISTIK -->
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card shadow border-left-primary">
                <div class="card-body">

                    <i class="fas fa-users fa-2x float-right text-gray-300"></i>

                    <h6 class="text-muted">Total Pasien</h6>
                    <h2><?= count($pasien); ?></h2>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-left-success">
                <div class="card-body">

                    <i class="fas fa-check-circle fa-2x float-right text-gray-300"></i>

                    <h6 class="text-muted">Data Aktif</h6>
                    <h2><?= count($pasien); ?></h2>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-left-warning">
                <div class="card-body">

                    <i class="fas fa-calendar-alt fa-2x float-right text-gray-300"></i>

                    <h6 class="text-muted">Tanggal Hari Ini</h6>
                    <h5><?= date('d-m-Y'); ?></h5>

                </div>
            </div>
        </div>

    </div>

    <!-- TABEL -->
    <div class="card shadow">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold" style="color:#800020;">
                <i class="fas fa-user-injured"></i> Daftar Pasien
            </h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover" id="dataTable">

                    <thead style="background:#800020;color:white;">
                        <tr>
                            <th>No</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Username</th>
                            <th>No Telepon</th>
                            <th width="120">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php $no=1; foreach($pasien as $p): ?>

                    <tr>

                        <td><?= $no++ ?></td>

                        <td>
                            <strong><?= $p->nama ?></strong>
                        </td>

                        <td><?= $p->tanggal_lahir ?></td>

                        <td><?= $p->alamat ?></td>

                        <td><?= $p->username ?></td>

                        <td>
                            <span class="badge badge-info p-2">
                                <?= $p->no_telp ?>
                            </span>
                        </td>

                        <td>

                        <a href="<?= site_url('admin/edit_pasien/'.$p->id_pasien); ?>"
                        class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="<?= site_url('admin/hapus_pasien/'.$p->id_pasien); ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus?')">
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