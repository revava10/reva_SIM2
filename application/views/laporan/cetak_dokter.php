<!DOCTYPE html>
<html>
<head>

    <title>Cetak Dokter</title>

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

    <h2>Laporan Data Dokter</h2>

    <table>

        <tr>
            <th>No</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
        </tr>

        <?php
        $no = 1;
        foreach($dokter as $d){
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d->nama_dokter ?></td>
            <td><?= $d->spesialis ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>