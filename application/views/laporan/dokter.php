<div class="container-fluid">
    <h3>Laporan Data Dokter</h3>

```
<br>

<a href="<?= site_url('laporan/cetak/dokter'); ?>"
   target="_blank"
   class="btn btn-primary btn-sm">
   Cetak PDF
</a>

<table class="table table-bordered mt-3">
    <tr>
        <th>No</th>
        <th>id dokter</th>
        <th>nama dokter</th>
        <th>Spesialis</th>
    </tr>

    <?php $no = 1; foreach($dokter as $d): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d->id_dokter; ?></td>
        <td><?= $d->nama_dokter; ?></td>
        <td><?= $d->spesialis; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
```

</div>
