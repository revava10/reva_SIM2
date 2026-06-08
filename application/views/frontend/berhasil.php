<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f7fc;
        }

        .success-box{
            margin-top:100px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="row justify-content-center success-box">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-success text-white text-center">
                    <h3>Pendaftaran Berhasil</h3>
                </div>

                <div class="card-body text-center">

                    <h4 class="text-success">
                        Data pendaftaran berhasil disimpan
                    </h4>

                    <br>

                    <?php if($this->session->flashdata('nomor_pendaftaran')): ?>

                        <p>Nomor Pendaftaran Anda:</p>

                        <h2 class="text-primary">
                            <?= $this->session->flashdata('nomor_pendaftaran'); ?>
                        </h2>

                    <?php endif; ?>

                    <br>

                    <a href="<?= site_url('frontend'); ?>"
                       class="btn btn-primary">
                        Kembali ke Beranda
                    </a>

                    <a href="<?= site_url('frontend/cek_status'); ?>"
                       class="btn btn-success">
                        Cek Status
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>