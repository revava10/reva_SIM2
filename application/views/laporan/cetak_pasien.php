<!DOCTYPE html>
<html>
<head>

    <title>Cetak Pasien</title>

    <style>

        table{
            width:100%;
            border-collapse: collapse;
        }

        table, th, td{
            border:1px solid black;
            padding:8px;
        }

    </style>

</head>

<body onload="window.print()">

    <h2>Laporan Data Pasien</h2>

    <table>

        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Keluhan</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        foreach($pasien as $p){
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p->nama ?></td>
            <td><?= $p->alamat ?></td>
            <td><?= $p->telepon ?></td>
            <td><?= $p->keluhan ?></td>
            <td><?= $p->status ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>