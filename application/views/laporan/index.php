<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Laporan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fc;
        }

        .card {
            border: none;
            border-radius: 10px;
        }

        .card-body h3 {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container-fluid mt-4">

    <h1 class="h3 mb-4 text-gray-800">
        Dashboard Laporan
    </h1>

    <?php
    // Contoh data (ganti dengan query database)
    $total_pasien = 150;
    $total_dokter = 20;
    $total_pendaftaran = 350;
    ?>

    <div class="row">

        <div class="col-md-4">
            <div class="card bg-primary text-white mb-3 shadow">
                <div class="card-body">
                    Total Pasien
                    <h3><?= $total_pasien; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white mb-3 shadow">
                <div class="card-body">
                    Total Dokter
                    <h3><?= $total_dokter; ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-info text-white mb-3 shadow">
                <div class="card-body">
                    Total Pendaftaran
                    <h3><?= $total_pendaftaran; ?></h3>
                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>