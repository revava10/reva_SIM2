<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pasien</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">

    <div class="card">
        <div class="card-header bg-primary text-white">
            Dashboard Pasien
        </div>

        <div class="card-body">
            <h4>Selamat Datang</h4>

            <p>
                Halo,
                <strong><?= $this->session->userdata('username'); ?></strong>
            </p>

            <p>
                Anda berhasil login sebagai <b>Pasien</b>.
            </p>

            <hr>

            <a href="<?= site_url('frontend/daftar'); ?>" class="btn btn-success">
                Daftar Berobat
            </a>

            <a href="<?= site_url('frontend/cek_status'); ?>" class="btn btn-info">
                Cek Status Pendaftaran
            </a>

            <a href="<?= site_url('auth/logout'); ?>" class="btn btn-danger">
                Logout
            </a>
        </div>
    </div>

</div>

</body>
</html>