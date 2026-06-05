<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Edit Pendaftaran Pasien</h1>

<div class="card shadow">
<div class="card-body">

<form method="post" action="<?= site_url('pendaftaran/update/'.$pendaftaran->id_pendaftaran); ?>">

<div class="form-group">
<label>ID Pasien</label>
<input type="number" name="id_pasien"
       value="<?= $pendaftaran->id_pasien; ?>"
       class="form-control" required>
</div>

<div class="form-group">
<label>ID Dokter</label>
<input type="number" name="id_dokter"
       value="<?= $pendaftaran->id_dokter; ?>"
       class="form-control" required>
</div>

<div class="form-group">
<label>Nama Pasien</label>
<input type="text" name="nama_pasien"
       value="<?= $pendaftaran->nama_pasien; ?>"
       class="form-control" required>
</div>

<div class="form-group">
<label>Keluhan</label>
<textarea name="keluhan"
          class="form-control"
          rows="3"
          required><?= $pendaftaran->keluhan; ?></textarea>
</div>

<div class="form-group">
<label>Tanggal Kunjungan</label>
<input type="date"
       name="tanggal_kunjungan"
       value="<?= $pendaftaran->tanggal_kunjungan; ?>"
       class="form-control"
       required>
</div>

<div class="form-group">
<label>Jam Kunjungan</label>
<input type="time"
       name="jam_kunjungan"
       value="<?= $pendaftaran->jam_kunjungan; ?>"
       class="form-control"
       required>
</div>

<div class="form-group">
<label>Status</label>
<select name="status" class="form-control" required>

<option value="Proses"
<?= ($pendaftaran->status == 'Proses') ? 'selected' : ''; ?>>
Proses
</option>

<option value="Disetujui"
<?= ($pendaftaran->status == 'Disetujui') ? 'selected' : ''; ?>>
Disetujui
</option>

<option value="Ditolak"
<?= ($pendaftaran->status == 'Ditolak') ? 'selected' : ''; ?>>
Ditolak
</option>

</select>
</div>

<div class="form-group">
<label>Tanggal Daftar</label>
<input type="datetime-local"
       name="tanggal_daftar"
       value="<?= date('Y-m-d\TH:i', strtotime($pendaftaran->tanggal_daftar)); ?>"
       class="form-control"
       required>
</div>

<button type="submit" class="btn btn-primary">
    Update
</button>

<a href="<?= site_url('pendaftaran'); ?>" class="btn btn-secondary">
    Kembali
</a>

</form>

</div>
</div>

</div>