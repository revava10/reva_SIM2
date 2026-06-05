<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Data Pasien</h1>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('pasien/update/'.$pasien->id_pasien); ?>">

<div class="form-group">
<label>ID Pasien</label>
<input type="text"
       value="<?= $pasien->id_pasien; ?>"
       class="form-control"
       readonly>
</div>

<div class="form-group">
<label>Nama Pasien</label>
<input type="text"
       name="nama"
       value="<?= $pasien->nama; ?>"
       class="form-control"
       required>
</div>

<div class="form-group">
<label>Tanggal Lahir</label>
<input type="date"
       name="tanggal_lahir"
       value="<?= $pasien->tanggal_lahir; ?>"
       class="form-control"
       required>
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat"
          class="form-control"
          rows="3"
          required><?= $pasien->alamat; ?></textarea>
</div>

<div class="form-group">
<label>No. Telepon</label>
<input type="text"
       name="telepon"
       value="<?= $pasien->telepon; ?>"
       class="form-control"
       required>
</div>

<button type="submit" class="btn btn-primary">
    Update
</button>

<a href="<?= site_url('pasien'); ?>" class="btn btn-secondary">
    Kembali
</a>

</form>

</div>
</div>

</div>