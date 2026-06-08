<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Pasien</title>

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

    <h3>LAPORAN DATA PASIEN</h3>

    <table>
        <tr>
            <th>No</th>
            <th>ID Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
        </tr>

        <?php $no=1; foreach($pasien as $p): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $p->id_pasien; ?></td>
            <td><?= $p->nama; ?></td>
            <td><?= $p->jenis_kelamin; ?></td>
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