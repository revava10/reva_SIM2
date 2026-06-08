<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Dokter</title>

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

    <h3>LAPORAN DATA DOKTER</h3>

    <table>
        <tr>
            <th>No</th>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
        </tr>

        <?php $no=1; foreach($dokter as $d): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d->id_dokter; ?></td>
            <td><?= $d->nama_dokter; ?></td>
            <td><?= $d->spesialis; ?></td>
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