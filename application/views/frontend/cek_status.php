<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Status Pendaftaran</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body{
            background:#f8f9fc;
        }

        .card{
            border:none;
            border-radius:15px;
        }

        .card-header{
            padding:18px 25px;
        }

        .table th{
            width:35%;
            background:#f8f9fc;
        }

        .logo-rs{
            text-align:center;
            margin-bottom:25px;
        }

        .logo-rs h2{
            color:#4e73df;
            font-weight:bold;
        }

        .info-box{
            background:#e8f1ff;
            border-left:5px solid #4e73df;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
        }

        .hasil-card{
            background:#fff;
            border-radius:10px;
            padding:20px;
            box-shadow:0 0 15px rgba(0,0,0,.08);
            margin-top:20px;
        }
    </style>

</head>
<body>

<div class="container py-5">

    <div class="logo-rs">
        <h2>🏥 Hospitally</h2>
        <p>Sistem Informasi Pendaftaran Pasien Online</p>
    </div>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        🔍 Cek Status Pendaftaran
                    </h4>
                </div>

                <div class="card-body">

                    <div class="info-box">
                        Masukkan nomor pendaftaran untuk melihat status pendaftaran.
                    </div>

                    <form method="post"
                          action="<?= site_url('frontend/proses_cek_status'); ?>">

                        <div class="form-group">
                            <label>Nomor Pendaftaran</label>

                            <input type="text"
                                   name="nomor_pendaftaran"
                                   class="form-control"
                                   placeholder="Masukkan nomor pendaftaran"
                                   required>
                        </div>

                        <button type="submit"
                                class="btn btn-primary">
                            Cek Status
                        </button>

                        <a href="<?= site_url('frontend'); ?>"
                           class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>

                </div>

            </div>

            <?php if(isset($hasil) && $hasil): ?>

            <div class="hasil-card">

                <h5 class="text-primary mb-3">
                    Hasil Pencarian
                </h5>

                <table class="table table-bordered">

                    <tr>
                        <th>Nomor Pendaftaran</th>
                        <td><?= $hasil->nomor_pendaftaran; ?></td>
                    </tr>

                    <tr>
                        <th>Nama Pasien</th>
                        <td><?= $hasil->nama_pasien; ?></td>
                    </tr>

                    <tr>
                        <th>Dokter</th>
                        <td><?= $hasil->nama_dokter; ?></td>
                    </tr>

                    <tr>
                        <th>Keluhan</th>
                        <td><?= $hasil->keluhan; ?></td>
                    </tr>

                    <tr>
                        <th>Tanggal Daftar</th>
                        <td><?= $hasil->tanggal_daftar; ?></td>
                    </tr>

                    <tr>
                        <th>Tanggal Kunjungan</th>
                        <td><?= $hasil->tanggal_kunjungan; ?></td>
                    </tr>

                    <tr>
                        <th>Jam Kunjungan</th>
                        <td><?= $hasil->jam_kunjungan; ?></td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>

                            <?php if($hasil->status == 'Proses'){ ?>

                                <span class="badge badge-warning">
                                    Proses
                                </span>

                            <?php } elseif($hasil->status == 'Disetujui'){ ?>

                                <span class="badge badge-success">
                                    Disetujui
                                </span>

                            <?php } elseif($hasil->status == 'Ditolak'){ ?>

                                <span class="badge badge-danger">
                                    Ditolak
                                </span>

                            <?php } ?>

                        </td>
                    </tr>

                </table>

            </div>

            <?php elseif(isset($hasil) && !$hasil): ?>

            <div class="alert alert-danger mt-3">
                Nomor pendaftaran tidak ditemukan.
            </div>

            <?php endif; ?>

        </div>

    </div>

</div>

</body>
</html>