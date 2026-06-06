<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Pendaftaran Pasien</title>

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        h3{
            text-align: center;
            margin-bottom: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid #000;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }

        .rekap{
            width: 40%;
            margin-top: 20px;
        }

        .rekap td{
            text-align: left;
            padding: 8px;
        }

        @media print{
            .no-print{
                display: none;
            }
        }
    </style>
</head>
<body>

    <h3>LAPORAN PENDAFTARAN PASIEN</h3>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Dokter</th>
            <th>Tanggal Daftar</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        $total_diterima = 0;
        $total_ditolak = 0;
        ?>

        <?php foreach($data as $d) : ?>

        <?php
        if($d->status == 'Disetujui'){
            $total_diterima++;
        }

        if($d->status == 'Ditolak'){
            $total_ditolak++;
        }
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->nama_pasien; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= $d->tanggal_daftar; ?></td>
            <td><?= $d->status; ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

    <?php
    $total_pendaftaran = count($data);
    ?>

    <table class="rekap">
        <tr>
            <td><strong>Total Pendaftaran</strong></td>
            <td><?= $total_pendaftaran; ?></td>
        </tr>
        <tr>
            <td><strong>Pasien Diterima</strong></td>
            <td><?= $total_diterima; ?></td>
        </tr>
        <tr>
            <td><strong>Pasien Ditolak</strong></td>
            <td><?= $total_ditolak; ?></td>
        </tr>
    </table>

    <br><br>

    <p style="text-align:right;">
        Tangerang, <?= date('d-m-Y'); ?>
    </p>

    <script>
        window.print();
    </script>

</body>
</html>