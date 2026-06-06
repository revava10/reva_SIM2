<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Dokter</h1>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('dokter/update/'.$dokter->id_dokter); ?>">

<div class="form-group">
<label>Nama Dokter</label>
<input type="text" name="nama_dokter" value="<?= $dokter->nama_dokter ?>" class="form-control" required>
</div>

<div class="form-group">
<label>Spesialis</label>
<input type="text" name="spesialis" value="<?= $dokter->spesialis ?>" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">Update</button>
<a href="<?= site_url('dokter'); ?>" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</div>