<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berobat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f7fb;
        }

        .card{
            border:none;
            border-radius:15px;
        }

        .card-header{
            border-radius:15px 15px 0 0 !important;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Form Pendaftaran Berobat</h4>
                </div>

                <div class="card-body">

                    <form action="<?= site_url('frontend/simpan'); ?>" method="post">

                        <div class="mb-3">
                            <label>Nama Pasien</label>
                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal Lahir</label>
                            <input type="date"
                                   name="tanggal_lahir"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Alamat</label>
                            <textarea name="alamat"
                                      class="form-control"
                                      rows="3"
                                      required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>No Telepon</label>
                            <input type="text"
                                   name="no_telp"
                                   class="form-control"
                                   required>
                        </div>

                        <hr>

                        <h5>Akun Login Pasien</h5>

                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>

                        <hr>

                        <div class="mb-3">
                            <label>Dokter Tujuan</label>

                            <select name="id_dokter"
                                    class="form-control"
                                    required>

                                <option value="">
                                    -- Pilih Dokter --
                                </option>

                                <?php foreach($dokter as $d): ?>
                                    <option value="<?= $d->id_dokter; ?>">
                                        <?= $d->nama_dokter; ?> - <?= $d->spesialis; ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Keluhan</label>
                            <textarea name="keluhan"
                                      class="form-control"
                                      rows="4"
                                      required></textarea>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal Kunjungan</label>
                            <input type="date"
                                   name="tanggal_kunjungan"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Jam Kunjungan</label>
                            <input type="time"
                                   name="jam_kunjungan"
                                   class="form-control"
                                   required>
                        </div>

                        <button type="submit"
                                class="btn btn-primary">
                            Daftar Berobat
                        </button>

                        <a href="<?= site_url('dashboard_pasien'); ?>"
                           class="btn btn-secondary">
                            Kembali
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>