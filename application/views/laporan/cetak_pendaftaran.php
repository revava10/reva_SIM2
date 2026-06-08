<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Pendaftaran</title>

    <style>
        body{
            font-family: Arial;
        }

        h3{
            text-align: center;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td{
            border: 1px solid black;
        }

        th, td{
            padding: 8px;
            text-align: center;
        }

        @media print{
            button{
                display: none;
            }
        }
    </style>
</head>

<body>

    <h3>LAPORAN DATA PENDAFTARAN</h3>

    <table>
        <tr>
            <th>No</th>
            <th>ID Pendaftaran</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Tanggal Daftar</th>
        </tr>

        <?php $no=1; foreach($data as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->id_pendaftaran; ?></td>
            <td><?= $d->nama_pasien; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= $d->tanggal_daftar; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <br><br>

    <p style="text-align:right;">
        Tangerang, <?= date('d-m-Y'); ?><br><br><br>
        (Admin)
    </p>

    <script>
        window.print();
    </script>

</body>
</html>